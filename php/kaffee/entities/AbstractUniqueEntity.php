<?php

namespace kaffee\entities;

/**
 * .
 * @author ahorvath
 */
class AbstractUniqueEntity extends AbstractEntity {

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
