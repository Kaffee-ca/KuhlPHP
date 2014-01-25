<?php
namespace kaffee\dao;

/**
 * .
 * @author ahorvath
 */
interface UniqueEntityDao extends EntityDao {
	function deleteBySid($sid);
	function selectBySid($sid);
	function selectBySids(array $sids);
}
