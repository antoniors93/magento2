<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class ExpandSubCat implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Always')],
            ['value' => '2', 'label' => __('By Click')],
        ];
    }
}