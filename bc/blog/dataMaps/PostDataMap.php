<?php 

namespace bc\blog\dataMaps;

use bc\blog\model\Post;
use bc\model\DataMap;

/**
 * Class PostDataMap
 */
class PostDataMap extends DataMap {
	
	
	protected function initSql() {
		$this->className = 'bc\\blog\\model\\Post';
		$this->findOneSql = 'SELECT `id`, `title`, `subTitle`, `text`, `createTime`, `status`, `canComment` FROM `posts` WHERE `id`=:id';
		$this->findAllSql = 'SELECT `id`, `title`, `subTitle`, `text`, `createTime`, `status`, `canComment` FROM `posts`';
		$this->findByIdsSql = 'SELECT `id`, `title`, `subTitle`, `text`, `createTime`, `status`, `canComment` FROM `posts` WHERE `id` IN (:ids)';
		$this->deleteSql = 'DELETE FROM `posts` WHERE `id`=:id';
		$this->countSql = 'SELECT count(`id`) FROM `posts`';
		$this->insertSql = 'INSERT INTO `posts` (`title`, `subTitle`, `text`, `createTime`, `status`, `canComment`) VALUES (:title, :subTitle, :text, :createTime, :status, :canComment)';
		$this->updateSql = 'UPDATE `posts` SET `title`=:title, `subTitle`=:subTitle, `text`=:text, `status`=:status, `canComment`=:canComment WHERE id=:id';
	}
	
	/**
	 * @param Post $item
	 * @return array
	 */
	protected function getInsertBindings($item) {
		return array(
			':title' => $item->getTitle(),
			':subTitle' => $item->getSubTitle(),
			':text' => $item->getText(),
			':createTime' => $item->getCreateTime(),
			':status' => $item->getStatus(),
			':canComment' => $item->getCanComment(),
		);
	}
	
	/**
	 * @param Post $item
	 * @return array
	 */
	protected function getUpdateBindings($item) {
		return array(
			':title' => $item->getTitle(),
			':subTitle' => $item->getSubTitle(),
			':text' => $item->getText(),
			':createTime' => $item->getCreateTime(),
			':status' => $item->getStatus(),
			':canComment' => $item->getCanComment(),
		);
	}
	
}
