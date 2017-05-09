<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class RenderCatLevel implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Root Category')],
            ['value' => '2', 'label' => __('Current Category Level')],
            ['value' => '3', 'label' => __('Current Category Children')],
        ];
    }
}