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
class Attribute implements \Magento\Framework\Option\ArrayInterface{

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager){
        $this->_objectManager = $objectManager;
    }
    public function toOptionArray(){
        $attributes = array();
        $collection = $this->_objectManager->create('Magento\Eav\Model\ResourceModel\Entity\Attribute\Collection')
            ->setEntityTypeFilter($this->_objectManager->create('Magento\Catalog\Model\Product')->getResource()->getTypeId())
            ->addFieldToFilter('is_filterable', array('eq' => '1'))
            ->addFieldToFilter('frontend_input', array('eq' => 'select'));
        foreach ($collection as $attribute){
            $attributes[] = array(
                'value'=>$attribute->getAttributeId() .','. $attribute->getAttributeCode(),
                'label'=>$attribute->getFrontendLabel());
        }
        return $attributes;
    }
}