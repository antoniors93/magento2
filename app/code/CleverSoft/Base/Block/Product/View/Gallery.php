<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Simple product data view
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace CleverSoft\Base\Block\Product\View;

use Magento\Framework\Data\Collection;
use Magento\Framework\Json\EncoderInterface;
use Magento\Catalog\Helper\Image;

class Gallery extends \Magento\Catalog\Block\Product\View\Gallery
{
    protected $_matoHelper;

    /**
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Stdlib\ArrayUtils $arrayUtils
     * @param EncoderInterface $jsonEncoder
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Stdlib\ArrayUtils $arrayUtils,
        EncoderInterface $jsonEncoder,
        \CleverSoft\Base\Helper\Data $matoHelper,
        array $data = []
    ) {
        $this->_matoHelper = $matoHelper;
        parent::__construct($context, $arrayUtils, $jsonEncoder, $data);
    }


    public function getLabel(){
        return $this->_matoHelper->getLabel($this->getProduct());
    }
}
