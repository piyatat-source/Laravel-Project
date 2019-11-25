@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <u><h4>รายชื่อนักศึกษา</h4></u><br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อจริง-นามสกุล</th>
                <th scope="col">เบอร์โทรติดต่อ</th>
                <th scope="col">สาขา</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0; ?>
              @foreach ($list as $key)
              <?php $i++?>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$key->fullname}}</td>
                <td>{{$key->tel}}</td>
                <td>{{$key->stdBranch}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
