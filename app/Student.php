<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{

    public static function getInfo($id){
       return DB::table('student')
       ->where('id',$id)
       ->get();
    }

    public static function getList($stdBranch){
      return DB::table('student')
      ->where('stdBranch',$stdBranch)
      ->join('users','users.id','student.id')
      ->get();
    }

    public static function editData($id){
      return DB::table('student')
      ->where('id', $id)
      ->get();
    }
}
