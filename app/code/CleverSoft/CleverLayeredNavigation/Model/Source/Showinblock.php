<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class Showinblock implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label' => __('Sidebar')],
            ['value' => '1', 'label' => __('Top')],
            ['value' => '2', 'label' => __('Both')],
        ];
    }
}