<?php
$installer = $this;
$installer->startSetup();

 
$this->addAttribute('order', 'incrementidnew', array(
    'type'          => 'varchar',
    'label'         => 'Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));

 

  

$installer->endSetup();
	 