<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverProduct\Model\Widget\Source;

class Tab implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types = [
                    ['value' => 'none', 'label' => __('None')],
                    ['value' => 'categories', 'label' => __('Categories')],
                    ['value' => 'collections', 'label' => __('Collections')],
                ];

        return $types;
    }
}
