<?php
namespace Library;

/**
* User Class
*/
class User
{
    public $name;
    public function __construct($name1)
    {
        $this->name = $name1;
    }

    protected function addString()
    {
        return "<br/> Hello ";
    }

    public function getName()
    {
        return $this->addString().$this->name;
    }

    public function setName($name1)
    {
        $this->name = $name1;
    }
}
