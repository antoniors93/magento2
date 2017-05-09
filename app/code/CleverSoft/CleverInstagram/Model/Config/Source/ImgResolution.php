<?php
namespace CleverSoft\CleverInstagram\Model\Config\Source;

class ImgResolution implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'thumbnail', 'label' => __('Thumbnail - 150x150')],
            ['value' => 'low_resolution', 'label' => __('Medium - 306x306')],
            ['value' => 'standard_resolution', 'label' => __('Large - 640x640')],
        ];
    }
}