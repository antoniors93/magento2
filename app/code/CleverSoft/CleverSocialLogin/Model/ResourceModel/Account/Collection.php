<?php

namespace CleverSoft\CleverSocialLogin\Model\ResourceModel\Account;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('CleverSoft\CleverSocialLogin\Model\Account', 'CleverSoft\CleverSocialLogin\Model\ResourceModel\Account');
    }
}