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


class CatalogToolbarPlugin
{
    protected $helper;

    public function __construct(\CleverSoft\CleverLayeredNavigation\Helper\Data $helper)
    {
        $this->helper = $helper;
    }

    public function aroundGetPagerUrl(\Magento\Catalog\Block\Product\ProductList\Toolbar $subject, \Closure $closure, $params = [])
    {
        if($this->helper->isAjaxEnabled()) {
            $params['isAjax'] = null;
            $params['_'] = null;
        }

        return $closure($params);
    }
}
