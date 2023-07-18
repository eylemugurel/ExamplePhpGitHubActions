<?php
namespace App;

class Calculator
{
	public function Add($a, $b) {
		return $a + $b;
	}

	public function Subtract($a, $b) {
		return $a - $b;
	}

	public function Multiply($a, $b) {
		return $a * $b;
	}

	public function Divide($a, $b) {
		if (0 === $b)
			return 0;
		return $a / $b;
	}
}
?>