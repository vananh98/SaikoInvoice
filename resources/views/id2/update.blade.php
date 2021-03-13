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
            padding-left: 16% !important;
        }

        .fix-margin {
            margin-left: 15% !important;
            width: 50% !important;
        }

        .border-custome {
            border: 1px solid black !important;
        }

        .custom-tr {
            text-align: center;
            color: black;
        }

        .unset-border-input {
            border: unset !important;
            overflow: auto;
        }

        .fix-font-size {
            font-size: 17px !important;
        }

        .fix-width-input {
            width: 7% !important;
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
                        <form>
                            {{-- form1 --}}
                            <div class="border" style="border: 1px solid black !important">
                                <div class="form-group row custom-padding-top">
                                    <div class="col-sm-8 custom-padding">
                                        <input type="text" class="form-control " name="form1-tieude"
                                            placeholder="Tiêu đề....">
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
                                        <input type="text" class="form-control" name="form1-noidung"
                                            placeholder="Nội dung......">
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
                                    <label for="staticEmail" class="col-sm-2 col-form-label fix-margin">
                                        <b>Số
                                            <i>(No.)</i>
                                        </b>
                                    </label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control"
                                            style="width: 250% !important;margin-left: -41% !important" name="form1-so"
                                            id="staticEmail" value="">
                                    </div>
                                </div>
                            </div>
                            {{-- form2 --}}
                            <div class="border" style="border: 1px solid black !important;border-top:unset !important">
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="staticEmail" class="col-sm-3 col-form-label custom-font-boil">Đơn vị bán
                                        hàng <i>(Issued)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="staticEmail" value="" name="form2-dvbh">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" class="form-control" id="inputPassword" name="form2-mst"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="form2-diachi" id="inputPassword"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Điện thoại
                                        <i>(Phone number)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="form2-dienthoai" id="inputPassword"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="form2-stk" id="inputPassword"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            {{-- form3 --}}
                            <div class="border" style="border: 1px solid black !important;border-top:unset !important">
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="staticEmail" class="col-sm-3 col-form-label custom-font-boil">Họ tên người
                                        mua hàng<i>(Buyer name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control   " id="staticEmail" value=""
                                            name="form3-nmh">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Tên đơn vị
                                        <i>(Company name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-dv">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-mst">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-diachi">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Hình thức
                                        thanh toán <i>(Payment method)</i></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-paymethod">
                                    </div>
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No.):</i></label>
                                    <div class="col-sm-3">
                                        <input type="quantity" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-stk">
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Ghi chú
                                        <i>(Note)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder=""
                                            name="form3-note">
                                    </div>

                                </div>
                            </div>
                            {{-- form4 --}}
                            <div>
                                <table class="table table-bordered" style="border: 1px solid black !important">
                                    <thead>
                                        <tr class="custom-tr">
                                            <th scope="col" class="border-custome">STT <br>
                                                <span><i style="font-weight: normal !important">(No.)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome" style="width: 40%">Tên hàng hoá,dịch vụ
                                                <br>
                                                <span><i style="font-weight: normal !important">(Description)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome" style="width: 8%">ĐVT<br>
                                                <span><i style="font-weight: normal !important">(Unit)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome" style="width: 8%">Số lượng<br>
                                                <span><i style="font-weight: normal !important">(Quantity)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome" style="width: 15%">Đơn giá<br>
                                                <span><i style="font-weight: normal !important">(Unit ơrice)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome">Thành tiền<br>
                                                <span><i style="font-weight: normal !important">(Amount)</i></span>
                                            </th>
                                            <th scope="col" class="border-custome">
                                                <button onclick="addRow(this)" type="button"
                                                    class="btn btn-primary addRow">+
                                                </button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-table">
                                        <tr id="congtienhang">
                                            <th colspan="5" class="border-custome " scope="row">
                                                <b class="float-right fix-font-size">Cộng tiền hàng <i
                                                        class="font-weight-normal">(Total amount):</i></b>
                                            </th>
                                            <td class="border-custome">
                                                <input type="text" class="form-control unset-border-input"
                                                    name="form-4-congtienhang" readonly>
                                            </td>
                                            <td class="border-custome"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="border-custome " scope="row">
                                                <b class=" fix-font-size">Thuế suất GTGT
                                                    <i class="font-weight-normal">(VAT rate):</i>
                                                    <input type="text" class="unset-border-input fix-width-input"
                                                        name="form4-thuegtgt" placeholder="......."><span
                                                        style="font-weight: normal !important">%</span>
                                                </b>
                                            </th>
                                            <td colspan="3" class="border-custome">
                                                <b class="float-right fix-font-size">Tiền thuế GTGT
                                                    <i class="font-weight-normal">(VAT amount):</i>
                                                </b>
                                            </td>
                                            <td class="border-custome">
                                                <input type="text" class="form-control unset-border-input" readonly
                                                    name="form4-tienthuegtgt">
                                            </td>
                                            <td class="border-custome"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="5" class="border-custome " scope="row">
                                                <b class="float-right fix-font-size">Tổng cộng tiền thanh toán
                                                    <i class="font-weight-normal">(Total payment):</i>
                                                </b>
                                            </th>
                                            <td class="border-custome">
                                                <input type="text" name="form4-tongtienthanhtoan" readonly
                                                    class="form-control unset-border-input">
                                            </td>

                                            <td class="border-custome"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="border-custome " scope="row">
                                                <b class=" fix-font-size">Số tiền viết bằng chữ
                                                    <i class="font-weight-normal">(Amount in works):</i>
                                                    <input type="text" name="form4-tienchu" style="width:66%"
                                                        class="unset-border-input"
                                                        placeholder="......................................................................................................................................................">
                                                </b>
                                            </th>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            {{-- form5 --}}
                            <div class="row ">
                                <div class="col-lg-4">
                                    <div class="text-left">
                                        <div>
                                            <b style="font-size: 14px !important">Người chuyển đổi
                                                <i style="font-weight: normal">(Exchanged by)</i>
                                                <input type="text" class="unset-border-input" style="width:35%"
                                                    placeholder="................." name="form5-nguoichuyen">
                                            </b>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div>
                                            <b style="font-size: 14px !important">Người mua hàng <i
                                                    style="font-weight: normal">(Buyer)</i>
                                                <input type="text" class="unset-border-input" style="width:35%"
                                                    placeholder="................." name="form5-nguoimua"></b>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div>
                                            <b style="font-size: 14px !important">Người bán hàng <i
                                                    style="font-weight: normal">(Seller)</i>
                                                <input type="text" class="unset-border-input" style="width:35%"
                                                    placeholder="..............." name="form5-ngban"></b>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <div class="text-left">
                                        <div>
                                            <b style="font-size: 14px !important">Ngày chuyển đổi <i
                                                    style="font-weight: normal">(Exchanged date)</i>
                                                <input type="text" style="width:35%" class="unset-border-input"
                                                    placeholder="..............." name="form5-ngaychuyen"> </b>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <button class="btn btn-primary float-right">1</button>
                                </div >
                                <div  class="col-lg-4 float-right">
                                    <button>2</button>
                                </div>
                                <div  class="col-lg-4 float-right">
                                    <button>3</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
