<?php

namespace kaffee\entities\abstracts;

use kaffee\entities\UniqueEntity;

/**
 * Base for entities with SID.
 * @author ahorvath
 */
class AbstractUniqueEntity extends AbstractEntity implements UniqueEntity {

    private $sid;

    /**
     * .
     * @return string
     */
    public function getSid() {
        return $this->sid;
    }

    /**
     * .
     * @param string $sid
     */
    public function setSid($sid) {
        $this->sid = $sid;
    }

}
