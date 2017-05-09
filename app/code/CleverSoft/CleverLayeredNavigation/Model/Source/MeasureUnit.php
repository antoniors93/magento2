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


class MeasureUnit implements \Magento\Framework\Option\ArrayInterface
{
    const CUSTOM            = 0;
    const CURRENCY_SYMBOL   = 1;

    public function toOptionArray()
    {
        return [
            [
                'value' => self::CURRENCY_SYMBOL,
                'label' => __('Store Currency')
            ],
            [
                'value' => self::CUSTOM,
                'label' => __('Custom label')
            ]
        ];
    }


}
