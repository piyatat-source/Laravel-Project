@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <form class="" action="addnewdata" method="post">
                  @csrf
                  <div class="card-header"><b>แก้ไขข้อมูลส่วนตัวนักศึกษา</b></div>
                  <div class="card-body">
                      <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      @foreach($edit as $key)
                      <div class="form-group row">
                          <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('รหัสนักศึกษา') }}</label>
                            <div class="col-md-6">
                              <input value="{{$key->stdNo}}" name="stdNo" type="text" class="form-control" maxlength="10" placeholder="ไม่ต้องใส่ขีด (-)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                      </div>

                      <div class="form-group row">
                          <label for="stdFaculty" class="col-sm-4 col-form-label text-md-right">{{ __('คณะ') }}</label>
                          <div class="col-md-6">
                            <select class="form-control" name="stdFaculty">
                              <option value="วิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์">วิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="stdBranch" class="col-sm-4 col-form-label text-md-right">{{ __('สาขา') }}</label>
                          <div class="col-md-6">
                            <select class="form-control" name="stdBranch" >
                              <option value="การประมง">การประมง</option>
                              <option value="วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ">วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ</option>
                              <option value="เทคโนโลยีและนวัตกรรมอาหาร">เทคโนโลยีและนวัตกรรมอาหาร</option>
                              <option value="วิทยาศาสตร์การกีฬาและการออกกำลังกาย">วิทยาศาสตร์การกีฬาและการออกกำลังกาย</option>
                              <option value="วิทยาการคอมพิวเตอร์และสารสนเทศ">วิทยาการคอมพิวเตอร์และสารสนเทศ</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="year" class="col-sm-4 col-form-label text-md-right">{{ __('ชั้นปี') }}</label>
                          <div class="col-md-6">
                            <input value="{{$key->year}}" name="year" type="number" class="form-control" min="1" max="4" placeholder="----- ชั้นปี -----">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="tel" class="col-sm-4 col-form-label text-md-right">{{ __('เบอร์โทรติดต่อ') }}</label>
                          <div class="col-md-6">
                            <input value="{{$key->tel}}" name="tel" type="tel" class="form-control" maxlength="10" placeholder="ไม่ต้องใส่ขีด (-)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="dob" class="col-sm-4 col-form-label text-md-right">{{ __('วัน เดือน ปี เกิด') }}</label>
                          <div class="col-md-6">
                            <input value="{{$key->dob}}" name="dob" type="date" class="form-control">
                          </div>
                      </div>

                      <div class="form-group row  text-md-right">
                        <div class="col-md-7">
                          <button type="submit" class="btn btn-warning"name="button">แก้ไขข้อมูล</button>
                        </div>
                      </div>
                      @endforeach
                    </div>
                </form>
              </div>
          </div>
        </div>
    </div>
@endsection
