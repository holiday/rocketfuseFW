<?php 

require_once 'PHPUnit/Autoload.php';
require '../ValidationMethods.php';

class ValidatorTest extends PHPUnit_Framework_TestCase {
	
	public function testNotEmptyStringOrArray() {
		$str1 = '';
		$this->assertEquals(false, ValidationMethods::notempty($str1));
		
		$str2 = 'test';
		$this->assertEquals(true, ValidationMethods::notempty($str2));
		
		$arr1 = array();
		$this->assertEquals(false, ValidationMethods::notempty($arr1));
		
		$arr2 = array('item');
		$this->assertEquals(true, ValidationMethods::notempty($arr2));
	}
	
	public function testAlphaNumericString() {
		$str1 = '';
		$this->assertEquals(false, ValidationMethods::alphanumeric($str1));
		
		$str2 = 'abc';
		$this->assertEquals(true, ValidationMethods::alphanumeric($str2));
		
		$str3 = '12';
		$this->assertEquals(true, ValidationMethods::alphanumeric($str3));
		
		$str4 = '.';
		$this->assertEquals(false, ValidationMethods::alphanumeric($str4));
		
		$str5 = 'UPPERCASE';
		$this->assertEquals(true, ValidationMethods::alphanumeric($str5));
		
		$str6 = 'abc123';
		$this->assertEquals(true, ValidationMethods::alphanumeric($str6));
		
		$str7 = '0.25'; //decimals are not allowed
		$this->assertEquals(false, ValidationMethods::alphanumeric($str7));
		
		$str8 = 'A900bA8199ASccddsss8988lllllasd';
		$this->assertEquals(true, ValidationMethods::alphanumeric($str8));
	}
	
	public function testAlphaString() {
		$str1 = 'abc';
		$this->assertEquals(true, ValidationMethods::alpha($str1));
		
		$str2 = '';
		$this->assertEquals(false, ValidationMethods::alpha($str2));
		
		$str3 = '12';
		$this->assertEquals(false, ValidationMethods::alpha($str3));
		
		$str4 = '.';
		$this->assertEquals(false, ValidationMethods::alpha($str4));
		
		$str5 = 'UPPERCASE';
		$this->assertEquals(true, ValidationMethods::alpha($str5));
		
		$str6 = 'abc123';
		$this->assertEquals(false, ValidationMethods::alpha($str6));
		
		$str7 = '0.25';
		$this->assertEquals(false, ValidationMethods::alpha($str7));
		
		$str8 = 'A900bA8199ASccddsss8988lllllasd';
		$this->assertEquals(false, ValidationMethods::alpha($str8));
	}
	
	public function testAlphaSpace() {
		$str1 = 'abc  ';
		$this->assertEquals(true, ValidationMethods::alphaspace($str1));
		
		$str2 = 'ab  c';
		$this->assertEquals(true, ValidationMethods::alphaspace($str2));
		
		$str3 = 's o m e w h e r e';
		$this->assertEquals(true, ValidationMethods::alphaspace($str3));
		
		$str4 = 'a1 b2';
		$this->assertEquals(false, ValidationMethods::alphaspace($str4));
		
		$str5 = '1 2';
		$this->assertEquals(false, ValidationMethods::alphaspace($str5));
		
		$str6 = ' . ';
		$this->assertEquals(false, ValidationMethods::alphaspace($str6));
		
		$str7 = '0 A 25';
		$this->assertEquals(false, ValidationMethods::alphaspace($str7));
		
		$str8 = '    '; //this is true, make sure you are trimming before validation
		$this->assertEquals(true, ValidationMethods::alphaspace($str8));
	}
	
	public function testNumeric() {
		$str1 = 'abc';
		$this->assertEquals(false, ValidationMethods::numeric($str1));
		
		$str2 = '1 2 3';
		$this->assertEquals(false, ValidationMethods::numeric($str2));
		
		$str3 = '12';
		$this->assertEquals(true, ValidationMethods::numeric($str3));
		
		$str4 = '123abc';
		$this->assertEquals(false, ValidationMethods::numeric($str4));
		
		$str5 = '0.25'; //no decimals
		$this->assertEquals(false, ValidationMethods::numeric($str5));
		
		$str6 = '00.'; 
		$this->assertEquals(false, ValidationMethods::numeric($str6));
		
		$str7 = '.00'; 
		$this->assertEquals(false, ValidationMethods::numeric($str7));
		
		$str8 = '    '; //this is true, make sure you are trimming before validation
		$this->assertEquals(false, ValidationMethods::numeric($str8));
	}
	
	//test that the string lengths are between a certain value
	public function testBetween() {
		$str1 = '123';
		$this->assertEquals(true, ValidationMethods::between($str1, 1, 4));
		
		$str2 = '1';
		$this->assertEquals(true, ValidationMethods::between($str2, 0, 2));
		
		$str3 = '12';
		$this->assertEquals(false, ValidationMethods::between($str3, 2, 2));
		
		$str4 = '0';
		$this->assertEquals(false, ValidationMethods::between($str4, 0, 1));
		
		$str5 = '0'; //no decimals
		$this->assertEquals(true, ValidationMethods::between($str5, 0, 2));
		
		$str6 = ''; 
		$this->assertEquals(true, ValidationMethods::between($str6, -1, 1));
		
		$str7 = ''; 
		$this->assertEquals(false, ValidationMethods::between($str7, 0, 0));
		
		$str8 = ' '; //this is true, make sure you are trimming before validation
		$this->assertEquals(true, ValidationMethods::between($str8, 0, 2));
		
		$str9 = ' a b c '; //this is true, make sure you are trimming before validation
		$this->assertEquals(true, ValidationMethods::between($str9, 6, 8));
	}
	
	public function testLength() {
		
		$str1 = '123';
		$this->assertEquals(true, ValidationMethods::length($str1, 3));
		
		$str2 = '1';
		$this->assertEquals(true, ValidationMethods::length($str2, 1));
		
		$str3 = '12';
		$this->assertEquals(false, ValidationMethods::length($str3, -2));
		
		$str4 = '0';
		$this->assertEquals(false, ValidationMethods::length($str4, 0));
		
		$str5 = '0';
		$this->assertEquals(true, ValidationMethods::length($str5, 1));
		
		$str6 = ''; 
		$this->assertEquals(false, ValidationMethods::length($str6, -1));
		
		$str7 = ''; 
		$this->assertEquals(true, ValidationMethods::length($str7, 0));
		
		$str8 = ' '; //this is true, make sure you are trimming before validation
		$this->assertEquals(true, ValidationMethods::length($str8, 1));
		
		$str9 = ' a b c '; //this is true, make sure you are trimming before validation
		$this->assertEquals(true, ValidationMethods::length($str9, 7));
		
	}
	
	
	

}


?>