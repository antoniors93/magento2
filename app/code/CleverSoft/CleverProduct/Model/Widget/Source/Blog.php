<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

class CleverProduct_Model_Widget_Source_Blog
{
    public function toOptionArray()
    {
        if (Mage::helper('core')->isModuleEnabled('AW_Blog')) {
            $collection = Mage::getModel('blog/cat')->getCollection();
            $cats = array();
            foreach ($collection as $item) {
                $cats[] = array(
                    'value' => $item->getCatId(),
                    'label' => $item->getTitle()
                );
            }
            return $cats;
        }
    }
}