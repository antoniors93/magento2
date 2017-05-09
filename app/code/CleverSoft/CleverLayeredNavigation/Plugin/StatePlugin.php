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


class StatePlugin
{
    /**
     * @var \CleverSoft\CleverLayeredNavigation\Helper\Data
     */
    protected $helper;

    public function __construct(\CleverSoft\CleverLayeredNavigation\Helper\Data $helper)
    {
        $this->helper = $helper;
    }

    public function aroundGetClearUrl(\Magento\LayeredNavigation\Block\Navigation\State $subject, \Closure $closure)
    {
        if(!$this->helper->isAjaxEnabled()) {
            return $closure();
        }

        $filterState = [];
        $filterState['isAjax'] = null;
        $filterState['_'] = null;

        foreach ($subject->getActiveFilters() as $item) {
            $filterState[$item->getFilter()->getRequestVar()] = $item->getFilter()->getCleanValue();
        }
        $params['_current'] = true;
        $params['_use_rewrite'] = true;
        $params['_query'] = $filterState;
        $params['_escape'] = true;
        return $subject->getUrl('*/*/*', $params);
    }
}
