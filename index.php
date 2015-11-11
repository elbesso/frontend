<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 11.11.15
 * Time: 15:55
 */
define('SMARTY_DIR', 'libs/');
require(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setConfigDir('configs');
$smarty->setCacheDir('cache');
$encoding = "UTF-8";
$lang = "en";
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}
if ($lang == 'ru') {
    $locale = "ru_RU";
} else if ($lang = 'en') {
    $locale = "en_US";
}
$locale .= ".".$encoding;
putenv("LANGUAGE=$lang");
setlocale(LC_ALL, $locale);
bindtextdomain("messages", ".locale");
bind_textdomain_codeset("messages", $encoding);
textdomain("messages");
$smarty->display('index.tpl');