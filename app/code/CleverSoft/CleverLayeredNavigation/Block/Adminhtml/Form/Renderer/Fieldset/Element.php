<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */


/**
 * Copyright © 2016 CleverSoft. All rights reserved.
 */

namespace CleverSoft\CleverLayeredNavigation\Block\Adminhtml\Form\Renderer\Fieldset;

class Element extends \Magento\Backend\Block\Widget\Form\Renderer\Fieldset\Element
{
    /**
     * @var string
     */
    protected $_template = 'CleverSoft_CleverLayeredNavigation::form/renderer/fieldset/element.phtml';

    public function getScopeLabel()
    {
        return __('[STORE VIEW]');
    }

    public function usedDefault()
    {
        return (bool)$this->getDataObject()->getData($this->getElement()->getName().'_use_default');
    }

    public function checkFieldDisable()
    {
        if ($this->canDisplayUseDefault() && $this->usedDefault()) {
            $this->getElement()->setDisabled(true);
        }
        return $this;
    }

    /**
     * @return \CleverSoft\CleverLayeredNavigation\Model\OptionSetting
     */
    public function getDataObject()
    {
        return $this->getElement()->getForm()->getDataObject();
    }

    public function canDisplayUseDefault()
    {
        return (bool)$this->getDataObject()->getCurrentStoreId();
    }


}
