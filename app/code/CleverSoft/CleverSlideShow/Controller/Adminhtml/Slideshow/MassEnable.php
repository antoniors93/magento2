<?php
namespace CleverSoft\CleverSlideShow\Controller\Adminhtml\Slideshow;
use CleverSoft\CleverSlideShow\Controller\Adminhtml\MassStatus;
class MassEnable extends MassStatus{
	const ID_FIELD = 'id';
	protected $collection = 'CleverSoft\CleverSlideShow\Model\ResourceModel\Slideshow\Collection';
	protected $model = 'CleverSoft\CleverSlideShow\Model\Slideshow';
	protected $status = true;
}