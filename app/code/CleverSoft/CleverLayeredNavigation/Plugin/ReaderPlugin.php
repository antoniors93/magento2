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


class ReaderPlugin
{
    /**
     * @var \CleverSoft\CleverLayeredNavigation\Model\Search\RequestGenerator
     */
    protected $requestGenerator;

    /**
     * ReaderPlugin constructor.
     *
     * @param \CleverSoft\CleverLayeredNavigation\Model\Search\RequestGenerator $requestGenerator
     */
    public function __construct(
        \CleverSoft\CleverLayeredNavigation\Model\Search\RequestGenerator $requestGenerator
    ) {
        $this->requestGenerator = $requestGenerator;
    }


    public function aroundRead(
        \Magento\Framework\Config\ReaderInterface $subject,
        \Closure $proceed,
        $scope = null
    ) {
        $result = $proceed($scope);
        $result = array_merge_recursive($result, $this->requestGenerator->generate());
        return $result;
    }
}
