<?php

namespace CleverSoft\CleverSlideShow\Model;

class Layout implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Full Width')],
            ['value' => 1, 'label' => __('Full Screen')],
            ['value' => 2, 'label' => __('Auto')]
        ];
    }
}
