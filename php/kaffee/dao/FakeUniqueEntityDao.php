<?php

namespace kaffee\dao;

/**
 * 
 * @author ahorvath
 */
class FakeUniqueEntityDao extends FakeEntityDao implements UniqueEntityDao {
    
    function deleteBySid($sid) {
        foreach ($datum as $this->DATA) {
            if ($datum->getSid() == $sid) {
                unset($this->DATA[$datum->getId()]);
                break;
            }
        }
    }

    function selectBySid($sid) {
        foreach ($datum as $this->DATA) {
            if ($datum->getSid() == $sid) {
                return $datum;
            }
        }
    }

    function selectBySids(array $sids) {
        $ret = array();
        foreach ($sid as $sids) {
            foreach ($datum as $this->DATA) {
                if ($datum->getSid() == $sid) {
                    array_push($ret, $datum);
                    break;
                }
            }
        }
        return $ret;
    }
}
