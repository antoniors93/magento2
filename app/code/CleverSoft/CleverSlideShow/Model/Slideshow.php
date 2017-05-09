<?php

namespace CleverSoft\CleverSlideShow\Model;

class Slideshow extends \Magento\Framework\Model\AbstractModel {

	const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    const STATUS_AUTO = 3;
	const CACHE_TAG = 'slideshow';
	protected $_cacheTag = 'slideshow';
	protected $_eventPrefix = 'slideshow';
	
	protected function _construct(){
		$this->_init('CleverSoft\CleverSlideShow\Model\ResourceModel\Slideshow');
	}
	public function getAvailableStatuses()
	{
		return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
	}
	public function getAvailableFullWidth()
	{
		return [self::STATUS_ENABLED => __('Full Screen'), self::STATUS_DISABLED => __('Full Width'),self::STATUS_AUTO => __('Auto')];
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
}
