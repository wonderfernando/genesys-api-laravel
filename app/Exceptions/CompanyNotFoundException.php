<?php

namespace App\Exceptions;

use Exception;

class CompanyNotFoundException extends Exception
{
    public function render()
    {
        return response()->json(["error"=>class_basename($this), "message"=>"Company Object Not Found"],404);
    }
}
