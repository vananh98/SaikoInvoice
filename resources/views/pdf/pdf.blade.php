<!DOCTYPE html>
<html lang="en">

<head>

    {{-- <meta charset="utf-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{ asset('') }}">
    <title>@yield('tittle')</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <style>
        .addRow {
            background-color: white;
            border: none;
        }

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

        .unset-border2 {
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
    @yield('style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @yield('menu')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                {{-- thanh nav ahihi --}}
                @yield('header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                {{-- nội dung chính.... --}}
                <div class="container-fluid">
                    <div class="col-lg-12 mb-4">
                        @yield('content')
                        <div class="container-fluid">
                            <div class="col-lg-12 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="p-5">
                                        <div class="container col-lg-10 text-primary">
                                        </div>
                                        <div class="container border p-1 " style="border: 1px solid  black !important">
                                            {{-- {{ dd($updateForm1) }} --}}
                                            <form method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                {{-- form1 --}}
                                                <div class="border" style="border: 1px solid black !important">
                                                    <div class="form-group row custom-padding-top">
                                                        <div class="col-sm-8 custom-padding">
                                                            <input type="text" class="form-control unset-border2"
                                                                name="form1_tieude" placeholder=""
                                                                value="{{ $updateForm1['tieu_de'] }}">
                                                        </div>
                                                        <label for="staticEmail"
                                                            class="col-sm-2 col-form-label custom-label">
                                                            <b>Mẫu số
                                                                <i>(Form)</i>
                                                            </b>
                                                        </label>
                                                        <div class="col-sm-2 custom-padding-right">
                                                            <input type="text" class="form-control unset-border2"
                                                                name="form1_mauso" id="staticEmail"
                                                                value="{{ $updateForm1['mau_so'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8 custom-padding">
                                                            <input type="text" class="form-control unset-border2"
                                                                name="form1_noidung" placeholder=""
                                                                value="{{ $updateForm1['noi_dung'] }}">
                                                        </div>
                                                        <label for="staticEmail"
                                                            class="col-sm-2 col-form-label custom-label">
                                                            <b>
                                                                Ký hiệu <i>(Serial)</i>
                                                            </b>
                                                        </label>
                                                        <div class="col-sm-2 custom-padding-right">
                                                            <input type="text" class="form-control unset-border2"
                                                                name="form1_kyhieu" id="staticEmail"
                                                                value="{{ $updateForm1['ky_hieu'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                    </div>
                                                    <div class="form-group row custom-padding">
                                                        <div class="form-group d-flex custom-form-group-row">
                                                            <label for="staticEmail"
                                                                class="col-form-label"><i>Ngày(Date)</i></label>
                                                            <div class="col-sm-4">
                                                                <input type="quantity"
                                                                    class="form-control unset-border unset-border2"
                                                                    name="form1_ngay" id="staticEmail" value=""
                                                                    placeholder="...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group d-flex custom-form-group-row2">
                                                            <label for="inputPassword"
                                                                class=" col-form-label"><i>Tháng(Month)</i></label>
                                                            <div class="col-sm-4">
                                                                <input type="quantity"
                                                                    class="form-control unset-border unset-border2"
                                                                    name="form1_thang" id="inputPassword"
                                                                    placeholder="...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group d-flex custom-form-group-row2">
                                                            <label for="inputPassword"
                                                                class="col-form-label"><i>Năm(Year)</i></label>
                                                            <div class="col-sm-4">
                                                                <input type="quantity"
                                                                    class="form-control unset-border unset-border2"
                                                                    name="form1_nam" id="inputPassword"
                                                                    placeholder="...">
                                                            </div>
                                                        </div>
                                                        <label for="staticEmail"
                                                            class="col-sm-2 col-form-label fix-margin">
                                                            <b>Số
                                                                <i>(No.)</i>
                                                            </b>
                                                        </label>
                                                        <div class="col-sm-1">
                                                            <input type="text" class="form-control unset-border2"
                                                                style="width: 250% !important;margin-left: -41% !important"
                                                                name="form1_so" id="staticEmail"
                                                                value="{{ $updateForm1['so'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- form2 --}}
                                                <div class="border"
                                                    style="border: 1px solid black !important;border-top:unset !important">
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="staticEmail"
                                                            class="col-sm-3 col-form-label custom-font-boil">Đơn vị bán
                                                            hàng <i>(Issued)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control unset-border2"
                                                                list="dvbh" id="staticEmail" onkeyup="getDVBH(this)"
                                                                value="{{ $updateForm2['don_vi_ban_hang'] }}"
                                                                name="form2_dvbh">
                                                            <datalist id="dvbh"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                                            <i>(Tax code)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="quantity" onkeyup="getMSt(this)" list="mst"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                name="form2_mst" placeholder=""
                                                                value="{{ $updateForm2['ma_so_thue'] }}">
                                                            <datalist id="mst"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                                            <i>(Address)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" onkeyup="getDC(this)"
                                                                class="form-control unset-border2" list="dc"
                                                                name="form2_diachi" id="inputPassword" placeholder=""
                                                                value="{{ $updateForm2['dia_chi'] }}">
                                                            <datalist id="dc"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Điện thoại
                                                            <i>(Phone number)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" onkeyup="getDT(this)" list="dt"
                                                                class="form-control unset-border2"
                                                                name="form2_dienthoai" id="inputPassword" placeholder=""
                                                                value="{{ $updateForm2['dien_thoai'] }}">
                                                            <datalist id="dt"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                                            khoản <i>(Account No)</i></label>
                                                        <div class="col-sm-3">
                                                            <input type="text" list="stk" onkeyup="getSTK(this)"
                                                                class="form-control unset-border2" name="form2_stk"
                                                                id="inputPassword" placeholder=""
                                                                value="{{ $updateForm2['so_tai_khoan'] }}">
                                                            <datalist id="stk"></datalist>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <input type="text" list="nh" onkeyup="getNH(this)"
                                                                class="form-control unset-border2" name="form2_nh"
                                                                id="inputPassword" placeholder=""
                                                                value="{{ $updateForm2['ngan_hang'] }}">
                                                            <datalist id="nh"></datalist>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- form3 --}}
                                                <div class="border"
                                                    style="border: 1px solid black !important;border-top:unset !important">
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="staticEmail"
                                                            class="col-sm-3 col-form-label custom-font-boil">Họ tên
                                                            người
                                                            mua hàng<i>(Buyer name)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control unset-border2"
                                                                list="buyer" onkeyup="getBuyer(this)" id="staticEmail"
                                                                value="{{ $updateForm3['ho_ten_nguoi_mua'] }}"
                                                                name="form3_nmh">
                                                            <datalist id="buyer"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Tên đơn vị
                                                            <i>(Company name)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" list="cpn" onkeyup="getCPN(this)"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                placeholder="" name="form3_dv"
                                                                value="{{ $updateForm3['ten_don_vi'] }}">
                                                            <datalist id="cpn"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Mã số thuế
                                                            <i>(Tax code)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="quantity" list="tax" onkeyup="getTax(this)"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                placeholder="" name="form3_mst"
                                                                value="{{ $updateForm3['ma_so_thue'] }}">
                                                            <datalist id="tax"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Địa chỉ
                                                            <i>(Address)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" list="address" onkeyup="getADD(this)"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                placeholder="" name="form3_diachi"
                                                                value="{{ $updateForm3['dia_chi'] }}">
                                                            <datalist id="address"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Hình thức
                                                            thanh toán <i>(Payment method)</i></label>
                                                        <div class="col-sm-3">
                                                            <input type="text" list="pm" onkeyup="getPM(this)"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                placeholder="" name="form3_paymethod"
                                                                value="{{ $updateForm3['hinh_thuc_thanh_toan'] }}">
                                                            <datalist id="pm"></datalist>

                                                        </div>
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Số tài
                                                            khoản <i>(Account No.):</i></label>
                                                        <div class="col-sm-3">
                                                            <input type="quantity" list="accountNo"
                                                                onkeyup="getAccNo(this)"
                                                                class="form-control unset-border2" id="inputPassword"
                                                                placeholder="" name="form3_stk"
                                                                value="{{ $updateForm3['so_tai_khoan'] }}">
                                                            <datalist id="accountNo"></datalist>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="form-group row custom-padding-top custom-padding-right custom-padding-left">
                                                        <label for="inputPassword"
                                                            class="col-sm-3 col-form-label  custom-font-boil">Ghi chú
                                                            <i>(Note)</i></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control unset-border2"
                                                                id="inputPassword" placeholder="" name="form3_note"
                                                                value="{{ $updateForm3['ghi_chu'] }}">
                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- form4 --}}
                                                <div>
                                                    <table class="table table-bordered"
                                                        style="border: 1px solid black !important">
                                                        <thead>
                                                            <tr class="custom-tr">
                                                                <th scope="col" class="border-custome">STT <br>
                                                                    <span><i
                                                                            style="font-weight: normal !important">(No.)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome"
                                                                    style="width: 40%">Tên hàng hoá,dịch vụ
                                                                    <br>
                                                                    <span><i
                                                                            style="font-weight: normal !important">(Description)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome"
                                                                    style="width: 8%">ĐVT<br>
                                                                    <span><i
                                                                            style="font-weight: normal !important">(Unit)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome"
                                                                    style="width: 8%">Số lượng<br>
                                                                    <span><i
                                                                            style="font-weight: normal !important">(Quantity)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome"
                                                                    style="width: 15%">Đơn giá<br>
                                                                    <span><i style="font-weight: normal !important">(Unit
                                                                            ơrice)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome">Thành tiền<br>
                                                                    <span><i
                                                                            style="font-weight: normal !important">(Amount)</i></span>
                                                                </th>
                                                                <th scope="col" class="border-custome">
                                                                    <button type="button"
                                                                        class="btn btn-primary addRow">+
                                                                    </button>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="body-table">
                                                            <tr>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                                <td class="border-custome ">a</td>
                                                            </tr>
                                                            <tr id="congtienhang">
                                                                <th colspan="5" class="border-custome " scope="row">
                                                                    <b class="float-right fix-font-size">Cộng tiền hàng
                                                                        <i class="font-weight-normal">(Total
                                                                            amount):</i></b>
                                                                </th>
                                                                <td class="border-custome">
                                                                    <input type="text"
                                                                        class="form-control unset-border-input unset-border2"
                                                                        name="form4_congtienhang" id="congtienhang2"
                                                                        readonly value="">
                                                                </td>
                                                                <td class="border-custome"></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2" class="border-custome " scope="row">
                                                                    <b class=" fix-font-size">Thuế suất GTGT
                                                                        <i class="font-weight-normal">(VAT rate):</i>
                                                                        <input type="quantity" onchange="updateTotal()"
                                                                            class="unset-border-input fix-width-input unset-border2"
                                                                            name="form4_thuegtgt" placeholder="......."
                                                                            id="thuegtgt"><span
                                                                            style="font-weight: normal !important">%</span>
                                                                    </b>
                                                                </th>
                                                                <td colspan="3" class="border-custome">
                                                                    <b class="float-right fix-font-size">Tiền thuế GTGT
                                                                        <i class="font-weight-normal">(VAT amount):</i>
                                                                    </b>
                                                                </td>
                                                                <td class="border-custome">
                                                                    <input type="text"
                                                                        class="form-control unset-border-input unset-border2"
                                                                        readonly name="form4_tienthuegtgt"
                                                                        id="tienthuegtgt">
                                                                </td>
                                                                <td class="border-custome"></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="5" class="border-custome " scope="row">
                                                                    <b class="float-right fix-font-size">Tổng cộng tiền
                                                                        thanh toán
                                                                        <i class="font-weight-normal">(Total
                                                                            payment):</i>
                                                                    </b>
                                                                </th>
                                                                <td class="border-custome">
                                                                    <input type="text" name="form4_tongtienthanhtoan"
                                                                        readonly
                                                                        class="form-control unset-border-input unset-border2"
                                                                        id="tongtienthanhtoan">
                                                                </td>

                                                                <td class="border-custome"></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="border-custome " scope="row">
                                                                    <b class=" fix-font-size">Số tiền viết bằng chữ
                                                                        <i class="font-weight-normal">(Amount in
                                                                            works):</i>
                                                                        <input type="text" name="form4_tienchu"
                                                                            style="width:66%"
                                                                            class="unset-border-input unset-border2"
                                                                            placeholder="">
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
                                                                    <input type="text" class="unset-border-input"
                                                                        style="width:35%" placeholder=""
                                                                        name="form5_nguoichuyen">
                                                                </b>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-center">
                                                            <div>
                                                                <b style="font-size: 14px !important">Người mua hàng <i
                                                                        style="font-weight: normal">(Buyer)</i>
                                                                    <input type="text"
                                                                        class="unset-border-input unset-border2"
                                                                        style="width:35%" placeholder=""
                                                                        name="form5_nguoimua"></b>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-center">
                                                            <div>
                                                                <b style="font-size: 14px !important">Người bán hàng <i
                                                                        style="font-weight: normal">(Seller)</i>
                                                                    <input type="text" class="unset-border-input"
                                                                        style="width:35%" placeholder=""
                                                                        name="form5_ngban"></b>
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
                                                                    <input type="text" style="width:35%"
                                                                        class="unset-border-input" placeholder=""
                                                                        name="form5_ngaychuyen"> </b>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="col-lg-4 ">
                                                        <button class="btn btn-primary float-right" name="save"
                                                            value="1">Lưu</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success float-right" name="save_export"
                                                            value="1">Lưu & Xuất
                                                            PDF</button>
                                                    </div>
                                                    <div class="col-lg-4 ">
                                                        <button class="btn btn-primary float-right" value="1">Xuất
                                                            PDF</button>
                                                    </div>
                                                </div> --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    {{-- <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script> --}}

</body>

</html>
