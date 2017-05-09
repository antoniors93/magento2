<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Plugin;

use CleverSoft\CleverLayeredNavigation\Helper\Url;
use Magento\Framework\UrlInterface;

class UrlPlugin
{
    /** @var  Url */
    protected $helper;

    public function __construct(Url $helper)
    {
        $this->helper = $helper;
    }

    public function afterGetUrl(UrlInterface $subject, $native)
    {
        if ($this->helper->isSeoUrlEnabled()) {
            $result = $this->helper->seofyUrl($native);
            return $result;
        } else {
            return $native;
        }
    }
}
