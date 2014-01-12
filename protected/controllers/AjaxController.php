<?php
Yii::import("application.models.form.*");
Yii::import("application.models.mongodb.*");
Yii::import("application.models.const.*");
/**
 * ランチマップAjax
 * @author moriyasu
 *
 */
class AjaxController extends LunchController
{
    // レイアウト
    public $layout = null;

    /**
     * ランチ情報Ajax取得
     */
    public function actionGetLunchList()
    {
        // フォームをインスタンス化
        $indexForm = new IndexForm();
        $indexForm->attributes = $_GET;
        if (!$indexForm->validate()) {
            throw CHttpException('不正な値です。');
        }

        // Lunchesコレクション読み込み
        $models = new Lunches();
        $lunches = $models->geoNearCommand($indexForm->longitude, $indexForm->latitude);

        // カウント設定
        $start = $indexForm->page * LunchConst::DISPLAY_CNT;
        $end = $start + LunchConst::DISPLAY_CNT;
        $total = count($lunches['results']);

        // 次ページチェック
        if ($end >= $total) {
            $end = $total;
            $hasNext = false;
        } else {
            $hasNext = true;
        }

        // 現在地からの距離を算出する
        $renderLunches = array();
        for ($i = $start; $i < $end; $i++) {
            $dis = $lunches['results'][$i]['dis'] * 6378 * 1000;
            $lunches['results'][$i]['distance'] = floor($dis);
            $renderLunches[] = $lunches['results'][$i];
        }

        // テンプレート表示
        $this->renderPartial('index', array(
                    'lunches' => $renderLunches,
                    'total' => $total,
                    'hasNext' => $hasNext,
                    )
                );
    }

}