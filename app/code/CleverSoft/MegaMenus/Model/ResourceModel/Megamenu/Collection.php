<?php

namespace CleverSoft\MegaMenus\Model\ResourceModel\Megamenu;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

	protected function _construct(){
		$this->_init('CleverSoft\MegaMenus\Model\Megamenu','CleverSoft\MegaMenus\Model\ResourceModel\Megamenu');
	}
	
	protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
		
	}
	
	
}
