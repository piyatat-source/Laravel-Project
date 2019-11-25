<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student as std;
use DB;

class StudentController extends Controller
{
    public function getInfo($id){
      $std = std::getInfo($id);

      if(count($std)==0){
        return view('student');
      }
      else{
        $data = array('std' => $std);
        //dd($data);
        return view('index1',$data);
      }
    }

    public function addInfo(Request $req){
      $id = Auth::user()->id;
      $stdNo = $req->input('stdNo');
      $stdFaculty = $req->input('stdFaculty');
      $stdBranch = $req->input('stdBranch');
      $year = $req->input('year');
      $tel = $req->input('tel');
      $dob = $req->input('dob');

      $data = array(
        'id' => $id,
        'stdNo' => $stdNo,
        'stdFaculty' => $stdFaculty,
        'stdBranch' => $stdBranch,
        'year' => $year,
        'tel' => $tel,
        'dob' => $dob,
      );

      $insert = DB::table('student')->insert($data);
      return redirect('home');
    }

    public function getList($stdBranch){
      $list = std::getList($stdBranch);
      $data = array('list' => $list);
      //dd($data);
      return view('showlist',$data);
    }

    public function editData($id){
      $edit = std::editData($id);
      $data = array('edit' => $edit);
      //dd($data);
      return view('editData',$data);
    }

    public function addnewdata(Request $req){
      $id = Auth::user()->id;
      $stdNo = $req->input('stdNo');
      $stdFaculty = $req->input('stdFaculty');
      $stdBranch = $req->input('stdBranch');
      $year = $req->input('year');
      $tel = $req->input('tel');
      $dob = $req->input('dob');

      $data = array(
        'id' => $id,
        'stdNo' => $stdNo,
        'stdFaculty' => $stdFaculty,
        'stdBranch' => $stdBranch,
        'year' => $year,
        'tel' => $tel,
        'dob' => $dob,
      );

      $insert = DB::table('student')
      ->where('id',$id)
      ->update($data);
      return redirect('home');


    }


}
