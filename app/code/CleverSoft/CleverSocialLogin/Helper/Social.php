<?php
namespace CleverSoft\CleverSocialLogin\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Social extends AbstractHelper
{
	public function getAuthUrl($type)
	{
		$authUrl = $this->getBaseAuthUrl();
		return $authUrl . (strpos($authUrl, '?') ? '&' : '?') . "hauth.done={$type}";
	}

	public function getBaseAuthUrl()
	{
		return $this->_getUrl('sociallogin/social/callback', array('_nosid' => true));
	}
}