@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <u><h4>รายชื่อนักศึกษาสาขาการประมง</h4></u><br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รหัสนักศึกษา</th>
                <th scope="col">ชื่อจริง-นามสกุล</th>
                <th scope="col">เบอร์โทรติดต่อ</th>
                <th scope="col">ชั้นปี</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0; ?>
              @foreach($fish as $key)
              <?php $i++?>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$key->stdNo}}</td>
                <td>{{$key->fullname}}</td>
                <td>{{$key->tel}}</td>
                <td>{{$key->year}}</td>
                <td><a href="delList{{$key->id}}">ลบ</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
