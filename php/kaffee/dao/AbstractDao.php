<?php

namespace kaffee\dao;

use kaffee\entities\AbstractEntity;

/**
 * .
 * @author vszakonyi
 */
class AbstractDao {

	private $class;

	protected function AbstractDao($class) {
		$this->class = $class;
	}

	protected $entityManager;

	function getEntityManager() {
		return $this->entityManager;
	}

	function setEntityManager($em) {
		$this->entityManager = $em;
	}

	function insert(AbstractEntity $entity) {
		$entityManager->persist($entity);
	}

	function delete(AbstractEntity $entity) {

	}

	/**
	 * .
	 * @return array
	 */
	function selectAll() {
		return 'SELECT * FROM ' . $class;
	}

	function selectById($id) {
		return 'SELECT * FROM ' . $class . ' WHERE id = ' . $id;
	}

	function selectByIds(array $ids) {
		$ret = 'SELECT * FROM ' . $class . ' WHERE id IN(';
		foreach ($ids as $id) {
			$ret.=strval($id) . ',';
		}
		return substr($ret, 0, strlen($ret) - 2) . ')';
	}

}
