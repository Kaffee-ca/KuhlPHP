<?php

namespace kaffee\beans;

/**
 * Mimicking Java's bean definition.
 * Implementing setters/getters are not necessary anymore.
 * @author ahorvath
 */
class Bean {
	public function __call($name, $argument) {
		if (substr($name, 0, 3) == 'get') {
			$property = strtolower(substr($name, 3,1)) . substr($name, 4);
			return $this->$property;
		} else if (substr($name, 0, 3) == 'set') {
			$property = strtolower(substr($name, 3,1)) . substr($name, 4);
			if (property_exists($this, $property)) {
				$this->$property = $argument;
			} else throw new Exception();
		} else if (substr($name, 0, 2) == 'is') {
			$property = strtolower(substr($name, 2,1)) . substr($name, 3);
			return $this->$property;
		} else throw new Exception();
	}
}
