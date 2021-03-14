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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <a class="nav-link collapsed" href="{{ route('id1.index') }}" aria-expanded="true"
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

            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                data-toggle="collapse" data-target="#collapseUtilities"
                <a class="nav-link collapsed" href="#" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Danh sách hoá đơn</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Addons
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

            <!-- Sidebar Toggler (Sidebar) -->
            {{-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> --}}

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> --}}

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
                $("<tr class='custom-tr'>" + "<th class='border-custome'>" + stt + "</th>" +
                        "<td class='border-custome'> <input type='text' class='form-control' name='form4-tenhang[]' value=''></td>" +
                        "<td class='border-custome'><input type='text' class='form-control' name='form4-dvt[]' value=''></td>" +
                        "<td class='border-custome'><input type='text' class='form-control' name='form4-soluong[]' onchange='updateTotal(this)' value=''></td>" +
                        "<td class='border-custome'><input type='text' class='form-control' name='form4-dongia[]' onchange='updateTotal(this)' value=''></td>" +
                        "<td class='border-custome'><input type='text' readonly class='form-control unset-border-input total' name='form4-thanhtien[]'value=''></td>" +
                        "<td class='border-custome'> </td>" +
                        "/tr>")
                    .insertBefore($("#congtienhang"))
                    ++stt
            })
        })

        function updateTotal(a) {
            var qty = $(a).parent().parent().children().children().eq(2).val()
            var price = $(a).parent().parent().children().children().eq(3).val()
            var total
            var tdTotal = $(a).parent().parent().children().find('input').eq(4)
            var sum = 0;
            var thue = $("#thuegtgt").val();
            var tienthue = $("#tienthuegtgt");
            var tinhtienthue;
            var parse;
            total = qty * price; //tính value
            tdTotal.val(total) //set value
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
        function getDVBH(obj) {
            if (obj.value.length >= 3) {
                var char = obj.value;
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
                        $.each(response, function(index, value) {
                            $("#dvbh").empty()
                            $("#dvbh").append(new Option(value.don_vi_ban_hang))
                        })
                    }
                })
            }
        }
        //form2
        //Mã số thuế
        function getMSt(obj) {
            if (obj.value.length >= 3) {
                var char = obj.value;
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
            if (obj.value.length >= 3) {
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
        }
        //Địa chỉ
        function getDC(obj) {
            if (obj.value.length >= 3) {
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
        }
        //Điện thoại
        function getDT(obj) {
            if (obj.value.length >= 3) {
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
        }
        //số tài khoản
        function getSTK(obj) {
            if (obj.value.length >= 3) {
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
        }
        //Ngân hàng
        function getNH(obj) {
            if (obj.value.length >= 3) {
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
        }
        //form3
        //buyer
        function getBuyer(obj) {
            if (obj.value.length >= 3) {
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
        }
        //company
        function getCPN(obj) {
            if (obj.value.length >= 3) {
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
        }
        //mã số thuế
        function getTax(obj) {
            if (obj.value.length >= 3) {
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
        }
        //địa chỉ
        function getADD(obj) {
            if (obj.value.length >= 3) {
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
        }
        //payment method
        function getPM(obj) {
            if (obj.value.length >= 3) {
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
        }
        //số tài khoản
        function getAccNo(obj) {
            if (obj.value.length >= 3) {
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
                        $("#nh").empty()
                        $.each(response, function(index, value) {
                            $("#nh").append(new Option(value.ngan_hang))
                        })
                    }
                })
            }
        }

    </script>
</body>

</html>
