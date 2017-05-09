<?php

namespace CleverSoft\CleverCookieLaw\Model\Config;

class Message implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'default', 'label' => __('Default message')],
            ['value' => 'custom', 'label' => __('Custom message')],
        ];
    }
}
