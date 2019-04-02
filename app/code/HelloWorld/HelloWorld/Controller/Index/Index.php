<?php

namespace HelloWorld\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        //die("hjvgbkj");
        /*$this->scopeConfig->getValue('helloworld/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $this->scopeConfig->getValue('helloworld/general/display_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        */
        return $this->_pageFactory->create();
    }
}