<?php

namespace CleverSoft\CleverBlock\Model\Widget\Source;

class Sorter implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => Varien_Data_Collection::SORT_ORDER_DESC,
                'label' => __('Newest first'),
            ),
            array(
                'value' => CleverProduct_Helper_Data::BLOG_POST_ORDER_RANDOM,
                'label' => __('Random'),
            ),
        );
    }
}