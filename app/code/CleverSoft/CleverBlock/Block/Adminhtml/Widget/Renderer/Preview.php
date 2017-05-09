<?php
/**
 * @category    MT
 * @package    Clever Block
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\CleverBlock\Block\Adminhtml\Widget\Renderer;

use Magento\Backend\Block\Template;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;

class Preview extends Template implements RendererInterface{

    protected $_element;

    protected $_template = 'widget/preview.phtml';

    public function render(AbstractElement $element){
        $this->setElement($element);
        return $this->toHtml();
    }

    public function setElement($element){
        $this->_element = $element;
    }

    public function getElement(){
        return $this->_element;
    }


}