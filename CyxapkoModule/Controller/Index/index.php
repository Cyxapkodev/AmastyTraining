<?php

namespace Amasty\CyxapkoModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;
//use tests\unit\Magento\FunctionalTestFramework\Util\Path\UrlFormatterTest;

class Index implements ActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }
    public function execute()
    {

       return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}