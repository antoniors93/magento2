<?php

namespace CleverSoft\CleverCookieLaw\Helper;

use Magento\Framework\Filesystem;

/**
 * Captcha image model
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $helper;
    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Cms\Helper\Page $helper
    ) {
        $this->helper = $helper;
        parent::__construct($context);
    }

    public function isActive()
    {
        return !$this->scopeConfig->getValue('advanced/modules_disable_output/Valdecode_CookieLaw');
    }

    public function getCmsPage()
    {
        $pageId = $this->scopeConfig->getValue('cookielaw/content/cms_page');
        return $this->helper->getPageUrl($pageId);
    }

    public function getSystemConfig($group, $field)
    {
        return $this->scopeConfig->getValue('cookielaw/' . $group . '/' . $field);
    }
}
