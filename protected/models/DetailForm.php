<?php
/**
 * ランチマップ詳細画面フォーム
 * @author moriyasu
 *
 */
class DetailForm extends CFormModel
{
	/**
	 * オブジェクトID
	 * @var string
	 */
	public $id;

	/**
	 * 単体チェック
	 */
	public function rules()
	{
		return array(
			array('id', 'required'),
			array('id', 'match', 'pattern' =>'/^[0-9a-fA-F]{24}$/')
		);
	}

}
