<?php
$installer = $this;
$installer->startSetup();
 
$this->addAttribute('order', 'deviceinfo', array(
    'type'          => 'varchar',
    'label'         => 'Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => false,
    'user_defined'  =>  true
));

$installer->endSetup();
	 