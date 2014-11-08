<?php

namespace kaffee\entities\abstracts;

use kaffee\entities\NamedEntity;

/**
 * Base for entities with name.
 * @author ahorvath
 */
class AbstractNamedEntity extends AbstractUniqueEntity implements NamedEntity {

    private $name;

    /**
     * .
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * .
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

}
