<?php
namespace CleverSoft\CleverInstagram\Model\Config\Source;

class ModeImg implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'userid', 'label' => __('User ID')],
            ['value' => 'hashtag', 'label' => __('Hashtag')],
            ['value' => 'liked', 'label' => __('Liked')],
            ['value' => 'location', 'label' => __('Location')],
        ];
    }
}