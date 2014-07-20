<?php
namespace kaffee\dao;

/**
 * 
 * @author ahorvath
 */
abstract class FakeUniqueEntityDao {
    public function FakeUniqueEntityDao() {
    }
    
    protected abstract function getData();
}
