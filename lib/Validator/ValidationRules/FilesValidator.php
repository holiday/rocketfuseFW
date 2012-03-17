<?php 

class FilesValidator extends AbstractValidator {
	
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
	
	private $mime_types = array(
	"323" => "text/h323",
	"acx" => "application/internet-property-stream",
	"ai" => "application/postscript",
	"aif" => "audio/x-aiff",
	"aifc" => "audio/x-aiff",
	"aiff" => "audio/x-aiff",
	"asf" => "video/x-ms-asf",
	"asr" => "video/x-ms-asf",
	"asx" => "video/x-ms-asf",
	"au" => "audio/basic",
	"avi" => "video/x-msvideo",
	"axs" => "application/olescript",
	"bas" => "text/plain",
	"bcpio" => "application/x-bcpio",
	"bin" => "application/octet-stream",
	"bmp" => "image/bmp",
	"c" => "text/plain",
	"cat" => "application/vnd.ms-pkiseccat",
	"cdf" => "application/x-cdf",
	"cer" => "application/x-x509-ca-cert",
	"class" => "application/octet-stream",
	"clp" => "application/x-msclip",
	"cmx" => "image/x-cmx",
	"cod" => "image/cis-cod",
	"cpio" => "application/x-cpio",
	"crd" => "application/x-mscardfile",
	"crl" => "application/pkix-crl",
	"crt" => "application/x-x509-ca-cert",
	"csh" => "application/x-csh",
	"css" => "text/css",
	"dcr" => "application/x-director",
	"der" => "application/x-x509-ca-cert",
	"dir" => "application/x-director",
	"dll" => "application/x-msdownload",
	"dms" => "application/octet-stream",
	"doc" => "application/msword",
	"dot" => "application/msword",
	"dvi" => "application/x-dvi",
	"dxr" => "application/x-director",
	"eps" => "application/postscript",
	"etx" => "text/x-setext",
	"evy" => "application/envoy",
	"exe" => "application/octet-stream",
	"fif" => "application/fractals",
	"flr" => "x-world/x-vrml",
	"gif" => "image/gif",
	"gtar" => "application/x-gtar",
	"gz" => "application/x-gzip",
	"h" => "text/plain",
	"hdf" => "application/x-hdf",
	"hlp" => "application/winhlp",
	"hqx" => "application/mac-binhex40",
	"hta" => "application/hta",
	"htc" => "text/x-component",
	"htm" => "text/html",
	"html" => "text/html",
	"htt" => "text/webviewhtml",
	"ico" => "image/x-icon",
	"ief" => "image/ief",
	"iii" => "application/x-iphone",
	"ins" => "application/x-internet-signup",
	"isp" => "application/x-internet-signup",
	"jfif" => "image/pipeg",
	"jpe" => "image/jpeg",
	"jpeg" => "image/jpeg",
	"jpg" => "image/jpeg",
	"js" => "application/x-javascript",
	"latex" => "application/x-latex",
	"lha" => "application/octet-stream",
	"lsf" => "video/x-la-asf",
	"lsx" => "video/x-la-asf",
	"lzh" => "application/octet-stream",
	"m13" => "application/x-msmediaview",
	"m14" => "application/x-msmediaview",
	"m3u" => "audio/x-mpegurl",
	"man" => "application/x-troff-man",
	"mdb" => "application/x-msaccess",
	"me" => "application/x-troff-me",
	"mht" => "message/rfc822",
	"mhtml" => "message/rfc822",
	"mid" => "audio/mid",
	"mny" => "application/x-msmoney",
	"mov" => "video/quicktime",
	"movie" => "video/x-sgi-movie",
	"mp2" => "video/mpeg",
	"mp3" => "audio/mpeg",
	"mpa" => "video/mpeg",
	"mpe" => "video/mpeg",
	"mpeg" => "video/mpeg",
	"mpg" => "video/mpeg",
	"mpp" => "application/vnd.ms-project",
	"mpv2" => "video/mpeg",
	"ms" => "application/x-troff-ms",
	"mvb" => "application/x-msmediaview",
	"nws" => "message/rfc822",
	"oda" => "application/oda",
	"p10" => "application/pkcs10",
	"p12" => "application/x-pkcs12",
	"p7b" => "application/x-pkcs7-certificates",
	"p7c" => "application/x-pkcs7-mime",
	"p7m" => "application/x-pkcs7-mime",
	"p7r" => "application/x-pkcs7-certreqresp",
	"p7s" => "application/x-pkcs7-signature",
	"pbm" => "image/x-portable-bitmap",
	"pdf" => "application/pdf",
	"pfx" => "application/x-pkcs12",
	"pgm" => "image/x-portable-graymap",
	"pko" => "application/ynd.ms-pkipko",
	"pma" => "application/x-perfmon",
	"pmc" => "application/x-perfmon",
	"pml" => "application/x-perfmon",
	"pmr" => "application/x-perfmon",
	"pmw" => "application/x-perfmon",
	"png" => "image/png",
	"pnm" => "image/x-portable-anymap",
	"pot" => "application/vnd.ms-powerpoint",
	"ppm" => "image/x-portable-pixmap",
	"pps" => "application/vnd.ms-powerpoint",
	"ppt" => "application/vnd.ms-powerpoint",
	"prf" => "application/pics-rules",
	"ps" => "application/postscript",
	"pub" => "application/x-mspublisher",
	"qt" => "video/quicktime",
	"ra" => "audio/x-pn-realaudio",
	"ram" => "audio/x-pn-realaudio",
	"ras" => "image/x-cmu-raster",
	"rgb" => "image/x-rgb",
	"rmi" => "audio/mid",
	"roff" => "application/x-troff",
	"rtf" => "application/rtf",
	"rtx" => "text/richtext",
	"scd" => "application/x-msschedule",
	"sct" => "text/scriptlet",
	"setpay" => "application/set-payment-initiation",
	"setreg" => "application/set-registration-initiation",
	"sh" => "application/x-sh",
	"shar" => "application/x-shar",
	"sit" => "application/x-stuffit",
	"snd" => "audio/basic",
	"spc" => "application/x-pkcs7-certificates",
	"spl" => "application/futuresplash",
	"src" => "application/x-wais-source",
	"sst" => "application/vnd.ms-pkicertstore",
	"stl" => "application/vnd.ms-pkistl",
	"stm" => "text/html",
	"svg" => "image/svg+xml",
	"sv4cpio" => "application/x-sv4cpio",
	"sv4crc" => "application/x-sv4crc",
	"t" => "application/x-troff",
	"tar" => "application/x-tar",
	"tcl" => "application/x-tcl",
	"tex" => "application/x-tex",
	"texi" => "application/x-texinfo",
	"texinfo" => "application/x-texinfo",
	"tgz" => "application/x-compressed",
	"tif" => "image/tiff",
	"tiff" => "image/tiff",
	"tr" => "application/x-troff",
	"trm" => "application/x-msterminal",
	"tsv" => "text/tab-separated-values",
	"txt" => "text/plain",
	"uls" => "text/iuls",
	"ustar" => "application/x-ustar",
	"vcf" => "text/x-vcard",
	"vrml" => "x-world/x-vrml",
	"wav" => "audio/x-wav",
	"wcm" => "application/vnd.ms-works",
	"wdb" => "application/vnd.ms-works",
	"wks" => "application/vnd.ms-works",
	"wmf" => "application/x-msmetafile",
	"wps" => "application/vnd.ms-works",
	"wri" => "application/x-mswrite",
	"wrl" => "x-world/x-vrml",
	"wrz" => "x-world/x-vrml",
	"xaf" => "x-world/x-vrml",
	"xbm" => "image/x-xbitmap",
	"xla" => "application/vnd.ms-excel",
	"xlc" => "application/vnd.ms-excel",
	"xlm" => "application/vnd.ms-excel",
	"xls" => "application/vnd.ms-excel",
	"xlt" => "application/vnd.ms-excel",
	"xlw" => "application/vnd.ms-excel",
	"xof" => "x-world/x-vrml",
	"xpm" => "image/x-xpixmap",
	"xwd" => "image/x-xwindowdump",
	"z" => "application/x-compress",
	"zip" => "application/zip");
	
	public function validate() {
		
		//total number of files
		$limit = count($this->value['name']);
		
		//number of files to process, optional
		if(isset($this->options['limit']) && $this->options['limit'] < $limit) {
			$limit = $this->options['limit'];
		}
		
		$limit--;
			
		//allowed extensions
		$allowedExtensions = $this->options['extensions'];
		
		//max sizes for files
		$maxsize = $this->options['maxsize'];
		
		while ($limit >= 0) {
			if(!($this->isValidFile($this->value['type'][$limit], $this->value['error'][$limit], $this->value['size'][$limit], $allowedExtensions))) {
				return false;
			}
			$limit--;	
		}
		return true;
	}
	
	private function isValidFile($mime, $error, $size, $allowedExts) {
		
		if($this->isExtensionAllowed($allowedExts, $mime) && $this->isSizeAllowed($size) && $error == 0) {
			return true;
		}
		return false;
	}
	
	private function isExtensionAllowed($extensions, $fileMimeType) {
		/*
			This loop gets the mimetypes from the allowed extensions and cross checks it with the file mimetype.
			If a match is found, set $matched to true.
		*/
		foreach($extensions as $extension) {
			if($fileMimeType == $this->getMimeType($extension)) {
				return true;
			}
		}
		return false;
	}
	
	private function isSizeAllowed($size) {
		return $size <= ($this->options['maxsize'] * 1024) * 1024; //size in megabytes
	}
	
	private function getMimeType($ext) {
		return $this->mime_types[$ext];
	}
	
}

?>