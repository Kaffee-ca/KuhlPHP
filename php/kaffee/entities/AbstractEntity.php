<?php

namespace kaffee\entities;

/**
 * .
 * @author ahorvath
 */
class AbstractEntity {

	private $id;
	private $info;

	/**
	 * .
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * .
	 * @param int $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * .
	 * @return string
	 */
	public function getInfo() {
		return $this->info;
	}

	/**
	 * .
	 * @param string $info
	 */
	public function setInfo($info) {
		$this->info = $info;
	}

}
