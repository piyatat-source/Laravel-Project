@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">
        @foreach ($std as $key)
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><b>ข้อมูลส่วนตัวนักศึกษา</b></div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="stdBranch" value="{{$key->stdBranch}}">
                    <b><a>รหัสนักศึกษา : </a></b> <a>{{$key->stdNo}}</a><br>
                    <b><a>ชื่อจริง-นามสกุล : </a></b> <a>{{Auth::user()->fullname}}</a><br>
                    <b><a>คณะ : </a></b> <a>{{$key->stdFaculty}}</a><br>
                    <b><a>สาขา : </a></b> <a>{{$key->stdBranch}}</a><br>
                    <b><a>ชั้นปีที่ : </a></b> <a>{{$key->year}}</a><br>
                    <b><a>เบอร์โทรติดต่อ : </a></b> <a>{{$key->tel}}</a><br>
                    <b><a>ปี-เดือน-วัน เกิด : </a></b> <a>{{$key->dob}}</a><br>
                  </div>
              </div><br>
          </div>

          <div class="col-md-9">
          <center><a class="btn btn-info btn-lg btn-block col-lg-8" href="getList{{$key->stdBranch}}" role="button">รายชื่อนักศึกษาสาขา{{$key->stdBranch}}</a></center><br>
          </div>
          @endforeach
        </div>
    </div>
@endsection
