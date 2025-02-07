<?php

namespace App\Database\Activerecord;

use App\Database\Interface\UpdateInterface;

class Update implements UpdateInterface
{

    public function update()
    {
        throw new \Exception("Method update() is not implemented");
    }

}
