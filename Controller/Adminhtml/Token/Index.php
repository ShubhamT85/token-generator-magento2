<?php
namespace Task\GenerateToken\Controller\Adminhtml\Token;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Task_GenerateToken::view');
        $resultPage->getConfig()->getTitle()->prepend(__('Generated Token'));
        return $resultPage;
    }
}
