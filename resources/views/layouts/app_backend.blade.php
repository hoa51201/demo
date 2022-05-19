<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title> @yield('title')</title>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-top-fixed/">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/Admin.css">
    <style>
        @import 'https://code.highcharts.com/css/highcharts.css';

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }


        .highcharts-pie-series .highcharts-point {
            stroke: #EDE;
            stroke-width: 2px;
        }

        .highcharts-pie-series .highcharts-data-label-connector {
            stroke: silver;
            stroke-dasharray: 2, 2;
            stroke-width: 2px;
        }

        body {
            min-height: 75rem;

        }

        .vertical-nav {
            min-width: 17rem;
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
        }

        .page-content {
            width: calc(100% - 17rem);
            margin-left: 17rem;
            transition: all 0.4s;
        }

        /* for toggle behavior */

        #sidebar.active {
            margin-left: -17rem;
        }

        #content.active {
            width: 100%;
            margin: 0;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -17rem;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                width: 100%;
                margin: 0;
            }

            #content.active {
                margin-left: 17rem;
                width: calc(100% - 17rem);
            }
        }

        body {
            background: #599fd9;
            background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
            background: linear-gradient(to right, #599fd9, #c2e59c);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .separator {
            margin: 3rem 0;
            border-bottom: 1px dashed #fff;
        }

        .text-uppercase {
            letter-spacing: 0.1em;
        }

        .text-gray {
            color: #aaa;
        }

        .btn-info:active:hover {
            color: #fff;
            background-color: #269abc;
            border-color: #1b6d85;
        }

        .btn-default:active:hover {
            color: #333;
            background-color: #d4d4d4;
            border-color: #8c8c8c;
        }

        .label-danger {
            background-color: #d9534f;
        }

        .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em;
        }
    </style>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>

<body>

    <main role="main" class="container-fluid">
        <!-- Vertical navbar -->
        <div class="vertical-nav bg-white" id="sidebar">
            <div class="py-4 px-3 mb-4 bg-light">
                <div class="media d-flex align-items-center">
                    {{-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..."
                        style="witdh:65px" class="mr-3 rounded-circle img-thumbnail shadow-sm"> --}}
                    <div class="media-body">
                        <h4 class="m-0">{{$admin->name}}</h4>
                        <p class="font-weight-light text-muted mb-0">Smoothie & Fruit Shop</p>
                    </div>
                </div>
            </div>
            <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
            <ul class="nav flex-column bg-white mb-0">
                @foreach(config('nav.admin.top') as $item)

                @if($item['name']==="Đơn hàng")
                <li class="nav-item dropdown">
                    <a href="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        {{$item['name']}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(config('nav.admin.bottom') as $item)
                        <a class="dropdown-item text-dark font-italic bg-light
                             {{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}"
                            href="{{route($item['route'])}}">
                            {{$item['name']}}</a>
                        @endforeach
                    </div>

                </li>
                @else
                <li class="nav-item">
                    <a href="{{route($item['route'])}}"
                        class="nav-link {{ \Request::route()->getName() == $item['route'] ? 'active' : '' }} text-dark font-italic bg-light">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        {{$item['name']}}
                    </a>
                </li>
                @endif

                @endforeach
            </ul>
            <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>
            <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                    <a class="nav-link text-dark font-italic bg-light" href="{{route('get.home')}}">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Cửa hàng</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-italic bg-light" href="{{route('get_backend.logout')}}">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Đăng xuất</a>

                </li>
            </ul>

        </div>
        <!-- End vertical navbar -->
        <!-- Page content holder -->

        <div class="page-content" id="content">

            <div style="background-color:#fff;height:40px;width:100%">
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm"><i
                        class="fa fa-bars"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
            </div>

            <!-- Toggle button -->

            <!-- Demo content -->
            @yield('content')

        </div>
        <!-- End demo content -->
    </main>
    <!-- Bootstrap core JavaScript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>

    <script type="text/javascript">
        CKEDITOR.replace('noidung');
        CKEDITOR.replace('mota1');
        CKEDITOR.replace('mota');
    </script>

    <script>
        $(function() {
            $(document).ready(function() {
                $('#example').DataTable({
                    language: {
                        "sProcessing": "Đang xử lý...",
                        "sLengthMenu": "Hiển thị _MENU_ mục",
                        "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
                        "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                        "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                        "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                        "sSearch": "Tìm kiếm:",
                        "oPaginate": {
                            "sFirst": "Đầu",
                            "sPrevious": "Trước",
                            "sNext": "Tiếp",
                            "sLast": "Cuối"
                        }
                    }
                });
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
            $('.js-index-cthoadon').hide();
            $('.js-form-add-cthoadon').hide();
            $("body").on('click', '.js-add-cthoadon', function(event) {
                event.preventDefault()
                $('.js-form-add-cthoadon').show();
                $('.js-index-cthoadon').show();
            });


        var dataDonhang = $("#container-figure1").attr('data-json');
        dataDonhang = JSON.parse(dataDonhang);
        
        //Hình tròn
        Highcharts.chart('container-figure1', {
            chart: {
                styledMode: true
            },
            title: {
                text: 'Thống kê trạng thái đơn hàng'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            series: [{
                type: 'pie',
                allowPointSelect: true,
                keys: ['name', 'y', 'selected', 'sliced'],
                data: dataDonhang,
                showInLegend: true
            }]
        });

        var listDay = $("#container-figure").attr('data-list-day');
        listDay = JSON.parse(listDay);
        var listMoney = $("#container-figure").attr('data-money');
        listMoney = JSON.parse(listMoney);
        //Hình miền
        Highcharts.chart('container-figure', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Biểu đồ doanh thu các ngày trong tháng'
            },
            xAxis: {
                categories: listDay
            },
            yAxis: {},
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Tổng',
                marker: {
                    symbol: 'square'
                },
                data: listMoney
            }]
        });

        });
    </script>
</body>

</html>
