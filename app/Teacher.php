<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Teacher extends Model
{
  public static function getInfo($id){
     return DB::table('teacher')
     ->where('id',$id)
     ->get();
  }

  public static function fishList(){
    return DB::table('student')
    ->where('stdBranch', "การประมง")
    ->join('users','users.id','student.id')
    ->get();
  }

  public static function enviList(){
    return DB::table('student')
    ->where('stdBranch', "วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ")
    ->join('users','users.id','student.id')
    ->get();
  }

  public static function foodList(){
    return DB::table('student')
    ->where('stdBranch', "เทคโนโลยีและนวัตกรรมอาหาร")
    ->join('users','users.id','student.id')
    ->get();
  }

  public static function sportList(){
    return DB::table('student')
    ->where('stdBranch', "วิทยาศาสตร์การกีฬาและการออกกำลังกาย")
    ->join('users','users.id','student.id')
    ->get();
  }

  public static function cisList(){
    return DB::table('student')
    ->where('stdBranch', "วิทยาการคอมพิวเตอร์และสารสนเทศ")
    ->join('users','users.id','student.id')
    ->get();
  }

  public static function editInfo($id){
    return DB::table('teacher')
    ->where('id', $id)
    ->get();
  }
}
