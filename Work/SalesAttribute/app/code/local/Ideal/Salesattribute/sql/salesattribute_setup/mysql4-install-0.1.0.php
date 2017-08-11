<?php
$installer = $this;
$installer->startSetup();

 
$this->addAttribute('order', 'term', array(
    'type'          => 'varchar',
    'label'         => 'Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));


$this->addAttribute('order', 'S_term', array(
    'type'          => 'varchar',
    'label'         => 'Special Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));


$this->addAttribute('order', 'S_term', array(
    'type'          => 'varchar',
    'label'         => 'Special Term',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));


$this->addAttribute('order', 'Memo', array(
    'type'          => 'varchar',
    'label'         => 'Memo',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
));


$this->addAttribute('order', 'Perchase_Order', array(
    'type'          => 'varchar',
    'label'         => 'Purchase Order',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
)); 


$this->addAttribute('order', 'seller', array(
    'type'          => 'varchar',
    'label'         => 'Seller',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'user_defined'  =>  true
)); 

  

$installer->endSetup();
	 