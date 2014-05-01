<?php

namespace Svg\Path;

class CommandSet {
	
	private $elements = array();

	public function add($instruction) {
		$this->elements[] = $instruction;
	}

	public function __toString() {
		return implode('', $this->elements);
	}

}
