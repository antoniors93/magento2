<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Plugin;


class PagerPlugin
{
    protected $helper;

    public function __construct(\CleverSoft\CleverLayeredNavigation\Helper\Data $helper)
    {
        $this->helper = $helper;
    }

    public function aroundGetPagerUrl(\Magento\Theme\Block\Html\Pager $subject, \Closure $closure, $params = [])
    {
        if($this->helper->isAjaxEnabled()) {
            $params['isAjax'] = null;
            $params['_'] = null;
        }

        return $closure($params);
    }
}
