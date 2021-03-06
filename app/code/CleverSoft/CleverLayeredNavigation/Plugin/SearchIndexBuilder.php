<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Plugin;


class SearchIndexBuilder
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }


    public function afterBuild($subject, $result)
    {
        if($this->isEnabledShowOutOfStock() && $this->isEnabledStockFilter()) {
            $this->addStockDataToSelect($result);
        }

        if($this->isEnabledRatingFilter()) {
            $this->addRatingDataToSelect($result);
        }

        return $result;
    }

    protected function addStockDataToSelect($select)
    {
        $connection = $select->getConnection();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $connectiontb = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $select->joinLeft(
            ['stock_index_status_filter' => $connectiontb->getTableName('cataloginventory_stock_status')],
            'search_index.entity_id = stock_index_status_filter.product_id'
            . $connection->quoteInto(
                ' AND stock_index_status_filter.website_id = ?',
                $this->storeManager->getWebsite()->getId()
            ),
            []
        );
    }

    protected function addRatingDataToSelect($select)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $connectiontb = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $select->joinLeft(
            ['rating' => $connectiontb->getTableName('review_entity_summary')],
            sprintf('`rating`.`entity_pk_value`=`search_index`.entity_id
                AND `rating`.entity_type = 1
                AND `rating`.store_id  =  %d',
                $this->storeManager->getStore()->getId()),
            []
        );
    }

    protected function isEnabledShowOutOfStock()
    {
        return $this->scopeConfig->isSetFlag(
            'cataloginventory/options/show_out_of_stock',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    protected function isEnabledStockFilter()
    {
        return $this->scopeConfig->isSetFlag('clevershopby/stock_filter/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    protected function isEnabledRatingFilter()
    {
        return $this->scopeConfig->isSetFlag('clevershopby/rating_filter/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
