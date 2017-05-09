<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

namespace CleverSoft\CleverLayeredNavigation\Controller\Adminhtml\Page;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry as CoreRegistry;
use CleverSoft\CleverLayeredNavigation\Controller\RegistryConstants;

/**
 * Class Edit
 *
 * @author Artem Brunevski
 */

class NewAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('CleverSoft_CleverLayeredNavigation::page');
    }

    /**
     * Edit page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}