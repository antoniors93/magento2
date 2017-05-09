<?php

namespace CleverSoft\CleverSocialLogin\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;
use Magento\Customer\Helper\Session\CurrentCustomer;
use CleverSoft\CleverSocialLogin\Helper\Data;

/**
 * Customer section
 */
class Customer implements SectionSourceInterface
{
    /**
     * @var CurrentCustomer
     */
    protected $currentCustomer;

    /**
     * @var Data
     */
    protected $helper;

    /**
     * @param CurrentCustomer $currentCustomer
     * @param Data $helper
     */
    public function __construct(
        CurrentCustomer $currentCustomer,
        Data $helper
    ) {
        $this->currentCustomer = $currentCustomer;
        $this->helper = $helper;
    }

    public function getSectionData()
    {
        $customerId = $this->currentCustomer->getCustomerId();
        return [
            'photo' => $customerId ? $this->helper->getPhotoPath() : '',
        ];
    }
}
