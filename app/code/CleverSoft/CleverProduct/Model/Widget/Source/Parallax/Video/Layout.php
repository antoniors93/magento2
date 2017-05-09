<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverProduct\Model\Widget\Source\Parallax\Video;

class Layout implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types[] = array('value' => 'custom', 'label' => __('Custom'));
        $types[] = array('value' => 'fullwidth', 'label' => __('Full Width'));
        $types[] = array('value' => 'fullscreen', 'label' => __('Full Screen'));

        return $types;
    }
}
