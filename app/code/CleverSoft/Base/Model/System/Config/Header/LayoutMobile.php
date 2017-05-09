<?php
namespace CleverSoft\Base\Model\System\Config\Header;
class LayoutMobile implements \Magento\Framework\Option\ArrayInterface {
    public function toOptionArray()
    {

        $types = [
            ['value' => 'header_layout_1', 'label' => __('Minimal')],
            ['value' => 'header_layout_2', 'label' => __('Standard')]
        ];

        return $types;
    }
}