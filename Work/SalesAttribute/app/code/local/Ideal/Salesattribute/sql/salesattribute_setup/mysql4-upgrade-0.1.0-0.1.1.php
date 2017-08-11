<?php
$installer = $this;
$installer->startSetup();

 
$this->addAttribute('order', 'saler_id', array(
    'type'          => 'varchar',
    'label'         => 'Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));

 

  

$installer->endSetup();
	 