<?php


namespace Amasty\CyxapkoModule\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;



class Index extends Template
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = [])
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getWelcomeText(): string
    {
        return $this->scopeConfig->getValue('cyxapko_config/general/welcome_text') ?: '';
    }
    public function isQtyHidden()
    {
        return  $this->scopeConfig->getValue('cyxapko_config/general/hide_qty');
    }

    public function getViewQtyValue()
    {
        return  $this->scopeConfig->getValue('cyxapko_config/general/view_qty');
    }

}