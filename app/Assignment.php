<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /*
        * complete 
        * completed assignments
        * input : -
        * output : completed column set to true (1)
        * Create : 07/21/2020
        * Author : Niphitphon
        * Last Edit : 07/21/2020 Nipitphon
    */
    public function complete(){
        $this->completed = true;
        $this->save();
    }
}
