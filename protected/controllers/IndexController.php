<?php
/**
 * ランチマップTOP画面表示
 * @author moriyasu
 *
 */
class IndexController extends LunchController
{
    // レイアウト
    public $layout = LunchLogic::LUNCH_LYAOUT;

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