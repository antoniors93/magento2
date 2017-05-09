<?php
/**
 * @category    MT
 * @package     MT_Attribute
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */
namespace CleverSoft\Base\Model\System\Config\Source\Product\Zoom;
class Position implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types = [
            ['value' => 'right', 'label' => __('Right')],
            ['value' => 'left', 'label' => __('Left')],
            ['value' => 'top', 'label' => __('Top')],
            ['value' => 'bottom', 'label' => __('Bottom')],
            ['value' => 'inside', 'label' => __('Inside')]
        ];

        return $types;
    }
}