<?php
namespace App;

class Accountant
{
	private $calculator;

	public function __construct($calculator =null) {
		$this->calculator = $calculator ? $calculator : new Calculator();
	}

	public function MeaningOfLife() {
		$result = $this->calculator->Add(8, 4); // 12
		$result = $this->calculator->Multiply($result, 5); // 60
		$result = $this->calculator->Divide($result, 2); // 30
		$result = $this->calculator->Add($result, 12); // 42
		return $result;
	}
}
?>
