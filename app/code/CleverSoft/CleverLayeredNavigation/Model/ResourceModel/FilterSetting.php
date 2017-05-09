<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Model\ResourceModel;


class FilterSetting extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('cleversoft_clevershopby_filter_setting', 'setting_id');
    }
}
