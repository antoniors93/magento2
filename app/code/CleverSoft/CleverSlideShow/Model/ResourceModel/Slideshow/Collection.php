<?php

namespace CleverSoft\CleverSlideShow\Model\ResourceModel\Slideshow;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

	protected function _construct(){
		$this->_init('CleverSoft\CleverSlideShow\Model\Slideshow','CleverSoft\CleverSlideShow\Model\ResourceModel\Slideshow');
	}
	
	protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
		
	}
	
	
}
