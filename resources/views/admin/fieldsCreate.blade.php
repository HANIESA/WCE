@extends('layouts/admin')

@section('content')


<div class="row gx-10 mb-5" style="background-color: white;border-radius: 10px;padding: 15px 0px">

    <!--begin::Col-->
    <form action="{{route('fields.store')}}" method="POST">
        @csrf
    <div class="col-lg-12">
        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3"> ساخت فیلد جدید</label>
        <!--begin::Input group-->

        <div class="mb-5">
            <input type="text" name="name" class="form-control form-control-solid" placeholder="name">
        </div>
        <div class="mb-5">
            <input type="text" value="english" name="language" class="form-control form-control-solid" placeholder="language">
        </div>
        <div class="mb-5">
            <h4>راست چین </h4>
            <input type="checkbox" name="rtl" id="" value="1">
        </div>

        <div class="mb-5">
            <div class="mb-5">
                <h4>برای</h4>
                <select class="form-control form-control-solid" name="template_id"  id="">
                    @foreach ($templates as $template)
                        <option value="{{$template->id}}">{{$template->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-5">
            <div class="mb-5">
                <h4>طرح اصلی</h4>
                <input type="checkbox" name="default_template_id" id="" value="1">
           </div>
        </div>

        <input class="btn btn-primary w-100"  type="submit" value="ارسال">
        <!--end::Input group-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
</form>
    <!--end::Col-->
</div>

@endsection