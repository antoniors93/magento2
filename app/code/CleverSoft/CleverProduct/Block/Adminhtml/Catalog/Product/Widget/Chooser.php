<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */
namespace CleverSoft\CleverProduct\Block\Adminhtml\Catalog\Product\Widget;
class Chooser extends \Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser{
    public function getGridUrl(){
        return $this->getUrl('cleverproduct/widget/products', array(
            'products_grid' => true,
            '_current' => true,
            'uniq_id' => $this->getId(),
            'use_massaction' => $this->getUseMassaction()
        ));
    }

    public function getCheckboxCheckCallback(){
        if ($this->getUseMassaction()) {
            return "function (grid, element) {
                $(grid.containerId).fire('productNode:changed', {element: element});
            }";
        }
    }
}