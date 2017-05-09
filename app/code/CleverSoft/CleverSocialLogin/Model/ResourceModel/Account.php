<?php

namespace CleverSoft\CleverSocialLogin\Model\ResourceModel;

class Account extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('cleversoft_sociallogin_account', 'id');
    }
}