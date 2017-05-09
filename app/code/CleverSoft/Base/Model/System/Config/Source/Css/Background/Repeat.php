<?php
/**
 *
 * ------------------------------------------------------------------------------
 * @category Mato
 * @package Mato Framework
 * ------------------------------------------------------------------------------
 * @copyright    Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license      GNU General Public License version 2 or later;
 * @author       ZooExtension.com
 * @email        magento.cleversoft@gmail.com
 * ------------------------------------------------------------------------------
 *
 */
namespace CleverSoft\Base\Model\System\Config\Source\Css\Background;
class Repeat implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'no-repeat',	'label' => __('no-repeat')),
            array('value' => 'repeat',		'label' => __('repeat')),
            array('value' => 'repeat-x',	'label' => __('repeat-x')),
			array('value' => 'repeat-y',	'label' => __('repeat-y'))
        );
    }
}