<?php
/**
 * ランチマップ詳細画面表示
 * @author moriyasu
 *
 */
class DetailController extends LunchController
{
    // レイアウト
    public $layout = LunchLogic::LUNCH_LYAOUT;

    /**
     * ランチマップ詳細画面表示
     * @param id オブジェクトID
     */
    public function actionIndex()
    {
        // フォームをインスタンス化
        $detailForm = new DetailForm();
        $detailForm->attributes = $_GET;
        if (!$detailForm->validate()) {
            throw CHttpException('不正な値です。');
        }

        // Lunchesコレクション読み込み
        $models = new Lunches();
        $lunch = $models->findOne($detailForm->id);

        // テンプレート表示
        $this->render('index', array(
                'lunch' => $lunch));
    }

}