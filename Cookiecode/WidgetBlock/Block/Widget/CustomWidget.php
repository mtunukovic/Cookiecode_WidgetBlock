<?php
namespace Cookiecode\WidgetBlock\Block\Widget;

class CustomWidget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/custom_widget.phtml');
    }
}
