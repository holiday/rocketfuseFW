<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Index Controller</title>
	<link href="/application/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/application/public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/application/public/bootstrap/css/docs.css" rel="stylesheet">
    <link href="/application/public/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet">
</head>
<body>


<div class="wrapper span24">
	<br>
	<form action="/index/upload" method="POST" enctype="multipart/form-data" class="form-horizontal">
		<div class="control-group">
	      <label class="control-label" for="fileInput">File input</label>
	      <div class="controls">
	        <input class="input-file" id="fileInput" type="file" name="image1">
	      </div>
	    </div>
		
		<div class="control-group">
	      <label class="control-label" for="fileInput">File input</label>
	      <div class="controls">
	        <input class="input-file" id="fileInput" type="file" name="image2">
	      </div>
	    </div>
	
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary">Upload</button>
		</div>
	</form>
</div>


</body>
</html>
