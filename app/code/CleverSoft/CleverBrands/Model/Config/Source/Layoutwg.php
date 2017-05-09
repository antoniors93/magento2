<?php
namespace CleverSoft\CleverBrands\Model\Config\Source;

class Layoutwg implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'carousel', 'label' => __('Carousel')],
            ['value' => 'grid', 'label' => __('Grid')],
            ['value' => 'vertical', 'label' => __('Vertical Carousel')],
        ];
    }
}