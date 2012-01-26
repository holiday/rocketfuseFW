<?php


class Validator {

	//registry instance
	private static $registry;

	//Regular expressions
	private $firstName_re = "/^[-A-Za-z' ]{1,70}$/";
	private $address_re = "/^[A-Za-z0-9-\s\.\']{5,80}$/";
	private $city_re = "/^[A-Za-z\s\-]{3,80}$/";
	private $alphaNumSpace_re = "#^[A-Za-z0-9\x20]+$#i";
	private $alpha_re = "/^[A-Za-z]+$/";
	private $alphaNumeric_re = "#^[A-Za-z0-9]+$#";
	//validates both us and canadian postal codes
	private $postalCodeUSCA_re = "/^[^0-9DFIOQU]{1}[1-9]{1}[A-Za-z]{1}\s?\d{1}[a-zA-Z]{1}\d{1}|(\d{5})(-[0-9]{4})?$/";
	private $phoneFormats_re = array('###-###-####', '####-###-###', '(###) ###-###', '####-####-####', '##-###-####-####', '####-####', '###-###-###', '#####-###-###', '##########');
	private $text_re = "/^[a-zA-Z0-9\s\.\'\?\r\n\,\&\%\$\(\)\\\:\/\@\!]+$/";
	private $decimal_re = "[0-9]+\.?[0-9]+";
	
	//mappings of types to validators
	public $fieldMap = array(
		'email' => 'isValidEmail',
		'postal' => 'isValidPostal',
		'alpha' => 'isValidAlpha',
		'text' => 'isValidText',
		'select' => 'isValidSelect',
		'images' => 'isValidFiles'
	);
	
	public function __construct($registry) {
		self::$registry = $registry;
	}
	
	public function isValidText($text) {
	
		if (preg_match($this->text_re, $text)) {
			return true;
		}else {
			return false;
		}
		
	}
	
	public function isValidPostalUs($postal) {
		if (preg_match($this->postalCodeUs_re, $postal)) {
			return true;
		}else {
			return false;
		}
	}
	
	public function isValidPostalUSCA($postal) {
		if (preg_match($this->postalCodeUSCA_re, $postal)) {
			return true;
		}else {
			return false;
		}
	}
	
	public function isValidAlpha($alpha) {
		if (preg_match($this->alpha_re, $alpha)) {
			return true;
		}else {
			return false;
		}
	}
	
	public function isValidAlphaNumeric($alphanum) {
		if (preg_match($this->alphaNumeric_re, $alphanum)) {
			return true;
		}else {
			return false;
		}
	}
	
	public function isValidAlphaNumericSpace($alphanum) {
		if (preg_match($this->alphaNumSpace_re, $alphaNumSpace)) {
			return true;
		}else {
			return false;
		}
	}	
	
	public function isValidAddress($address) {
		if (preg_match($this->address_re, $address)) {
			return true;	
		}else {
			return false;
		}
	}
	
	public function isValidCity($city) {
		if (preg_match($this->city_re, $city)) {
			return true;
		}else {
			return false;	
		}
	}
	
	public function isValidName($name) {
		if (preg_match($this->firstName_re, $name)) {
			return true;	
		}else {
			return false;
		}
	}
	
	/*
	Validate an email address.
	Provide email address (raw input)
	Returns true if the email address has the email 
	address format and the domain exists.
	*/
	public function isValidEmail($email){
	   $isValid = true;
	   $atIndex = strrpos($email, "@");
	   if (is_bool($atIndex) && !$atIndex){
		  $isValid = false;
	   }
	   else{
		  $domain = substr($email, $atIndex+1);
		  $local = substr($email, 0, $atIndex);
		  $localLen = strlen($local);
		  $domainLen = strlen($domain);
		  if ($localLen < 1 || $localLen > 64){
			 // local part length exceeded
			 $isValid = false;
		  }
		  else if ($domainLen < 1 || $domainLen > 255){
			 // domain part length exceeded
			 $isValid = false;
		  }
		  else if ($local[0] == '.' || $local[$localLen-1] == '.'){
			 // local part starts or ends with '.'
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $local)){
			 // local part has two consecutive dots
			 $isValid = false;
		  }
		  else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)){
			 // character not valid in domain part
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $domain))
		  {
			 // domain part has two consecutive dots
			 $isValid = false;
		  }
		  else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local))){
			 // character not valid in local part unless 
			 // local part is quoted
			 if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local))){
				$isValid = false;
			 }
		  }if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))){
			 // domain not found in DNS
			 $isValid = false;
		  }
	   }
	   return $isValid;
	}
	
	public function isValidPhone($number){
		$formats = $this->phoneFormats_re;
		$format = trim(preg_replace("/[0-9]/", "#", $number));
		if (in_array($format, $formats)) {
			return true;
		}else {
			return false;
		}
	}
	
	public function isValidSelect($value) {
		
		if ($value != 0 && $value != '') {
			return true;
		}else {
			return false;
		}
			
	}
	
	public function isValidFile($file, $fileType=array('jpg')) {
		
		$currentErrors = $file['error'];
		$currentExt = explode('.', strtolower($file['name']));
		
		if ($currentErrors == 0 && in_array($currentExt[1], $fileType)){
			return true;	
		}else {
			return false;	
		}
			
	}
	
	public function isValidFiles($fileObject) {
		
		$files = $this->_splitFiles($fileObject, count($fileObject['name']));
		
		if (empty($files)) {return false;}
		
		foreach($files as $file) {
			if (!$this->isValidFile($file)) {
				return false;
			}
		}
		return true;
	}
	
	public function _splitFiles($fObject, $numFiles) {
		
		$files = array();
		
		for($i=0; $i < $numFiles; $i++){
			foreach($fObject as $k => $v) {
				$file[$k] = $v[$i];
			}
			//only add it to the file list if a file has a size larger than 0
			if ($file['size'] > 0) {
				$files[] = $file;
			}
			//clear the variable to be reused again
			$file = array();
		}
		return $files;
	}
	
}


?>