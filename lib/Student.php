<?php
namespace Library;

use Library\User;

/**
* Student Class
*/
class Student extends User
{
    protected $std = "";
    public function __construct($name, $std)
    {
        parent::__construct($name);
        $this->std = $std;
    }

    public function getStd()
    {
        return $this->addString().$this->std;
    }
}
