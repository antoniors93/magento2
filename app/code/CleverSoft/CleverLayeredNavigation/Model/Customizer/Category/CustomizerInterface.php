<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

namespace CleverSoft\CleverLayeredNavigation\Model\Customizer\Category;

/**
 * Interface CustomizerInterface
 *
 * @author Artem Brunevski
 */

use Magento\Catalog\Model\Category;

interface CustomizerInterface
{
    public function prepareData(Category $category);
}