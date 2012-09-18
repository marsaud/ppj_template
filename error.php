<?php
defined('_JEXEC') or die;

/**
 * Variant is a postfix to swich between 2 available stylesheets.
 */
$params = JFactory::getApplication()->getTemplate(true)->params;
$variant = 'error';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <jdoc:include type="head" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="http://localhost/poisplumes/css/poisplumes_<?php echo $variant; ?>.css" type="text/css" media="screen" />
    </head>
    <body>
        <div class="main-layout">
            <div class="banner">
                <h1>CAFÉ POIS PLUMES</h1>
            </div>
            <div>
                <?php
                $module = JModuleHelper::getModule('menu');
                echo JModuleHelper::renderModule($module);
                ?>
            </div>
            <div class="error-content">
                <h1>Oups ! Une erreur...</h1>
            </div>
        </div>
    </body>
</html>