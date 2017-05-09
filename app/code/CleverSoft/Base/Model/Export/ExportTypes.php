<?php
namespace CleverSoft\Base\Model\Export;
class ExportTypes implements \Magento\Framework\Option\ArrayInterface {
    public function toOptionArray(){

        $types = [
            ['value' => 'pages', 'label' => __('CMS Pages')],
            ['value' => 'blocks', 'label' => __('CMS Blocks')],
            ['value' => 'theme_setting', 'label' => __('Theme Configurations')],
        ];

        return $types;
    }
}