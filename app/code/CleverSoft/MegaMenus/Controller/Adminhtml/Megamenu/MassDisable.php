<?php
namespace CleverSoft\MegaMenus\Controller\Adminhtml\Megamenu;
use CleverSoft\MegaMenus\Controller\Adminhtml\MassStatus;
class MassDisable extends MassStatus{
	const ID_FIELD = 'id';
	protected $collection = 'CleverSoft\MegaMenus\Model\ResourceModel\Megamenu\Collection';
	protected $model = 'CleverSoft\MegaMenus\Model\Megamenu';
	protected $status = false;
}