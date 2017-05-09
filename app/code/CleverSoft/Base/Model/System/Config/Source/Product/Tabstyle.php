<?php
namespace CleverSoft\Base\Model\System\Config\Source\Product;

class Tabstyle implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('Horizontal')], 
            ['value' => 'vertical', 'label' => __('Vertical')], 
            ['value' => 'accordion', 'label' => __('Accordion')]
        ];
    }

    public function toArray()
    {
        return [
            '' => __('Horizontal'), 
            'vertical' => __('Vertical'), 
            'accordion' => __('Accordion')
        ];
    }
}
