<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

namespace CleverSoft\CleverLayeredNavigation\Model\Source;


class IndexMode implements \Magento\Framework\Option\ArrayInterface
{
    const MODE_NEVER = 0;
    const MODE_SINGLE_ONLY = 1;
    const MODE_ALWAYS  = 2;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->_getOptions() as $optionValue=>$optionLabel) {
            $options[] = ['value'=>$optionValue, 'label'=>$optionLabel];
        }
        return $options;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return $this->_getOptions();
    }

    protected function _getOptions()
    {
        $options = [
            self::MODE_NEVER => __('Never'),
            self::MODE_SINGLE_ONLY => __('Single Selection Only'),
            self::MODE_ALWAYS => __('Always'),
        ];

        return $options;
    }
}
