<?php


namespace CleverSoft\MegaMenus\Controller\Adminhtml\Index;;
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
        $resultPage->setActiveMenu('CleverSoft_MegaMenus::megamenu');
        $resultPage->addBreadcrumb(__('Megamenu'), __('Megamenu'));
        $resultPage->addBreadcrumb(__('Menus Manager'), __('Menus Manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('Megamenu'));

        return $resultPage;
    }
}