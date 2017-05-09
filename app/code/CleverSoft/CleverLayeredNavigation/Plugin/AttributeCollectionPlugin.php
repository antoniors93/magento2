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


class AttributeCollectionPlugin
{
    public function aroundGetItemByColumnValue($subject, \Closure $closure, $column, $value)
    {
        if($column == 'attribute_code' && ($pos = strpos($value, \CleverSoft\CleverLayeredNavigation\Model\Search\RequestGenerator::FAKE_SUFFIX)) !== false) {
            $value = substr($value, 0, $pos);
        }
        return $closure($column, $value);
    }

}
