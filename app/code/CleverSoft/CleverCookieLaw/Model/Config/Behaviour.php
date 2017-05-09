<?php

namespace CleverSoft\CleverCookieLaw\Model\Config;

class Behaviour implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 365, 'label' => __('Never show again')],
            ['value' => 1, 'label' => __('Hide for the rest of the day')],
            ['value' => 0, 'label' => __('Hide for the rest of the session')],
        ];
    }
}
