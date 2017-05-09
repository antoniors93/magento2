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
namespace CleverSoft\Base\Block\Adminhtml\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Layoutpreview extends Field
{

	protected function _getElementHtml(AbstractElement $element)
	{
        $aid = explode('_',$element->getHtmlId());
        $id = array_pop($aid);
		$html = parent::_getElementHtml($element);
        $html .= '<div id="layout_cleversoftbase_footer_preview_'.$id.'" class="layout-preview"></div>';
        $html .= "
            <script type='text/javascript'>
                require([
                    'CleverSoft_CleverBlock/js/widget',
                    'prototype'
                ], function(){

                    document.observe('dom:loaded', function(){
                        window.layout_{$this->getData("target")}_object = new MTLayoutPreview('layout_cleversoftbase_footer_preview_{$id}', 'cleversoftbase_footer', '{$id}');
                    });
                    setTimeout(function(){
                        window.layout_{$this->getData("target")}_object = new MTLayoutPreview('layout_cleversoftbase_footer_preview_{$id}', 'cleversoftbase_footer', '{$id}');
                    }, 100);
                });
            </script>
            <style>
            #cleversoftbase_footer_block_lg, #cleversoftbase_footer_block_md, #cleversoftbase_footer_block_sm, #cleversoftbase_footer_block_xs {display: none;}
            </style>
            ";
        return $html;
    }

}
?>