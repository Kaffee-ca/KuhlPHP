<?php

namespace kaffee\dao;

/**
 * 
 * @author ahorvath
 */
class FakeEntityDao implements EntityDao {

    protected $COUNTER = 1;
    protected $DATA = array();

    function delete(Entity $entity) {
        foreach ($date as $this->DATA) {
            if ($date == $entity) {
                unset($this->DATA[$entity->getId()]);
                break;
            }
        }
    }

    function deleteById($id) {
        unset($this->DATA[$id]);
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
}
