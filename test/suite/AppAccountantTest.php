<?php
use \App\Accountant;

use \App\Calculator;

/** @covers \App\Accountant */
class AppAccountantTest extends \PHPUnit\Framework\TestCase
{
	public function testMeaningOfLife()
	{
		$accountant = new Accountant();
		$result = $accountant->MeaningOfLife();
		$this->assertEquals(42, $result);
	}

	public function testMeaningOfLifeWithMockedCalculator()
	{
		$calculatorMock = $this->getMockBuilder('\App\Calculator')->getMock();
		$calculatorMock->expects($this->exactly(2))
			->method('Add')
			->willReturnMap([
				[8, 4, 12],
				[30, 12, 42],
			]);
		$calculatorMock->expects($this->once())
			->method('Multiply')
			->with(12, 5)
			->willReturn(60);
		$calculatorMock->expects($this->once())
			->method('Divide')
			->with(60, 2)
			->willReturn(30);
		$calculatorMock->expects($this->never())
			->method('Subtract');
		$accountant = new Accountant($calculatorMock);
		$result = $accountant->MeaningOfLife();
		$this->assertEquals(42, $result);
	}
}
?>