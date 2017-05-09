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


class Type implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types = [
            ['value' => 'list', 'label' => __('List')],
            ['value' => 'grid', 'label' => __('Grid')],
            ['value' => 'grid2', 'label' => __('Grid 2')],
            ['value' => 'carousel', 'label' => __('Carousel')],
            ['value' => 'carousel-vertical', 'label' => __('Carousel Vertical')]
        ];

        return $types;
    }
}
