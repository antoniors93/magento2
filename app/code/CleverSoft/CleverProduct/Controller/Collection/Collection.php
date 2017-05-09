<?php
/**
 * @category    MT
 * @package    Clever Product Composer
 * Copyright (C) 2008-2016 ZooExtension.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */
namespace CleverSoft\CleverProduct\Controller\Collection;

class Collection extends \Magento\Framework\App\Action\Action{

    /**
     * @var \Magento\Framework\View\Layout
     */
    protected $layout;

    protected $_helperData;
	
	protected $productRepository;

	protected $coreRegistry;
	
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \CleverSoft\CleverProduct\Helper\Data $helperData,
		\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
		\Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Layout $layout
    ) {
        $this->layout = $layout;
		$this->productRepository = $productRepository;
		$this->coreRegistry = $coreRegistry;
        $this->_helperData = $helperData;
        parent::__construct($context);
    }
    
    public function execute()
    {
        if (!$this->getRequest()->isXmlHttpRequest()) return null;

        $type   = $this->getRequest()->getPost('type');
        $value  = $this->getRequest()->getPost('value');

        if (!$type && !$value) return null;

        $limit      = $this->getRequest()->getPost('limit', 10);
        $carousel   = $this->getRequest()->getPost('carousel', 0);
        $column     = $this->getRequest()->getPost('column', 4);
        $row        = $this->getRequest()->getPost('row', 1);
        $cid        = $this->getRequest()->getPost('cid');
		$cpid        = $this->getRequest()->getPost('cpid');
        $layout        = $this->getRequest()->getPost('layout');
        $id        = $this->getRequest()->getPost('id');
        $template   = $this->getRequest()->getPost('template', 'widget/cases/tab_items.phtml');
        $lazyload   = $this->getRequest()->getPost('lazyload',true);
        $image_width   = $this->getRequest()->getPost('image_width',150);
        $image_height   = $this->getRequest()->getPost('image_height',150);

        /* @var $block CleverProduct_Block_Widget_Collection */
        $block = $this->layout->createBlock('CleverSoft\CleverProduct\Block\Widget\Collection');
        $params = array();

        if ($cid){
            $params['category_ids'] = explode(',', $cid);
        }
		
		if($type == 'collections' && $cpid)
		{
			$product = $this->productRepository->getById($cpid);
			$this->coreRegistry->register('product', $product);
		}
		

        $block->setTemplate($template);
        $block->setData(array(
            'row'           => $row,
            'id'           => $id,
            'column'        => $column,
            'type'          => $type,
            'value'          => $value,
            'category_ids'   => $cid,
            'layout'   => $layout,
            'limit'   => $limit,
            'carousel'      => $carousel,
            'lazyload'      => $lazyload,
            'image_width'      => $image_width,
            'image_height'      => $image_height,
            'collection'    => $this->_helperData->getProducts($type, $value, $params, $limit)
        ));

        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);

        return $resultRaw->setContents($block->toHtml());
    }
}
