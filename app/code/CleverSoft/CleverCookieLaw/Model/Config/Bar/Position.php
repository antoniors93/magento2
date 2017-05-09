<?php

namespace CleverSoft\CleverCookieLaw\Model\Config\Bar;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'v-top', 'label' => __('Top')],
            ['value' => 'v-bottom', 'label' => __('Bottom')],
        ];
    }
}