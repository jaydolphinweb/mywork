<?php
// Change current directory to the directory of current script
chdir(dirname(__FILE__));
ini_set('display_errors', 1);
ini_set('memory_limit','1024M');
require_once 'app/Mage.php';
umask(0);
Mage::app();

Mage::getModel('datareport/observer')->historyCleanUp();
?>
