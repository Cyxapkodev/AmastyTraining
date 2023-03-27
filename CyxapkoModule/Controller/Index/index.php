<?php

namespace Amasty\CyxapkoModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\ResultFactory;


class Index implements ActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(
        ResultFactory $resultFactory,
        ScopeConfigInterface $scopeConfig)
    {
        $this->resultFactory = $resultFactory;
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        if ($this->scopeConfig->isSetFlag('cyxapko_config/general/enabled')) {
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        } else {
            die('Sorry, honey go home!');
        }

    }
}