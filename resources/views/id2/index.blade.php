@extends('main-id2.layout')
@section('tittle', 'Cập nhật thông tin hoá đơn')
@section('header')
    @include('main-id2.header')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="p-5">
                    <div class="container col-lg-10 text-primary">
                        <h5>Danh sách hoá đơn</h5>
                    </div>
                    {!! $data->links() !!}
                    <table class="table table-bordered container col-lg-10">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Tác vụ</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Ngày cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;?>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{++$i}}</th>
                                    <td>{{ $item->form1->tieu_de }}</td>
                                    <td>
                                        <a href="{{ route('id2.edit', ['id2' => $item->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
