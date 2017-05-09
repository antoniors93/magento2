<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Model\ResourceModel\OptionSetting;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('CleverSoft\CleverLayeredNavigation\Model\OptionSetting', 'CleverSoft\CleverLayeredNavigation\Model\ResourceModel\OptionSetting');
    }

    public function addLoadParams($filterCode, $optionId, $storeId)
    {
        $listStores = [0];
        if($storeId > 0) {
            $listStores[] = $storeId;
        }
        $this->addFieldToFilter('filter_code', $filterCode)
            ->addFieldToFilter('value', $optionId)
            ->addFieldToFilter('store_id', $listStores)
            ->addOrder('store_id', self::SORT_ORDER_DESC);
        return $this;
    }
}
