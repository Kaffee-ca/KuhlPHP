<?php
namespace kaffee\entities;

/**
 * .
 * @author ahorvath
 */
interface NamedEntity extends UniqueEntity {
    function getName();
    function setName($name);
}
