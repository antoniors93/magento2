<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

namespace CleverSoft\CleverLayeredNavigation\Block\Adminhtml\Page\Edit;

/**
 * Admin page left menu
 * * @author Artem Brunevski
 */

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('cleversoft_shopby_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Page Information'));
    }
}