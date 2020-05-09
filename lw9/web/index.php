<?php 

header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");

error_reporting(E_ERROR | E_PARSE);
require_once(__DIR__.'/../src/commonInc.php');

if (getRequestMethod() == 'POST')
{
    saveFeedbackPage();
} 
else 
{
    mainPage();
}
  