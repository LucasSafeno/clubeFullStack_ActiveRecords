<?php

namespace App\Database\Interface;

use App\Database\Interface\UpdateInterface;

interface ActiveRecordInterface
{
    public function update(UpdateInterface $updateInterface);
    // public function insert();
    // public function delete();
    // public function find();
    // public function findBy();
    // public function all();

}
