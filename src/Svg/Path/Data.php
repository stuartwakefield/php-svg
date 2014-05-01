<?php

namespace Svg\Path;

class Data {
	
	private $commands = array();

	public function __construct() {
		$this->commands = new CommandSet;
	}

	public function moveTo($x, $y) {
		$this->commands->add(new MoveToCommand($x, $y));
	}

	public function move($dx, $dy) {
		$this->commands->add(new MoveCommand($dx, $dy));
	}

	public function lineTo($x, $y) {
		$this->commands->add(new LineToCommand($x, $y));
	}

	public function quadraticCurveTo($cx, $cy, $x, $y) {
		$this->commands->add(new QuadraticCurveToCommand($cx, $cy, $x, $y));
	}

	public function __toString() {
		return (string) $this->commands;
	}

}