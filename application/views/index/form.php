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

                        <?php echo $form->open(); ?>
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="input01">Text input</label>
                                    <div class="controls">
                                        <?php echo $form->getField('email')->getHtml(); ?>
                                        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="optionsCheckbox">Checkbox</label>
                                    <div class="controls">
                                        <?php echo $form->getField('apple')->getHtml(); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $labelSelect->getHtmL(); ?>
                                    <div class="controls">
                                        <?php echo $form->getField('fruits')->getHtml(); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="multiSelect">Multicon-select</label>
                                    <div class="controls">
                                        <?php echo $form->getField('multipleFruits')->getHtml(); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="fileInput">File input</label>
                                    <div class="controls">
                                        <?php echo $form->getField('avatar')->getHtmL(); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="textarea">Textarea</label>
                                    <div class="controls">
                                        <?php echo $form->getField('comments')->getHtml(); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Agreement</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <?php echo $form->getField('agreement')->getRadio(0)->getHtml(); ?>I Agree<br />
                                            </label>
                                            <label class="radio">
                                                <?php echo $form->getField('agreement')->getRadio(1)->getHtml(); ?>I Disagree<br />
                                            </label>
                                        </div>
                                    </label>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button class="btn">Cancel</button>
                                </div>
                            </fieldset>
                            <?php echo $form->close(); ?>
                        </body>
                        </html>


