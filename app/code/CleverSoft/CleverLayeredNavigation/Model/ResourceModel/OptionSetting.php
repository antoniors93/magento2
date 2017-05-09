<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Model\ResourceModel;


class OptionSetting extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('cleversoft_clevershopby_option_setting', 'option_setting_id');
    }
}
