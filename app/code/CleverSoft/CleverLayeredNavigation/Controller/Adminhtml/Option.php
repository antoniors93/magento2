<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Controller\Adminhtml;

abstract class Option extends \Magento\Backend\App\Action
{
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('CleverSoft_CleverLayeredNavigation::option');
    }
}
