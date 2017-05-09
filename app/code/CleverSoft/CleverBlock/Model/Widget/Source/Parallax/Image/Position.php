<?php
/**
 * @category    MT
 * @package    Clever Block
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverBlock\Model\Widget\Source\Parallax\Image;

class Position  implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        $types[] = array('value' => 'center',       'label' => 'center');
        $types[] = array('value' => 'left top',     'label' => 'left top');
        $types[] = array('value' => 'left center',  'label' => 'left center');
        $types[] = array('value' => 'left bottom',  'label' => 'left bottom');
        $types[] = array('value' => 'right top',    'label' => 'right top');
        $types[] = array('value' => 'right center', 'label' => 'right center');
        $types[] = array('value' => 'right bottom', 'label' => 'right bottom');
        $types[] = array('value' => 'center top',   'label' => 'center top');
        $types[] = array('value' => 'center right', 'label' => 'center right');
        $types[] = array('value' => 'center bottom', 'label' => 'center bottom');

        return $types;
    }
}