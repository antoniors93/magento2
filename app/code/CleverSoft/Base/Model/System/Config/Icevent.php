<?php
namespace CleverSoft\Base\Model\System\Config;
class Icevent implements \Magento\Framework\Option\ArrayInterface {
    public function toOptionArray()
    {

        $types = [
            ['value' => 'none', 'label' => __('Standard')],
            ['value' => 'auto', 'label' => __('Infinite Scroll')],
            ['value' => 'manual', 'label' => __('Load More Button')],
        ];

        return $types;
    }
}