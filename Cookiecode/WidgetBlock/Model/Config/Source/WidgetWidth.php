<?php
namespace Cookiecode\WidgetBlock\Model\Config\Source;

class WidgetWidth implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '100%', 'label' => __('100%')],
            ['value' => '75%', 'label' => __('75%')],
            ['value' => '50%', 'label' => __('50%')],
            ['value' => '25%', 'label' => __('25%')]];
    }
}