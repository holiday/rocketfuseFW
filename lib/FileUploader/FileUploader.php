<?php

class FileUploader{
	
	/*
		===================================
		Conversion Chart for various sizes
		===================================
		8 Bits 				= 	1 Byte
		1024 Bytes 			= 	1 KiloByte
		1024 KiloBytes 		= 	1 MegaByte
		1024 MegaBytes 		= 	1 GigaByte
		1024 GigaBytes 		= 	1 TeraByte
		===================================
	*/
	
	//directory to upload files to
	private $uploadDir;
	
	//stores all files
	private $files;
	
	private $errors = array();
	
	public function FileUploader($files, $uploadDir) {
		$this->files = $files; //initialize the $_FILES array
		$this->uploadDir = $uploadDir;
	}
	
	/**
	*	Return a list of extensions of the files
	*	@return Array
	*/
	public function getExtensions() {
		$extensions = array();
		foreach($files as $file) {
			$ext = explode('.', $file['name']);
			if(!in_array($ext)){
				$extensions[] = $ext;
			}
		}
		return $extensions;
	}
	
	public function getExtension($file) {
		$ext = explode('.', $file['name']);
		return $ext[1];
	}
	
	private function logError($message) {
		$this->errors[] = $message;
	}
	
	public function getErrors() {
		return $this->errors;
	}	
	
	public function uploadFiles() {
		
		if(!file_exists($this->uploadDir)) {
			echo $this->uploadDir;
			mkdir($this->uploadDir); //if the upload dir does not exist, make it
		}else{
			$i = 1; //name the images by numbers
			foreach($_FILES as $image) {

				if($image['error'] == 0){
					$filePath = $this->uploadDir . $i . "." . $this->getExtension($image);
					
					while (file_exists($filePath)) {
						$i++; //keep incrementing the filename
						$filePath = $this->uploadDir . $i . "." . $this->getExtension($image);
					}
					
					move_uploaded_file($image["tmp_name"], $filePath); //move the file
				}else{
					$error = "Unable to upload image, {$image['name']} ({$image['name']})";
					$this->logError($error); //log which file had the error
				}
				$i++; //next file number
			}
		}

	}
	
}

?>