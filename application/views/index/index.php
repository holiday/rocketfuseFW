<<<<<<< HEAD
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
                                            <label class="control-label" for="optionsCheckbox">Single Check Fruit:</label>
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <?php echo $singlecheck; ?> Apple
                                                </label>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="optionsCheckbox">Multi Check Fruits:</label>
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <?php echo $multicheck[0]->getHtml(); ?> Apple
                                                </label>
                                                <label class="checkbox">
                                                    <?php echo $multicheck[1]->getHtml(); ?> Cherry
                                                </label>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="emailInput">Email Address:</label>
                                            <div class="controls">
                                                <?php echo $email; ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="creditcardInput">Credit Card:</label>
                                            <div class="controls">
                                                <input class="input-file" id="creditcardInput" type="text" name="creditcard">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="mod10Input">Mod 10 Check:</label>
                                            <div class="controls">
                                                <input class="input-file" id="mod10Input" type="text" name="mod10">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="rangeInput">Enter a number between 1 and 10:</label>
                                            <div class="controls">
                                                <input class="input-file" id="rangeInput" type="text" name="range">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="select01">Select list</label>
                                            <div class="controls">
                                                <?php echo $single; ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="multiSelect">Multicon-select</label>
                                            <div class="controls">
                                                <select multiple="multiple" id="multiple" name="multiple[]">
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="fileInput">File input</label>
                                            <div class="controls">
                                                <?php echo $file; ?>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" name="test-submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                            </div>


                        </body>
                        </html>
=======
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
	      <label class="control-label" for="emailInput">Email Address:</label>
	      <div class="controls">
	        <input class="input-file" id="emailInput" type="text" name="email">
	      </div>
	    </div>
	
		<div class="control-group">
	      <label class="control-label" for="dateInput">Date (dd/mm/yy):</label>
	      <div class="controls">
	        <input class="input-file" id="dateInput" type="text" name="date">
	      </div>
	    </div>
	
		<div class="control-group">
	      <label class="control-label" for="rangeInput">Enter a number between 1 and 10:</label>
	      <div class="controls">
	        <input class="input-file" id="rangeInput" type="text" name="range">
	      </div>
	    </div>
	
		<div class="control-group">
			<label class="control-label" for="select01">Select list</label>
			<div class="controls">
				<select id="select01" name="single">
					<option value=''>something</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
				</select>
			</div>
		</div>
	
		<div class="control-group">
          <label class="control-label" for="multiSelect">Multicon-select</label>
          <div class="controls">
            <select multiple="multiple" id="multiple" name="multiple[]">
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
              <option value='4'>4</option>
              <option value='5'>5</option>
            </select>
          </div>
        </div>
		
		<div class="control-group">
	      <label class="control-label" for="fileInput">File input</label>
	      <div class="controls">
	        <input class="input-file" id="fileInput" type="file" name="avatar[]" multiple="multiple">
	      </div>
	    </div>
	
		<div class="form-actions">
		  <button type="submit" name="test-submit" class="btn btn-primary">Upload</button>
		</div>
	</form>
</div>


</body>
</html>
>>>>>>> cc779dabab943bf9ab874ffd3e1e383040fd28d7
