<?php

namespace CleverSoft\CleverSlideShow\Model;

class Slideroptions implements \Magento\Framework\Option\ArrayInterface {

	protected $_collection;

	public function __construct(
		\CleverSoft\CleverSlideShow\Model\ResourceModel\Slideshow\Collection $collection
	){
		$this->_collection = $collection;
	}


	public function toOptionArray(){
		
        $collection = $this->_collection;
		$menu = [];
		foreach($collection as $item) {
            $menu[] = [
                'label' => $item->getTitle(),
                'value' => $item->getIdentifier() ,
            ];
        }	
		return $menu;
    }
}
