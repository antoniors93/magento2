<?php
namespace CleverSoft\Base\Model\System\Config;
class Salelabel implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $types = [
            ['value' => 'sale', 'label' => __('Sale')],
            ['value' => 'imagesale', 'label' => __('Image')],
            ['value' => '', 'label' => __('No')],
        ];

        return $types;
    }
}