<?php
namespace CleverSoft\CleverInstagram\Model\Config\Source;

class OpenImage implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'lightbox', 'label' => __('In lightbox')],
            ['value' => 'instagram', 'label' => __('On Instagram')],
        ];
    }
}