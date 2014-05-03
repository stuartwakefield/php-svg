<?php

namespace Svg\Path;

class CommandRenderer {
	
	public function render($commands) {
		$segments = array();
		foreach ($commands as $command) {
			switch ($command->type()) {

				case Command::UNKNOWN :
					break;

				case Command::CLOSE :
					$segments[] = 'Z';
					break;

				case Command::MOVE_ABS :
					$segments[] = $this->command('M', array(
						$command->x(),
						$command->y()
					));
					break;

				case Command::MOVE_REL :
					$segments[] = $this->command('m', array(
						$command->dx(),
						$command->dy()
					));
					break;

				case Command::LINE_ABS :
					$segments[] = $this->command('L', array(
						$command->x(),
						$command->y()
					));
					break;

				case Command::LINE_REL :
					$segments[] = $this->command('l', array(
						$command->dx(),
						$command->dy()
					));
					break;

				case Command::CUBIC_CURVE_ABS :
					$segments[] = $this->command('C', array(
						$command->x1(),
						$command->y1(),
						$command->x2(),
						$command->y2(),
						$command->x(),
						$command->y()
					));
					break;

				case Command::CUBIC_CURVE_REL :
					$segments[] = $this->command('c', array(
						$command->dx1(),
						$command->dy1(),
						$command->dx2(),
						$command->dy2(),
						$command->dx(),
						$command->dy()
					));
					break;

				case Command::QUADRATIC_CURVE_ABS :
					$segments[] = $this->command('Q', array(
						$command->cx(),
						$command->cy(),
						$command->x(),
						$command->y()
					));
					break;
				case Command::QUADRATIC_CURVE_REL :
					break;
				case Command::ARC_ABS :
					break;
				case Command::ARC_REL :
					break;
				case Command::LINE_HORIZONTAL_ABS :
					$segments[] = $this->command('H', array(
						$command->x()
					));
					break;

				case Command::LINE_HORIZONTAL_REL :
					$segments[] = $this->command('h', array(
						$command->dx()
					));
					break;

				case Command::LINE_VERTICAL_ABS :
					$segments[] = $this->command('V', array(
						$command->y()
					));
					break;

				case Command::LINE_VERTICAL_REL :
					$segments[] = $this->command('v', array(
						$command->dy()
					));
					break;

				case Command::CUBIC_CURVE_SMOOTH_ABS :
					break;
				case Command::CUBIC_CURVE_SMOOTH_REL :
					break;
				case Command::QUADRATIC_CURVE_SMOOTH_ABS :
					break;
				case Command::QUADRATIC_CURVE_SMOOTH_REL :
					break;
			}
		}
		return implode('', $segments);
	}

	/**
	 * Formats a command string given the command identifier and parameters.
	 * @see http://www.w3.org/TR/SVG11/paths.html#PathData
	 * 
	 * @param  string $identifier The command identifier.
	 * @param  array  $params     The command parameters.
	 * @return string
	 */
	public function command($identifier, $params) {
		return $identifier . implode(' ', $params);
	}

}