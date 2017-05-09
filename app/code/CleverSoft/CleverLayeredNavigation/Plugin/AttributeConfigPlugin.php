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


class AttributeConfigPlugin
{
    public function aroundGetAttribute($subject, \Closure $closure, $entityType, $code)
    {
        if(is_string($code) && ($pos = strpos($code, \CleverSoft\CleverLayeredNavigation\Model\Search\RequestGenerator::FAKE_SUFFIX)) !== false) {
            $code = substr($code, 0, $pos);
        }
        return $closure($entityType, $code);
    }

}
