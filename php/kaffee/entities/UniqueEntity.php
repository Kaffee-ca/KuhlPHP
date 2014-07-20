<?php
namespace kaffee\entities;

/**
 * .
 * @author ahorvath
 */
interface UniqueEntity extends Entity {
    function getSid();
    function setSid($sid);
}
