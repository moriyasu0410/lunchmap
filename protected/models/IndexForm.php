<?php
/**
 * ランチマップTOP画面フォーム
 * @author moriyasu
 *
 */
class IndexForm extends CFormModel
{
	/**
	 * 経度
	 * @var int
	 */
	public $longitude;

	/**
	 * 緯度
	 * @var int
	 */
	public $latitude;

	/**
	 * 単体チェック
	 */
	public function rules()
	{
		return array(
			array('longitude, latitude', 'required'),
			array('longitude, latitude', 'numerical'),
		);
	}

}
