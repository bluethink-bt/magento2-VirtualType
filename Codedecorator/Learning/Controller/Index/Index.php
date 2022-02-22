<?php
namespace Codedecorator\Learning\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Codedecorator\Learning\Model\ClassDefault;

class Index extends Action
{
    protected $classDefault;

    public function __construct(
        Context $context,
        ClassDefault $classDefault
    )
    {
        $this->classDefault = $classDefault;
        parent::__construct($context);
    }

    public function execute()
    {
        echo "Index ClassA Namespace : ".$this->classDefault->namespace;
    }
}