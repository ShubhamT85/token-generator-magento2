<?php
namespace Task\GenerateToken\Block\Adminhtml\Display;

use Magento\Backend\Block\Template\Context;
use Task\GenerateToken\Helper\Data;

class Token extends \Magento\Backend\Block\Template
{
    /**
     * @var Data
     */
    protected $helper;

    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getConfigValue($path)
    {
        return $this->helper->getConfig($path);
    }
}
