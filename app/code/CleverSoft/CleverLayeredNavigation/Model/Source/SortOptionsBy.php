<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Model\Source;


class SortOptionsBy implements \Magento\Framework\Option\ArrayInterface
{
    const POSITION = 0;
    const NAME = 1;

    public function toOptionArray()
    {
        return [
            [
                'value' => self::POSITION,
                'label' => __('Position')
            ],
            [
                'value' => self::NAME,
                'label' => __('Name')
            ],
        ];
    }
}
