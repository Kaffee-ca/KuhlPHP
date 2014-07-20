<?php

namespace kaffee\dao;

/**
 * 
 * @author ahorvath
 */
class FakeUniqueEntityDao extends UniqueEntityDao {
    private static $COUNTER = 1;
    private static $DATA = array();

    function delete(Entity $entity) {
        
    }

    function deleteById($id) {
        
    }

    function persist(Entity $entity) {
        $this->DATA[$this->COUNTER] = $entity;
        $this->COUNTER++;
    }

    function selectAll() {
        return $this->DATA;
    }

    function selectById($id) {
        return $this->DATA[$id];
    }

    function selectByIds(array $ids) {
        $ret = array();
        foreach ($id as $ids) {
            array_push($ret, &$this->DATA[$id]);
        }
        return $ret;
    }

    function deleteBySid($sid) {
        
    }

    function selectBySid($sid) {
        
    }

    function selectBySids(array $sids) {
        
    }
}
