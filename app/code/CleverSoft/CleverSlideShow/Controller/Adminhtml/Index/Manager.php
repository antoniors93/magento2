<?php


namespace CleverSoft\CleverSlideShow\Controller\Adminhtml\Index;;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Manager extends \Magento\Backend\App\Action{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute() {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('CleverSoft_CleverSlideShow::slideshow');
        $resultPage->addBreadcrumb(__('Slideshow'), __('Slideshow'));
        $resultPage->addBreadcrumb(__('Sliders Manager'), __('Sliders Manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('Slideshow'));

        return $resultPage;
    }
}