<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * @copyright   Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */
namespace CleverSoft\CleverProduct\Model\Widget\Source;

use Magento\Cms\Model\ResourceModel\Block\CollectionFactory;

class Block implements \Magento\Framework\Option\ArrayInterface{

    /**
     * @var array
     */
    protected $options;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function toOptionArray(){

        if (!$this->options) {
            $this->options = $this->collectionFactory->create()->toOptionArray();
        }
        return $this->options;
    }
}