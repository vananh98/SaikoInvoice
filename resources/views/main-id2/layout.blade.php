<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            width: 63px !important;
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
            margin-left: 14% !important;
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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Interface
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                {{-- data-toggle="collapse" data-target="#collapseTwo" --}}
                <a class="nav-link collapsed" href="{{ route('id2.index') }}" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <span>Danh sách hoá đơn</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


        </ul>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script>
        $(document).ready(function() {
            var stt = 1
            $(".addRow").click(function() {
                var obj = $(this).parent().parent()
                var count = $(".count-tr").length
                stt = count + 1

                $("<tr class='custom-tr count-tr'>" + "<th class='border-custome stt'>" + stt +
                        "</th>" +
                        "<td class='border-custome'> <input type='text' autocomplete='off' class='form-control tenhang_class' list='tenhang' onkeyup='getTenhang(this)' name='form4_tenhang[]' value=''><datalist id='tenhang'></datalist></td>" +
                        "<td class='border-custome'><input type='text' autocomplete='off' class='form-control dvt_class' list='dvt' onkeyup='getDVT(this)' name='form4_dvt[]' value=''><datalist id='dvt'></datalist></td>" +
                        "<td class='border-custome'><input type='text' autocomplete='off' class='form-control'list='soluong'  name='form4_soluong[]' onchange='updateTotal(this)' value=''><datalist id='soluong'></datalist></td>" +
                        "<td class='border-custome'><input type='text' autocomplete='off' class='form-control' list='dongia'  name='form4_dongia[]' onchange='updateTotal(this)' value=''><datalist id='dongia'></datalist></td>" +
                        "<td class='border-custome'><input type='text' autocomplete='off' readonly class='form-control unset-border-input total' name='form4_thanhtien[]'value=''></td>" +
                        "<td class='border-custome'><button type='button' onclick='removeRow(this)' class='btn btn-default'><i class='fas fa-minus'></i></button> <input type='text' value='' hidden> </td>" +
                        "/tr>")
                    .insertBefore($("#congtienhang"))
                var elements2 = document.getElementsByClassName('tenhang_class')
                for (var i = 0; i < elements2.length; i++) {
                    elements2[i].addEventListener('input', (e) => {
                        var input = e.target,
                            val = input.value;
                        options = document.getElementById('tenhang').childNodes;

                        for (var i = 0; i < options.length; i++) {
                            if (options[i].innerText === val) {
                                $('.tenhang_class').blur();
                                break;
                            }
                        }
                    });
                }
                //dvt
                var elements3 = document.getElementsByClassName('dvt_class')
                for (var i = 0; i < elements3.length; i++) {
                    elements3[i].addEventListener('input', (e) => {
                        var input = e.target,
                            val = input.value;
                        options = document.getElementById('dvt').childNodes;

                        for (var i = 0; i < options.length; i++) {
                            if (options[i].innerText === val) {
                                $('.dvt_class').blur();
                                break;
                            }
                        }
                    });
                }
            })
            //dvbh
            document.getElementById('dvbh_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('dvbh').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#dvbh_id').blur();
                        break;
                    }
                }
            });
            //ms
            document.getElementById('ms_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('mau_so').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#ms_id').blur();
                        break;
                    }
                }
            });
            //tieude
            document.getElementById('tieude_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('tieude').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#tieude_id').blur();
                        break;
                    }
                }
            });
            //noidung_id
            document.getElementById('noidung_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('noidung').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#noidung_id').blur();
                        break;
                    }
                }
            });
            //mstform2
            document.getElementById('mst_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('mst').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#mst_id').blur();
                        break;
                    }
                }
            });
            //dia chi
            document.getElementById('dc_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('dc').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#dc_id').blur();
                        break;
                    }
                }
            });
            //điện thoại
            document.getElementById('dt_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('dt').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#dt_id').blur();
                        break;
                    }
                }
            });
            //số tài khoản
            document.getElementById('stk_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('stk').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#stk_id').blur();
                        break;
                    }
                }
            });
            //ngân hàng
            document.getElementById('nh_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('nh').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#nh_id').blur();
                        break;
                    }
                }
            });
            //buyer
            document.getElementById('buyer_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('buyer').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#buyer_id').blur();
                        break;
                    }
                }
            });
            //cpn
            document.getElementById('cpn_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('cpn').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#cpn_id').blur();
                        break;
                    }
                }
            });
            //tax
            document.getElementById('tax_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('tax').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#tax_id').blur();
                        break;
                    }
                }
            });
            //address
            document.getElementById('address_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('address').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#address_id').blur();
                        break;
                    }
                }
            });
            //pm
            document.getElementById('pm_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('pm').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#pm_id').blur();
                        break;
                    }
                }
            });
            //account
            document.getElementById('accountNo_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('accountNo').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#accountNo_id').blur();
                        break;
                    }
                }
            });
            //ghichu
            document.getElementById('ghichu_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('ghichu').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#ghichu_id').blur();
                        break;
                    }
                }
            });
            //người chuyển đổi
            document.getElementById('nguoichuyen_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('nguoichuyen').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#nguoichuyen_id').blur();
                        break;
                    }
                }
            });
            //người mua hàng
            document.getElementById('nguoimua_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('nguoimua').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#nguoimua_id').blur();
                        break;
                    }
                }
            });
            //người bán hàng
            document.getElementById('nguoiban_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('nguoiban').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#nguoiban_id').blur();
                        break;
                    }
                }
            });
            //ngày chuyển đổi
            document.getElementById('ngaychuyen_id').addEventListener('input', (e) => {
                var input = e.target,
                    val = input.value;
                options = document.getElementById('ngaychuyen').childNodes;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].innerText === val) {
                        $('#ngaychuyen_id').blur();
                        break;
                    }
                }
            });
            //tenhang
            var elements = document.getElementsByClassName('tenhang_class')
            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('input', (e) => {
                    var input = e.target,
                        val = input.value;
                    options = document.getElementById('tenhang').childNodes;

                    for (var i = 0; i < options.length; i++) {
                        if (options[i].innerText === val) {
                            $('.tenhang_class').blur();
                            break;
                        }
                    }
                });
            }
            //dvt
            var elements = document.getElementsByClassName('dvt_class')
            for (var i = 0; i < elements.length; i++) {
                elements[i].addEventListener('input', (e) => {
                    var input = e.target,
                        val = input.value;
                    options = document.getElementById('dvt').childNodes;

                    for (var i = 0; i < options.length; i++) {
                        if (options[i].innerText === val) {
                            $('.dvt_class').blur();
                            break;
                        }
                    }
                });
            }
        })

        function updateTotal(a) {
            var qty = $(a).parent().parent().children().children().eq(4).val()
            var price = $(a).parent().parent().children().children().eq(6).val()
            var total
            var tdTotal = $(a).parent().parent().children().find('input').eq(4)
            var sum = 0;
            var thue = $("#thuegtgt").val();
            var tienthue = $("#tienthuegtgt");
            var tinhtienthue;
            var parse;
            total = qty * price; //tính value
            tdTotal.val(total) //set value
            console.log(price)
            $("#tenhang").empty()
            $("#dvt").empty()
            $("#soluong").empty()
            $("#dongia").empty()
            $.each($(".total"), function(index, value) {
                parse = value.value
                parse = parseInt(parse)
                sum += parse
            })
            $("#congtienhang2").val(sum)
            tinhtienthue = $("#congtienhang2").val() / 100 * thue
            tienthue.val(tinhtienthue)
            $("#tongtienthanhtoan").val(parseInt(tienthue.val()) + parseInt($("#congtienhang2").val()))
        }
        //DVBH
        function getDVBH(obj, a, b, c) {
            var char = obj.value;
            if (char.length >= 1) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getDVBH') }}",
                    data: {
                        char: char
                    },
                    error: function(res) {
                        console.log(res)
                    },
                    success: function(response) {
                        $("#dvbh").empty()
                        $.each(response, function(index, value) {
                            let option = new Option(value.don_vi_ban_hang);

                            option.setAttribute("class", "dvbh-option");

                            $("#dvbh").append(option)
                        })
                    }
                })
            }
        }
        //form2
        //Mã số thuế
        function getMSt(obj) {
            var char = obj.value;
            if (char.length >= 1) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getMST') }}",
                    data: {
                        char: char
                    },
                    error: function(res) {
                        console.log(res)
                    },
                    success: function(response) {
                        $("#mst").empty()
                        $.each(response, function(index, value) {
                            $("#mst").append(new Option(value.ma_so_thue))
                        })
                    }
                })
            }

        }

        //Địa chỉ
        function getDC(obj) {
            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getDC') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#dc").empty()
                    $.each(response, function(index, value) {
                        $("#dc").append(new Option(value.dia_chi))
                    })
                }
            })
        }
        //Điện thoại
        function getDT(obj) {
            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getDT') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#dt").empty()
                    $.each(response, function(index, value) {
                        console.log(value)
                        $("#dt").append(new Option(value.dien_thoai))
                    })
                }
            })
        }
        //số tài khoản
        function getSTK(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getSTK') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#stk").empty()
                    $.each(response, function(index, value) {
                        $("#stk").append(new Option(value.so_tai_khoan))
                    })
                }
            })
        }
        //Ngân hàng
        function getNH(obj) {
            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getNH') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#nh").empty()
                    $.each(response, function(index, value) {
                        $("#nh").append(new Option(value.ngan_hang))
                    })
                }
            })
        }
        //form3
        //buyer
        function getBuyer(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getBuyer') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#buyer").empty()
                    $.each(response, function(index, value) {
                        $("#buyer").append(new Option(value.ho_ten_nguoi_mua))
                    })
                }
            })

        }
        //get note
        function getNote(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getNote') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#ghichu").empty()
                    $.each(response, function(index, value) {
                        $("#ghichu").append(new Option(value.ghi_chu))
                    })
                }
            })

        }
        //company
        function getCPN(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getCPN') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#cpn").empty()
                    $.each(response, function(index, value) {
                        $("#cpn").append(new Option(value.ten_don_vi))
                    })
                }
            })

        }
        //mã số thuế
        function getTax(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getTax') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#tax").empty()
                    $.each(response, function(index, value) {
                        $("#tax").append(new Option(value.ma_so_thue))
                    })
                }
            })

        }
        //địa chỉ
        function getADD(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getADD') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#address").empty()
                    $.each(response, function(index, value) {
                        console.log(value)
                        $("#address").append(new Option(value.dia_chi))
                    })
                }
            })

        }
        //payment method
        function getPM(obj) {

            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getPM') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#pm").empty()
                    $.each(response, function(index, value) {
                        $("#pm").append(new Option(value.hinh_thuc_thanh_toan))
                    })
                }
            })

        }
        //số tài khoản
        function getAccNo(obj) {
            var char = obj.value;
            $.ajax({
                type: "GET",
                url: "{{ route('getAccNo') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#accountNo").empty()
                    $.each(response, function(index, value) {
                        $("#accountNo").append(new Option(value.so_tai_khoan))
                    })
                }
            })
        }

        //form 4
        //ten hang
        function getTenhang(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getTH') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#tenhang").empty()
                    $.each(response, function(index, value) {
                        $("#tenhang").append(new Option(value.ten_hang_hoa_dich_vu))
                    })
                }
            })
        }
        //form1 
        function getND(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getND') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#noidung").empty()
                    $.each(response, function(index, value) {
                        $("#noidung").append(new Option(value.noi_dung))
                    })
                }
            })
        }
        //
        function getKH(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getkyhieu') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#kyhieu").empty()
                    $.each(response, function(index, value) {
                        $("#kyhieu").append(new Option(value.ky_hieu))
                    })
                }
            })
        }

        function getMS(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getmauso') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#mau_so").empty()
                    $.each(response, function(index, value) {
                        $("#mau_so").append(new Option(value.mau_so))
                    })
                }
            })
        }

        function getNS(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getsono') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#soNo").empty()
                    $.each(response, function(index, value) {
                        $("#soNo").append(new Option(value.so))
                    })
                }
            })
        }
        //DVT
        function getDVT(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getDVT') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#dvt").empty()
                    $.each(response, function(index, value) {
                        $("#dvt").append(new Option(value.don_vi_tinh))
                    })
                }
            })
        }
        // Soluong
        function getSL(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getSL') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#soluong").empty()
                    $.each(response, function(index, value) {
                        $("#soluong").append(new Option(value.so_luong))
                    })
                }
            })
        }
        //don gia
        function getGia(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getPrice') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#dongia").empty()
                    $.each(response, function(index, value) {
                        $("#dongia").append(new Option(value.don_gia))
                    })
                }
            })
        }
        //form5
        function getNC(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getNC') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#nguoichuyen").empty()
                    $.each(response, function(index, value) {
                        $("#nguoichuyen").append(new Option(value.nguoi_chuyen_doi))
                    })
                }
            })
        }
        //
        function getNM(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getNM') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#nguoimua").empty()
                    $.each(response, function(index, value) {
                        $("#nguoimua").append(new Option(value.nguoi_mua_hang))
                    })
                }
            })
        }

        function getNB(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getNB') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#nguoiban").empty()
                    $.each(response, function(index, value) {
                        $("#nguoiban").append(new Option(value.nguoi_ban_hang))
                    })
                }
            })
        }

        function getDC5(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getDC5') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#ngaychuyen").empty()
                    $.each(response, function(index, value) {
                        $("#ngaychuyen").append(new Option(value.ngay_chuyen_doi))
                    })
                }
            })
        }
        //form 1
        function getTieuDe(obj) {
            var char = obj.value
            $.ajax({
                type: "GET",
                url: "{{ route('getTieuDe') }}",
                data: {
                    char: char
                },
                error: function(res) {
                    console.log(res)
                },
                success: function(response) {
                    $("#tieude").empty()
                    $.each(response, function(index, value) {
                        $("#tieude").append(new Option(value.tieu_de))
                    })
                }
            })
        }

        function removeRow(obj) {

            if (!confirm('Are you sure?')) {
                return false
            }
            var id = ($(obj).parent().children().eq(1).val())
            $.ajax({
                type: "GET",
                url: "./remove/" + id,
                success: function(res) {
                    console.log(res)
                }
            });

            ($(obj).parent().parent().remove())
            var countTr = $(".count-tr").length
            var tr = $(".count-tr")
            for (var i = 0; i <= countTr; i++) {
                $.each(tr, function(index, value) {
                    $(value).children().eq(0).text(++i)
                })
            }
            // console.log(countTr)
            updateTotal()
        }


    </script>
</body>

</html>
