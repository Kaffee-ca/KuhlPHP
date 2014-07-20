<?php
namespace kaffe\entities;
/**
 * .
 * @author ahorvath
 */
interface Entity {

    function getId();

    function setId($id);

    /**
     * .
     * @return string
     */
    function getInfo();

    /**
     * .
     * @param string $info
     */
    function setInfo($info);
}
