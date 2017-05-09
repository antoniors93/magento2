<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace CleverSoft\Base\Model\Export;

use Magento\Store\Model\System\Store;

/**
 * Store Options for Cms Pages and Blocks
 */
class StoreView extends \Magento\Store\Model\System\Store
{
    /**
     * All Store Views value
     */
    const ALL_STORE_VIEWS = '0';

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getStoreValuesForForm(false, true);
    }


}
