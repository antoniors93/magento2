<?php
namespace CleverSoft\Base\Model\System\Config\Header;
class PageLayout implements \Magento\Framework\Option\ArrayInterface {
    public function toOptionArray()
    {

        $types = [
            ['value' => 'wide-layout', 'label' => __('Wide Layout')],
            ['value' => 'boxed-layout', 'label' => __('Boxed')]
        ];

        return $types;
    }
}