<?php
Yii::import("application.models.form.*");
Yii::import("application.models.mongodb.*");
Yii::import("application.models.const.*");
/**
 * ランチマップTOP画面表示
 * @author moriyasu
 *
 */
class IndexController extends LunchController
{
    // 外部JavaScript
    public $externalJavaScript = array('lunch.js');

    /**
     * ランチマップTOP画面表示
     */
    public function actionIndex()
    {
        // テンプレート表示
        $this->render('index');
    }

}