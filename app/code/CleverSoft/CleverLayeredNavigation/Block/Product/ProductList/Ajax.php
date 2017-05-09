<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Block\Product\ProductList;


use Magento\Framework\View\Element\Template;

class Ajax extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \CleverSoft\CleverLayeredNavigation\Helper\Data
     */
    protected $helper;

    public function __construct(Template\Context $context, \CleverSoft\CleverLayeredNavigation\Helper\Data $helper, array $data = [])
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }


    public function canShowBlock()
    {
        return $this->helper->isAjaxEnabled();
    }
}
