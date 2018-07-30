<?php
error_reporting(255);
define("SENDMAIL_DO_NOT_SEND_MAILS",true);
define("SENDMAIL_DEFAULT_FROM","info@somewhere.com");
define("SENDMAIL_EMPTY_TO_REPLACE","dummy@localhost");
define("SENDMAIL_BCC_TO","big.brother@somewhere.com");
define("DEFAULT_CHARSET","UTF-8");

if(preg_match('/tc_additional_parameters\.php/',join("",$GLOBALS["_SERVER"]["argv"]))){
	// in tc_additional_parameters.php we need to define SENDMAIL_MAIL_ADDITIONAL_PARAMETERS before sendmail.php is loaded
	define("SENDMAIL_MAIL_ADDITIONAL_PARAMETERS","-fbounce@example.com");
}

require(__DIR__ . "/../vendor/autoload.php");
