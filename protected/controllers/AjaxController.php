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
		$lunches = $models->geoNearCommand($indexForm->longitude, $indexForm->latitude);

		$cnt = 0;
		foreach ($lunches['results'] as $lunch) {
			$dis = $lunch['dis'] * 6378 * 1000;
			$lunches['results'][$cnt]['distance'] = floor($dis);
			$cnt++;
		}

		// テンプレート表示
		$this->renderPartial('index', array(
				'lunches' => $lunches['results']));
	}

}