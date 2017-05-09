<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class SortBy implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'name', 'label' => __('Name')],
            ['value' => 'position', 'label' => __('Position')],
        ];
    }
}