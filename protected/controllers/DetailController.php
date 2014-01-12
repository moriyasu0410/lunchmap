<?php
Yii::import("application.models.form.*");
Yii::import("application.models.mongodb.*");
Yii::import("application.models.const.*");
/**
 * ランチマップ詳細画面表示
 * @author moriyasu
 *
 */
class DetailController extends LunchController
{
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