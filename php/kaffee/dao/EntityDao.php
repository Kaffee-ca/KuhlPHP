<?php
namespace kaffee\dao;

use kaffe\entities\Entity;
/**
 * .
 * @author ahorvath
 */
interface EntityDao {
	function delete(Entity $entity);
	function deleteById($id);
	function persist(Entity $entity);
	function selectAll();
	function selectById($id);
	function selectByIds(array $ids);
}
