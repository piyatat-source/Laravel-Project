<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher as teach;
use DB;

class TeacherController extends Controller
{
  public function getInfo($id){
    $teach = teach::getInfo($id);

    if(count($teach)==0){
      return view('teacher');
    }
    else{
      $data = array('teach' => $teach);
      //dd($data);
      return view('index2',$data);
    }
  }

  public function addDataT(Request $req){
    $id = Auth::user()->id;
    $teachFaculty = $req->input('teachFaculty');
    $teachBranch = $req->input('teachBranch');
    $tel = $req->input('tel');
    $dob = $req->input('dob');

    $data = array(
      'id' => $id,
      'teachFaculty' => $teachFaculty,
      'teachBranch' => $teachBranch,
      'tel' => $tel,
      'dob' => $dob,
      );

      $insert = DB::table('teacher')->insert($data);
      return redirect('home');
  }

  public function fishList(){
    $fish = teach::fishList();
    $data = array('fish' => $fish);
    //dd($data);
    return view('fishData',$data);
  }

  public function enviList(){
    $envi = teach::enviList();
    $data = array('envi' => $envi);
    //dd($data);
    return view('enviData',$data);
  }

  public function foodList(){
    $food = teach::foodList();
    $data = array('food' => $food);
    //dd($data);
    return view('foodData',$data);
  }

  public function sportList(){
    $sport = teach::sportList();
    $data = array('sport' => $sport);
    //dd($data);
    return view('sportData',$data);
  }

  public function cisList(){
    $cis = teach::cisList();
    $data = array('cis' => $cis);
    //dd($data);
    return view('cisData',$data);
  }

  public function delList($id){
    $del = DB::table('student')->where('id',$id)->delete();
    return redirect('home');
  }

  public function editInfo($id){
    $editT = teach::editInfo($id);
    $data = array('editT' => $editT);
    //dd($data);
    return view('editInfo',$data);
  }

  public function newInfo(Request $req){
    $id = Auth::user()->id;
    $teachFaculty = $req->input('teachFaculty');
    $teachBranch = $req->input('teachBranch');
    $tel = $req->input('tel');
    $dob = $req->input('dob');

    $data = array(
      'id' => $id,
      'teachFaculty' => $teachFaculty,
      'teachBranch' => $teachBranch,
      'tel' => $tel,
      'dob' => $dob,
    );

    $insert = DB::table('teacher')
    ->where('id',$id)
    ->update($data);
    return redirect('home');


  }


}
