@extends('main.layout')
@section('tittle', 'Tạo hoá đơn')

@section('header')
    @include('main.header')
@section('content')
    <div class="card shadow mb-4">
        <div class="p-5">
            @if (session('sucess'))
                <div class="alert alert-success">
                    {{ session('sucess') }}
                </div>
            @endif
            <form class="container col-lg-7 col-md-12" action="{{ route('id1.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tiêu đề</label>
                    <div class="col-sm-10">
                        <input type="text" autocomplete="off" class="form-control" name="tittle" id=""
                            value="{{ old('tittle') }}">
                        @error('tittle')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Chọn hoá đơn</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="file" id="imgInp">
                        @error('file')
                            <div class="text-danger">
                                {{ $message }}
                            </div>

                        @enderror
                    </div>

                </div>


                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" class="col-sm-2 btn btn-primary" >
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>


@endsection
