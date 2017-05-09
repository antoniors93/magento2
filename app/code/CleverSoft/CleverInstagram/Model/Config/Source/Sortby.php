<?php
namespace CleverSoft\CleverInstagram\Model\Config\Source;

class Sortby implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'random', 'label' => __('Random')],
            ['value' => 'most-recent', 'label' => __('Newest to oldest')],
            ['value' => 'most-liked', 'label' => __('Highest # of likes to lowest')],
            ['value' => 'most-commented', 'label' => __('Highest # of comments to lowest')],
        ];
    }
}