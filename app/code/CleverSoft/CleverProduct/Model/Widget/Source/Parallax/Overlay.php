<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */


namespace CleverSoft\CleverProduct\Model\Widget\Source\Parallax;

class Overlay implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types[] = array('value' => 'none', 'label' => __('None'));
        $types[] = array('value' => 'mt/widget/images/gridtile.png', 'label' => __('2 x 2 Black'));
        $types[] = array('value' => 'mt/widget/images/gridtile_white.png', 'label' => __('2 x 2 White'));
        $types[] = array('value' => 'mt/widget/images/gridtile_3x3.png', 'label' => __('3 x 3 Black'));
        $types[] = array('value' => 'mt/widget/images/gridtile_3x3_white.png', 'label' => __('3 x 3 White'));

        return $types;
    }
}
