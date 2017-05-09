<?php

namespace CleverSoft\CleverCookieLaw\Model\Config;

class Type implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'v-bar', 'label' => __('Bar')],
            ['value' => 'v-box', 'label' => __('Box')],
        ];
    }
}