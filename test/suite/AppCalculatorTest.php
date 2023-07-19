<?php
use \PHPUnit\Framework\TestCase;
use \App\Calculator;

/**
 * @covers \App\Calculator
 */
class AppCalculatorTest extends TestCase
{
	protected $sut;

	/**
	 * @before
	 */
	protected function _setUp()
	{
		$this->sut = new Calculator();
	}

	public function testAdd()
	{
		$result = $this->sut->Add(2, 3);
		$this->assertEquals(5, $result);
	}

	public function testSubtract()
	{
		$result = $this->sut->Subtract(5, 2);
		$this->assertEquals(3, $result);
	}

	public function testMultiply()
	{
		$result = $this->sut->Multiply(4, 3);
		$this->assertEquals(12, $result);
	}

	public function testDivide()
	{
		$result = $this->sut->Divide(10, 2);
		$this->assertEquals(5, $result);
	}

	public function testDivideByZero()
	{
		$result = $this->sut->Divide(10, 0);
		$this->assertEquals(0, $result);
	}
}
?>