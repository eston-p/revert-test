<?php

class MyRevert
{
    /* 
    * var $name    
    */
    protected $name;

    /* 
    * var array $name    
    */
    protected $fullName = [];

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
    public function setName(string $name)
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

    /* 
    * @returns void
    */
    public function seperateName()
    {
        $pieces = explode(' ', $this->name);
        $this->fullName = $pieces;
    }

    /* 
    * @returns array
    */
    public function returnMyFirstandLastName() : array
    {
        return $this->fullName;
    }

    
}