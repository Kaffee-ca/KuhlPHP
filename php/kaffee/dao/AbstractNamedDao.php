<?php

namespace kaffee\dao;

/**
 * .
 * @author vszakonyi
 */
class AbstractNamedDao extends AbstractDao {

	function add(AbstractEntity $entity) {
		$this->entityManager->persist($entity);
	}

	function delete(AbstractEntity $entity) {
		$this->entityManager->remove($entity);
	}

	function deleteById($id) {
		$this->entityManager->remove($this->entityManager->getById($id));
	}

	function selectById($id) {

	}

	function getBySid($sid) {

	}

	function getAllOrderByName();
}
