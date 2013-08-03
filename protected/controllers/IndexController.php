<?php
/**
 * ランチマップTOP画面表示
 * @author moriyasu
 *
 */
class IndexController extends Controller
{
	// レイアウト
	public $layout = LunchLogic::LUNCH_LYAOUT;

	/**
	 * ランチマップTOP画面表示
	 */
	public function actionIndex()
	{
		// テンプレート表示
		$this->render('index');
	}

}