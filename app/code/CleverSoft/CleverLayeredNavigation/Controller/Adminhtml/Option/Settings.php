<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Controller\Adminhtml\Option;

class Settings extends \CleverSoft\CleverLayeredNavigation\Controller\Adminhtml\Option
{
    public function execute()
    {
        $resultLayout = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_LAYOUT);
        return $resultLayout;
    }

}
