<?php
/**
 * ランチマップAjax
 * @author moriyasu
 *
 */
class AjaxController extends Controller
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
		$lunches = $models->nearSphere($indexForm->longitude, $indexForm->latitude);

		// テンプレート表示
		$this->renderPartial('index', array(
				'lunches' => $lunches));
	}

}