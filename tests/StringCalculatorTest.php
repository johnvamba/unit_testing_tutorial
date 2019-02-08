<?php
declare(strict_types=1);

namespace Tests;
use StringCalculator;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

final class StringCalculatorTest extends TestCase {
	public function testIsStringCalculatorInstance(){
		$this->assertInstanceOf(StringCalculator::class, new StringCalculator);
	}
	//Exceptions
	public function testAddMethodWithMoreThanTwoItemsException(){
		$this->expectException(InvalidArgumentException::class);
		StringCalculator::add('1,3,5,6');
	}
	//Assert total
	public function testAddMethodTotalSample(){
		$this->assertEquals(StringCalculator::add('2,3'), 5);
	} 

}