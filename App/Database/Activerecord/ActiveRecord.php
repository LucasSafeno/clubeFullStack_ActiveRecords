<?php 
namespace App\Database\Activerecord;

use App\Database\Interface\ActiveRecordInterface;
use App\Database\Interface\UpdateInterface;

abstract class ActiveRecord implements ActiveRecordInterface{

    protected $table = null;
    protected $attributes = [];

    public function __construct($table = null)
    {
        if(!$this->table){
            $this->table = strtolower((new \ReflectionClass($this))->getShortName());
            var_dump($this->table);
        }
    } // __construct()

    public function getAttributes(){
        return $this->attributes;
    } // getAttributes

    public function getTable(){
        return $this->table;
    }// getTable

    public function __set($attributes, $value){
        $this->$attributes[$attributes] = $value;

    }// __set

    public function __get($attributes)
    {
        return $this->attributes[$attributes];
    }// __get
    

    public function update(UpdateInterface $updateInterface)
    {
        return $updateInterface->update();
    }

}// ActiveRecord

