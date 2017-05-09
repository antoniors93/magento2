<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class Subcatview implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Folding')],
            ['value' => '2', 'label' => __('Fly-out')],
        ];
    }
}