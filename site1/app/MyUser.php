<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyUser extends Model
{
    public $id;
    public $email;
    public $password;

    function __construct($id)
    {
        $res = DB::select('select * from myusers where id = ?', [$id]);
        if(!empty($res)){
            foreach ($res as $i){
                $this->id = $id;
                $this->email = $i->email;
                $this->password = $i->password;
            }
        }
    }

    public function get_all(){
        return DB::select('select * from myusers');
    }
}
