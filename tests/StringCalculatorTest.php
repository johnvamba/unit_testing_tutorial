<?php
declare(strict_types=1);

namespace Tests;
use StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase {
	public function testIsStringCalculatorInstance(){
		$this->assertInstanceOf(StringCalculator::class, new StringCalculator);
	}
	//Exceptions
	public function testAddMoreThanTwoItemsException(){
		$this->expectException(InvalidArgumentException::class);
		StringCalculator::add('1,3,5,6');
	}

}