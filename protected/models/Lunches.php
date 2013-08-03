<?php
/**
 * ランチコレクションモデル
 * @author moriyasu
 *
 */
class Lunches extends MongoConnection
{
	/**
	 * ランチ検索（近い順）
	 * @param int $longitude
	 * @param int $latitude
	 * @return MongoCursor Mongoカーソル
	 */
	public function nearSphere($longitude, $latitude)
	{
		// mongoDB接続
// 		$connection = new MongoClient();
		$connection = parent::getConnection();

		// DB選択
		$db = $connection->lunch;

		// コレクション選択
		$collection = $db->Lunches;

		// 検索
		$cursor = $collection->find(array(
					'location'=>array(
						'$nearSphere'=>array(
								$longitude, $latitude
						)
					)
				)
		);
		return $cursor;

	}

	/**
	 * ランチ検索（1件)
	 * @param string $id オブジェクトID
	 */
	public function findOne($id = null)
	{
		// mongoDB接続
// 		$connection = new MongoClient();
		$connection = parent::getConnection();

		// DB選択
		$db = $connection->lunch;

		// コレクション選択
		$collection = $db->Lunches;

		// 検索
		$article = $collection->findOne(array(
					'_id' => new MongoId($id)
					)
		);
		return $article;

	}

}