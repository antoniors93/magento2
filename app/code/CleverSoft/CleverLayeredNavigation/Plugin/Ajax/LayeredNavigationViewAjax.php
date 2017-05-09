<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Plugin\Ajax;


class LayeredNavigationViewAjax extends Ajax
{

    /**
     * @param \CleverSoft\CleverLayeredNavigation\Controller\Index\Index $controller
     * @param                                           $page
     *
     * @return \Magento\Framework\Controller\Result\Raw|\Magento\Framework\View\Result\Page
     */
    public function afterExecute(\CleverSoft\CleverLayeredNavigation\Controller\Index\Index $controller,  $page)
    {
        if(!$this->isAjax($controller) || !$page instanceof \Magento\Framework\View\Result\Page )
        {
            return $page;
        }

        $responseData = $this->getAjaxResponseData($page);
        $response = $this->prepareResponse($responseData);
        return $response;

    }
}
