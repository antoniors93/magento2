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
namespace CleverSoft\Base\Model\System\Config\Source\Category;

class Display extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
	public function getAllOptions()
	{
		if (!$this->_options)
		{
            $this->_options = [
                ['value' => '0', 'label' => __('0')],
                ['value' => '2', 'label' => __('2')],
                ['value' => '3', 'label' => __('3')],
                ['value' => '4', 'label' => __('4')],
                ['value' => '5', 'label' => __('5')],
                ['value' => '6', 'label' => __('6')],
                ['value' => '7', 'label' => __('7')],
                ['value' => '8', 'label' => __('8')]
            ];
        }
		return $this->_options;
    }
}
