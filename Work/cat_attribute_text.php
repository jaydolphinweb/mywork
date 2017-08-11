<?php 

require_once 'app/Mage.php';
Mage::app();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');


function createNewAttributeSet($name) {
        Mage::app('default');
        $modelSet = Mage::getModel('eav/entity_attribute_set')
            ->setEntityTypeId(4) // 4 == "catalog/product"
            ->setAttributeSetName($name);
        $modelSet->save();         
        $modelSet->initFromSkeleton(4)->save(); // same thing
}


$setup->addAttribute('catalog_category', 'subcatproduct', array(
						'group'             => 'General Information',
                        'type'              => 'varchar',
                        'backend'           => '',
                        'frontend'          => '',
                        'label'             => 'category Navigation Text',
                        'input'             => 'Text',
                        'class'             => '',
                        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
                        'visible'           => 1,
                        'required'          => 0,
                        'user_defined'      => 0,
                        'default'           => '',
                        'searchable'        => 0,
                        'filterable'        => 0,
                        'comparable'        => 0,
                        'visible_on_front'  => 0, 
                        'unique'            => 0,
                        
)); 

//$setup->removeAttribute('catalog_category', 'subcatproduct');

echo "Done";


?> 
