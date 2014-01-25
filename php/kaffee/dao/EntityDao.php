<?php
namespace kaffee\dao;

/**
 * .
 * @author ahorvath
 */
interface EntityDao {
	function delete(AbstractEntity $entity);
	function deleteById($id);
	function persist(AbstractEntity $entity);
	function selectAll();
	function selectById($id);
	function selectByIds(array $ids);
}
