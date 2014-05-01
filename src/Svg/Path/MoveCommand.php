<?php

namespace Svg\Path;

class MoveCommand {
	
	private $dx;
	private $dy;

	public function __construct($dx, $dy) {
		$this->dx = $dx;
		$this->dy = $dy;
	}

	public function __toString() {
		return 'm' . implode(' ', array(
			$this->dx, $this->dy
		));
	}

}