<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Model\ResourceModel\FilterSetting;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('CleverSoft\CleverLayeredNavigation\Model\FilterSetting', 'CleverSoft\CleverLayeredNavigation\Model\ResourceModel\FilterSetting');
    }
}
