<?php

namespace CleverSoft\CleverSocialLogin\Model\Config\Source;

class Loginform implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'top', 'label' => __('Top customer login form')],
            ['value' => 'bottom', 'label' => __('Bottom customer login form')],
            ['value' => 'left', 'label' => __('Left customer login form')],
            ['value' => 'right', 'label' => __('Right customer login form')],
        ];
    }
}