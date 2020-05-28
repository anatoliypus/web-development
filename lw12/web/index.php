<?php 

header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
require_once(__DIR__.'/../src/commonInc.php');

if (getRequestMethod() == 'POST')
{
    saveFeedbackPage();
} 
else 
{
    mainPage();
}
  