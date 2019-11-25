@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">
        @foreach ($teach as $key)
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><b>ข้อมูลส่วนตัวอาจารย์</b></div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="teachBranch" value="{{$key->teachBranch}}">
                    <b><a>ชื่อจริง-นามสกุล : </a></b> <a>{{Auth::user()->fullname}}</a><br>
                    <b><a>คณะ : </a></b> <a>{{$key->teachFaculty}}</a><br>
                    <b><a>สาขา : </a></b> <a>{{$key->teachBranch}}</a><br>
                    <b><a>เบอร์โทรติดต่อ : </a></b> <a>{{$key->tel}}</a><br>
                    <b><a>ปี-เดือน-วัน เกิด : </a></b> <a>{{$key->dob}}</a><br>
                  </div>
              </div><br><hr><br>
          </div>

          <div class="col-md-10">
          <center><a class="btn btn-secondary btn-lg btn-block" href="fishList" role="button">รายชื่อนักศึกษา<u>สาขาการประมง</u></a></center><br>
          <center><a class="btn btn-secondary btn-lg btn-block" href="enviList" role="button">รายชื่อนักศึกษา<u>สาขาวิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ</u></a></center><br>
          <center><a class="btn btn-secondary btn-lg btn-block" href="foodList" role="button">รายชื่อนักศึกษา<u>สาขาเทคโนโลยีและนวัตกรรมอาหาร</u></a></center><br>
          <center><a class="btn btn-secondary btn-lg btn-block" href="sportList" role="button">รายชื่อนักศึกษา<u>สาขาวิทยาศาสตร์การกีฬาและการออกกำลังกาย</u></a></center><br>
          <center><a class="btn btn-secondary btn-lg btn-block" href="cisList" role="button">รายชื่อนักศึกษา<u>สาขาวิทยาการคอมพิวเตอร์และสารสนเทศ</u></a></center><br>
          </div>
          @endforeach
        </div>
    </div>
@endsection
