<?php
//use \Exceptions\;
//use \Business\Service;
use WijnshopTest\Business\WijnService;
//use WijnshopTest\Data\KlantDAO;
require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

//$klantDAO = new KlantDAO();
//$klanten = $klantDAO->getAll();
//print_r ($klanten);

session_start();

if (isset($_GET["action"]) && $_GET["action"] == "test") {
    
    $wijnService = new WijnService();
    $wijn = $wijnService->newWijn($_POST["naam"], $_POST["jaartal"], $_POST["land"], $_POST["cat"], $_POST["image"], $_POST["artcode"], $_POST["prijs"]);
    exit(0);
    if (!$wijn) {
        header ("location: Test.php?action=test");
        
     
    }else{
        print ("ok");
        header ("location: login.php");     
     
     
}
}
$view = $twig->render("Test.twig", array());
    print($view);