<?php

namespace CleverSoft\CleverSocialLogin\Controller\Account;

class LoginPost extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        if ($redirectUrl = $this->getRequest()->getParam(\Magento\Customer\Model\Url::REFERER_QUERY_PARAM_NAME)) {
            $redirectUrl = base64_decode($redirectUrl);
            $this->getResponse()->setRedirect($redirectUrl);
        } else {
            $this->_redirect('/');
        }
    }

}