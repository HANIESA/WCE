@extends('layouts/admin')

@section('content')


<div class="row gx-10 mb-5" style="background-color: white;border-radius: 10px;padding: 15px 0px">

    <!--begin::Col-->
    <form action="{{route('contents.store')}}" method="POST">
        @csrf
    <div class="col-lg-12">
        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3"> محتوا جدید</label>
        <!--begin::Input group-->
        @foreach ($contents as $content)
            <div class="mb-5">
                {{$content->adminDescription}} <br>
                {{$content->text? $content->text:'' }} <br>
                {{$content->isExist ==1? 'وجود دارد؟':''}} <br>
                @if ($content->image !=null)
                <img src="{{$content->image}}" alt="" width="100">
                @endif

                <textarea class="{{$content->text  ? '' :'d-block'}}" name="text[]" id="" style="width: 100%;height: ;100px"> {{$content->text}}</textarea>
                <input class="{{$content->image ? '' :'d-block'}} mt-3 mb-3" type="text" name="image[]"  value="{{$content->image}}"  style="width: 100%" >
                <input class="{{$content->isExist ? '' :'d-block'}} mt-3 mb-3" type="text" name="isExist[]"  value="{{$content->isExist}}"  style="width: 100%" >
                <input type="hidden" name="field_id[]" value="{{$field->id}}">
            </div>
            <hr>
        @endforeach
        <input class="btn btn-primary w-100"  type="submit" value="ارسال">
        <!--end::Input group-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
</form>
    <!--end::Col-->
</div>

@endsection