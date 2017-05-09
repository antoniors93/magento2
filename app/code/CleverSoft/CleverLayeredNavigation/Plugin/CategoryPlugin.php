<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


namespace CleverSoft\CleverLayeredNavigation\Plugin;

use Magento\Catalog\Block\Category\View;
use Magento\Catalog\Model\Category;

class CategoryPlugin
{
    /**
     * @param Category $subject
     * @param string|null $result
     * @return string|null
     */
    public function afterGetImageUrl(Category $subject, $result)
    {
        if ($subject->hasData('clevershopby_image_url')) {
            return $subject->getData('clevershopby_image_url');
        } else {
            return $result;
        }
    }
}
