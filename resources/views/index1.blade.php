@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><b>ข้อมูลส่วนตัวนักศึกษา</b></div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="stdBranch" value="{{$std->stdBranch}}">
                    <b><a>รหัสนักศึกษา : </a></b> <a>{{$std->stdNo}}</a><br>
                    <b><a>ชื่อจริง-นามสกุล : </a></b> <a>{{Auth::user()->fullname}}</a><br>
                    <b><a>คณะ : </a></b> <a>{{$std->stdFaculty}}</a><br>
                    <b><a>สาขา : </a></b> <a>{{$std->stdBranch}}</a><br>
                    <b><a>ชั้นปีที่ : </a></b> <a>{{$std->year}}</a><br>
                    <b><a>เบอร์โทรติดต่อ : </a></b> <a>{{$std->tel}}</a><br>
                    <b><a>ปี-เดือน-วัน เกิด : </a></b> <a>{{$std->dob}}</a><br>
                  </div>
              </div><br>
          </div>

          <div class="col-md-9">
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ชื่อจริง-นามสกุล</th>
                <th scope="col">เบอร์โทรติดต่อ</th>
                <th scope="col">สาขา</th>
              </tr>
            </thead>
            @foreach($stdBranch as $stdBranch)
              <tr>
                <td>{{$stdBranch->fullname}}</td>
                <td>{{$stdBranch->tel}}</td>
                <td>{{$stdBranch->stdBranch}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>


        </div>
    </div>
@endsection
