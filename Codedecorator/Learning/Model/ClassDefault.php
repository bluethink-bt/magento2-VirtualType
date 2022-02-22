<?php
namespace Codedecorator\Learning\Model;

class ClassDefault
{
    public $namespace;

    public function __construct($namespace = 'default-one')
    {
        $this->namespace = $namespace;
    }
}