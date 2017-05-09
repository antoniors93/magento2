<?php
/**
 * @author CleverSoft Team
 * @copyright Copyright (c) 2016 CleverSoft
 * @package CleverSoft_CleverLayeredNavigation
 */

namespace CleverSoft\CleverLayeredNavigation\Block\Adminhtml\Page;

/**
 * Class Selection
 *
 * @author Artem Brunevski
 */

use Magento\Framework\View\Element\Template;
use CleverSoft\CleverLayeredNavigation\Controller\RegistryConstants;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Registry;

class Selection extends Template
{
    /** @var Registry  */
    protected $_coreRegistry;

    public function __construct(
        Context $context,
        Registry $registry,
        $data = []
    ){
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = 'selection.phtml';

    /**
     * Get attribute values url
     * @return string
     */
    public function getSelectionUrl()
    {
        return $this->getUrl('cleversoft_shopby/page/selection');
    }

    /**
     * Get add attribute values row url
     * @return string
     */
    public function getAddSelectionUrl()
    {
        return $this->getUrl('cleversoft_shopby/page/addSelection');
    }

    /**
     * @return int
     */
    public function getCounter()
    {
        /** @var \CleverSoft\CleverLayeredNavigation\Model\Page $model */
        $model = $this->_coreRegistry->registry(RegistryConstants::PAGE);
        return count($model->getConditionsUnserialized());
    }
}
