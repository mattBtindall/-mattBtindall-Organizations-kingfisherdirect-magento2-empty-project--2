<?php
namespace Mattbtindall\JavascriptCssExample\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{

    protected function _prepareLayout()
    {
        $this->setMessage('Hello');
    }

    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }
}
