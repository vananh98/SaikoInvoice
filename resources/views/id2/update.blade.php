@extends('main-id2.layout')
@section('tittle', 'Cập nhật hoá đơn')
@section('style')
    <style>
        b {
            font-size: 11px !important;
            color: black !important
        }

        .custom-label {
            padding-left: 5% !important;
        }

        .custom-padding {
            padding-left: 10% !important;
        }

        .custom-form-group-row {
            padding-left: 3% !important;
        }

        .custom-padding-right {
            padding-right: 2% !important;
        }

        .custom-padding-top {
            padding-top: 1% !important;
        }

        .unset-border {
            border: unset !important;
        }

        .unset-border {
            width: 60px !important;
        }

        i {
            color: black !important;
        }

        .custom-font-boil {
            font-weight: bold;
            color: black;
        }

        .custom-padding-left {
            padding-left: 2% !important;
        }

        .padding-left {
            padding-left: 10% !important;
        }

    </style>
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
                    <div class="container border p-1 " style="border: 1px solid  black !important">
                        <form class="">
                            {{-- form1 --}}
                            <div class="border" style="border: 1px solid black !important">
                                <div class="form-group row custom-padding-top">
                                    <div class="col-sm-8 custom-padding">
                                        <input type="text" class="form-control " name="form1-tieude">
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label custom-label">
                                        <b>Mẫu số
                                            <i>(Form)</i>
                                        </b>
                                    </label>
                                    <div class="col-sm-2 custom-padding-right">
                                        <input type="text" class="form-control" name="form1-mauso" id="staticEmail"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 custom-padding">
                                        <input type="text" class="form-control" name="form1-noidung">
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label custom-label">
                                        <b>
                                            Ký hiệu <i>(Serial)</i>
                                        </b>
                                    </label>
                                    <div class="col-sm-2 custom-padding-right">
                                        <input type="text" class="form-control" name="form1-kyhieu" id="staticEmail"
                                            value="">
                                    </div>
                                </div>
                                {{-- <div class="form-group row  padding-left">
                                    <label for="staticEmail" class="col-sm-10 col-form-label custom-label">
                                        <div class="float-right">
                                            <b>Số
                                                <i>(No.)</i>
                                            </b>
                                        </div>
                                    </label>
                                    <div class="col-sm-2 custom-padding-right">
                                        <input type="text" class="form-control" name="form1-so" id="staticEmail" value="">
                                    </div>
                                </div> --}}
                                <div class="form-group row">

                                </div>
                                <div class="form-group row custom-padding">
                                    <div class="form-group d-flex custom-form-group-row">
                                        <label for="staticEmail" class="col-form-label"><i>Ngày(Date)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1-ngay"
                                                id="staticEmail" value="" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex custom-form-group-row2">
                                        <label for="inputPassword" class=" col-form-label"><i>Tháng(Month)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1-thang"
                                                id="inputPassword" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex custom-form-group-row2">
                                        <label for="inputPassword" class="col-form-label"><i>Năm(Year)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1-nam"
                                                id="inputPassword" placeholder="...">
                                        </div>
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label custom-label padding-left">
                                        <div>
                                            <b>Số
                                                <i>(No.)</i>
                                            </b>
                                        </div>
                                    </label>
                                    <div class="col-sm-3 custom-padding-right padding-left ">
                                        <input type="text" class="form-control" name="form1-so" id="staticEmail" value="">
                                    </div>
                                </div>


                            </div>
                            {{-- form2 --}}
                            <div class="border" style="border: 1px solid black !important;border-top:unset !important">
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="staticEmail" class="col-sm-3 col-form-label custom-font-boil">Đơn vị bán
                                        hàng <i>(Issued)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control   " id="staticEmail" value="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Điện thoại
                                        <i>(Phone number)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                            </div>
                            {{-- form3 --}}
                            <div class="border" style="border: 1px solid black !important;border-top:unset !important">
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="staticEmail" class="col-sm-3 col-form-label custom-font-boil">Họ tên người
                                        mua hàng<i>(Buyer name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control   " id="staticEmail" value="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Tên đơn vị
                                        <i>(Company name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Hình thức
                                        thanh toán <i>(Payment method)</i></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No.):</i></label>
                                    <div class="col-sm-3">
                                        <input type="quantity" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Ghi chú
                                        <i>(Note)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
