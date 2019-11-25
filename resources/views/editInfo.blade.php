@extends('layouts.app')

@section('content')
<div class="container fe">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <form class="" action="newInfo" method="post">
                  @csrf
                  <div class="card-header"><b>แก้ไขข้อมูลส่วนตัวอาจารย์</b></div>
                  <div class="card-body">
                      <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      @foreach($editT as $key)
                      <div class="form-group row">
                          <label for="stdFaculty" class="col-sm-4 col-form-label text-md-right">{{ __('คณะ') }}</label>
                          <div class="col-md-6">
                            <select class="form-control" name="teachFaculty">
                              <option value="วิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์">วิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="stdBranch" class="col-sm-4 col-form-label text-md-right">{{ __('สาขา') }}</label>
                          <div class="col-md-6">
                            <select class="form-control" name="teachBranch" >
                              <option value="การประมง">การประมง</option>
                              <option value="วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ">วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ</option>
                              <option value="อุตสาหกรรมเกษตร">อุตสาหกรรมเกษตร</option>
                              <option value="เทคโนโลยีและนวัตกรรมอาหาร">เทคโนโลยีและนวัตกรรมอาหาร</option>
                              <option value="วิทยาศาสตร์การกีฬาและการออกกำลังกาย">วิทยาศาสตร์การกีฬาและการออกกำลังกาย</option>
                              <option value="วิทยาการคอมพิวเตอร์และสารสนเทศ">วิทยาการคอมพิวเตอร์และสารสนเทศ</option>
                            </select>
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
