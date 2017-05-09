<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace CleverSoft\Base\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Catalog Compare Item Model
 *
 */
class ThemeDesignObserver implements ObserverInterface
{

    protected $_cssGenerator;

    public function __construct(
        \CleverSoft\Base\Model\Cssgen\Generator $generator
    )
    {
        $this->_cssGenerator = $generator;
    }


    public function execute(\Magento\Framework\Event\Observer $observer){
        $section = $observer->getEvent()->getRequest()->getParam('section');
        if ($section == 'cleversoftbase_design')
        {
            $websiteCode = $observer->getEvent()->getRequest()->getParam('website');
            $storeCode = $observer->getEvent()->getRequest()->getParam('store');

            $this->_cssGenerator->generateCss('design', $websiteCode, $storeCode);
        }else if($section == 'cleversoftbase'){
            $websiteCode = $observer->getEvent()->getRequest()->getParam('website');
            $storeCode = $observer->getEvent()->getRequest()->getParam('store');

            $this->_cssGenerator->generateCss('layout', $websiteCode, $storeCode);
        }
    }

}
