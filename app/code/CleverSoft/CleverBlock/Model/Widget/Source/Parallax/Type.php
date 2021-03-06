<?php
/**
 * @category    MT
 * @package    Clever Block
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverBlock\Model\Widget\Source\Parallax;

class Type implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types[] = array('value' => 'image', 'label' => __('Image'));
        $types[] = array('value' => 'video', 'label' => __('Video Service'));
        $types[] = array('value' => 'file', 'label' => __('Video File'));

        return $types;
    }
}
