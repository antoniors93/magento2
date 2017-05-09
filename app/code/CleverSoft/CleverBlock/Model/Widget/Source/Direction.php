<?php
/**
 * @category    MT
 * @package    Clever Block
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverBlock\Model\Widget\Source;

class Direction implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        return array(
            array('value'=>'horizontal', 'label'=>__('Horizontal')),
            array('value'=>'vertical', 'label'=>__('Vertical'))
        );
    }
}