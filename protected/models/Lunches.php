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
	 * @param string $longitude
	 * @param string $latitude
	 * @return array ランチコレクション配列
	 */
	public function geoNearCommand($longitude, $latitude)
	{
		// mongoDB接続
// 		$connection = new MongoClient();
		$connection = parent::getConnection();

		// DB選択
		$db = $connection->lunch;

		// 検索
		$result = $db->command(array(
				    'geoNear' => 'Lunches',
				    'near' => array(
							(float)$longitude, (float)$latitude
				    ),
				    'spherical' => true,
				    'uniqueDocs' => true,
				    'num' => 10,
				)
		);
	return $result;

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