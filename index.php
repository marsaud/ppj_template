<?php
defined('_JEXEC') or die;

/**
 * Variant is a postfix to swich between 2 available stylesheets.
 */
$variant = $this->params->get('templatevariant');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title><?php echo $this->title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="http://cafepoisplumes.fr/templates/ppj_template/css/poisplumes_<?php echo $variant; ?>.css" type="text/css" media="screen" />
    </head>
    <body>
        <div class="main-layout">
            <div class="banner">
                <h1 style="font-family: 'RougeRegular', Arial, sans-serif">CAFÉ POIS PLUMES</h1>
            </div>
            <div>
                <jdoc:include type="modules" name="menu-position" />
            </div>
            <div class="main-content">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div>
    </body>
</html>
