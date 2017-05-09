<?php
/**
 * @category    MT
 * @package    Clever Block
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverBlock\Model\Widget\Source;


class Type implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types = [
                    ['value' => 'list', 'label' => __('List')],
                    ['value' => 'grid', 'label' => __('Grid')],
                    ['value' => 'carousel', 'label' => __('Carousel')]
        ];

        return $types;
    }
}
