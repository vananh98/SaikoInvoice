@extends('main-id2.layout')
@section('tittle', 'Cập nhật hoá đơn')
@section('style')
    
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
                        <form action="{{ route('id2.update', ['id2' => $data->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            {{-- form1 --}}
                            <div class="border" style="border: 1px solid black !important">
                                <div class="form-group row custom-padding-top">
                                    <div class="col-sm-8 custom-padding">
                                        <input type="text" class="form-control " name="form1_tieude"
                                            placeholder="Tiêu đề....">
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label custom-label">
                                        <b>Mẫu số
                                            <i>(Form)</i>
                                        </b>
                                    </label>
                                    <div class="col-sm-2 custom-padding-right">
                                        <input type="text" class="form-control" name="form1_mauso" id="staticEmail"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 custom-padding">
                                        <input type="text" class="form-control" name="form1_noidung"
                                            placeholder="Nội dung......">
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label custom-label">
                                        <b>
                                            Ký hiệu <i>(Serial)</i>
                                        </b>
                                    </label>
                                    <div class="col-sm-2 custom-padding-right">
                                        <input type="text" class="form-control" name="form1_kyhieu" id="staticEmail"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group row">

                                </div>
                                <div class="form-group row custom-padding">
                                    <div class="form-group d-flex custom-form-group-row">
                                        <label for="staticEmail" class="col-form-label"><i>Ngày(Date)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1_ngay"
                                                id="staticEmail" value="" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex custom-form-group-row2">
                                        <label for="inputPassword" class=" col-form-label"><i>Tháng(Month)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1_thang"
                                                id="inputPassword" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex custom-form-group-row2">
                                        <label for="inputPassword" class="col-form-label"><i>Năm(Year)</i></label>
                                        <div class="col-sm-4">
                                            <input type="quantity" class="form-control unset-border" name="form1_nam"
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
                                            style="width: 250% !important;margin-left: -41% !important" name="form1_so"
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
                                        <input type="text" class="form-control" list="dvbh" id="staticEmail"
                                            onkeyup="getDVBH(this)" value="" name="form2_dvbh">
                                        <datalist id="dvbh"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" onkeyup="getMSt(this)" list="mst" class="form-control"
                                            id="inputPassword" name="form2_mst" placeholder="">
                                        <datalist id="mst"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeyup="getDC(this)" class="form-control" list="dc"
                                            name="form2_diachi" id="inputPassword" placeholder="">
                                        <datalist id="dc"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Điện thoại
                                        <i>(Phone number)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeyup="getDT(this)" list="dt" class="form-control"
                                            name="form2_dienthoai" id="inputPassword" placeholder="">
                                        <datalist id="dt"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No)</i></label>
                                    <div class="col-sm-3">
                                        <input type="text" list="stk" onkeyup="getSTK(this)" class="form-control"
                                            name="form2_stk" id="inputPassword" placeholder="">
                                        <datalist id="stk"></datalist>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" list="nh" onkeyup="getNH(this)" class="form-control"
                                            name="form2_nh" id="inputPassword" placeholder="Tên ngân hàng">
                                        <datalist id="nh"></datalist>
                                    </div>
                                </div>
                            </div>
                            {{-- form3 --}}
                            <div class="border" style="border: 1px solid black !important;border-top:unset !important">
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="staticEmail" class="col-sm-3 col-form-label custom-font-boil">Họ tên người
                                        mua hàng<i>(Buyer name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" list="buyer" onkeyup="getBuyer(this)"
                                            id="staticEmail" value="" name="form3_nmh">
                                        <datalist id="buyer"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Tên đơn vị
                                        <i>(Company name)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" list="cpn" onkeyup="getCPN(this)" class="form-control"
                                            id="inputPassword" placeholder="" name="form3_dv">
                                        <datalist id="cpn"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                        <i>(Tax code)</i></label>
                                    <div class="col-sm-9">
                                        <input type="quantity" list="tax" onkeyup="getTax(this)" class="form-control"
                                            id="inputPassword" placeholder="" name="form3_mst">
                                        <datalist id="tax"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                        <i>(Address)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" list="address" onkeyup="getADD(this)" class="form-control"
                                            id="inputPassword" placeholder="" name="form3_diachi">
                                        <datalist id="address"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Hình thức
                                        thanh toán <i>(Payment method)</i></label>
                                    <div class="col-sm-3">
                                        <input type="text" list="pm" onkeyup="getPM(this)" class="form-control"
                                            id="inputPassword" placeholder="" name="form3_paymethod">
                                        <datalist id="pm"></datalist>

                                    </div>
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                        khoản <i>(Account No.):</i></label>
                                    <div class="col-sm-3">
                                        <input type="quantity" list="accountNo" onkeyup="getAccNo(this)"
                                            class="form-control" id="inputPassword" placeholder="" name="form3_stk">
                                        <datalist id="accountNo"></datalist>
                                    </div>
                                </div>
                                <div class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                    <label for="inputPassword" class="col-sm-3 col-form-label  custom-font-boil">Ghi chú
                                        <i>(Note)</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder=""
                                            name="form3_note">
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
                                                <button type="button" class="btn btn-primary addRow">+
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
                                                    name="form4_congtienhang" id="congtienhang2" readonly value="">
                                            </td>
                                            <td class="border-custome"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="border-custome " scope="row">
                                                <b class=" fix-font-size">Thuế suất GTGT
                                                    <i class="font-weight-normal">(VAT rate):</i>
                                                    <input type="quantity" onchange="updateTotal()"
                                                        class="unset-border-input fix-width-input" name="form4_thuegtgt"
                                                        placeholder="......." id="thuegtgt"><span
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
                                                    name="form4_tienthuegtgt" id="tienthuegtgt">
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
                                                <input type="text" name="form4_tongtienthanhtoan" readonly
                                                    class="form-control unset-border-input" id="tongtienthanhtoan">
                                            </td>

                                            <td class="border-custome"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="border-custome " scope="row">
                                                <b class=" fix-font-size">Số tiền viết bằng chữ
                                                    <i class="font-weight-normal">(Amount in works):</i>
                                                    <input type="text" name="form4_tienchu" style="width:66%"
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
                                                    placeholder="................." name="form5_nguoichuyen">
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
                                                    placeholder="................." name="form5_nguoimua"></b>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div>
                                            <b style="font-size: 14px !important">Người bán hàng <i
                                                    style="font-weight: normal">(Seller)</i>
                                                <input type="text" class="unset-border-input" style="width:35%"
                                                    placeholder="..............." name="form5_ngban"></b>
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
                                                    placeholder="..............." name="form5_ngaychuyen"> </b>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <button class="btn btn-primary float-right" name="save" value="1">Lưu</button>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-success float-right" name="save_export" value="1">Lưu & Xuất
                                        PDF</button>
                                </div>
                                <div class="col-lg-4 ">
                                    <button class="btn btn-primary float-right" value="1">Xuất PDF</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
