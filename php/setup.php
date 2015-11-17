<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 13.11.15
 * Time: 18:48
 */

$locale="en_US";
$encoding = 'utf8';
$domain ='messages';
if (isset($_COOKIE['locale'])) {
    $locale = $_COOKIE['locale'];
}
$locale .= '.'.$encoding;
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain($domain, "locale");
bind_textdomain_codeset($domain, $encoding);
textdomain($domain);
$js_validate_name = preg_split('/\./', $locale);
$localized_validation = "js/form_validation_" . $js_validate_name[0] . ".js";