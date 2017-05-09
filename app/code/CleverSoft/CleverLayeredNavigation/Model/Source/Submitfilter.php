<?php

namespace CleverSoft\CleverLayeredNavigation\Model\Source;

class Submitfilter implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'instantly', 'label' => __('Instantly')],
            ['value' => 'by_button_click', 'label' => __('By Button Click')],
        ];
    }
}