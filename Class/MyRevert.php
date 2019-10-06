<?php

class MyRevert
{
    /* 
    * var $name    
    */
    public $name;

    /* 
    * MyRevert constructor
    * @parma string $name
    */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    /* 
    * @param string $name
    * @return void
    */
    protected function setName(string $name)
    {
        $this->name = $name;
    }

    /* 
    * @returns string
    */
    public function getName() : string
    {
        return $this->name;
    }
}