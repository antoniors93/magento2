<?php

namespace CleverSoft\MegaMenus\Model\ResourceModel;

class Megamenu extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{

	protected $_date;

	/**
     * Construct
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\Stdlib\DateTime\DateTime $date
     * @param string|null $resourcePrefix
     */
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context,
		\Magento\Framework\Stdlib\DateTime\DateTime $date,
		$connectionName = null
	) {
		parent::__construct($context, $connectionName);
		$this->_date = $date;
	}
	
	protected function _construct()
	{
		$this->_init('clever_megamenu','id');
	}
	protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
		
	}
	
	
}
