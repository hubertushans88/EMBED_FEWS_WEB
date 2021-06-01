<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Doremi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{asset('font/simple-line-icons/css/simple-line-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/glide.core.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/component-custom-switch.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>

<body id="app-container" class="menu-default show-spinner">
<nav class="navbar fixed-top">
    <div class="d-flex align-items-center navbar-left">
        <a href="#" class="menu-button d-none d-md-block">
            <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                <rect x="0.48" y="0.5" width="7" height="1" />
                <rect x="0.48" y="7.5" width="7" height="1" />
                <rect x="0.48" y="15.5" width="7" height="1" />
            </svg>
            <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                <rect x="1.56" y="0.5" width="16" height="1" />
                <rect x="1.56" y="7.5" width="16" height="1" />
                <rect x="1.56" y="15.5" width="16" height="1" />
            </svg>
        </a>

        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>


    </div>


    <a class="navbar-logo" href="Dashboard.Default.html">
        <h1>TUGAS EMBED</h1>
{{--        <span class="logo d-none d-xs-block"></span>--}}
{{--        <span class="logo-mobile d-block d-xs-none"></span>--}}
    </a>

    <div class="navbar-right">

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <span class="name">User Name</span>
                <span>
                        <img alt="Profile Picture" src="img/person.png" />
                    </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right mt-3">
                <a class="dropdown-item" href="#">Sign out</a>
            </div>
        </div>
    </div>
</nav>

<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="{{url('dashboard')}}">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="Blank.Page.html">
                        <i class="iconsminds-bucket"></i> Config
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>

                <div class="separator mb-5"></div>
            </div>
            <div class="col-lg-12 col-xl-12">
                <div class="row ">
                    <div class="col-lg-3">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center" style="border-radius: 10px">
                                <div>
                                    <i class="iconsminds-cpu mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">Node 1</p>
                                        <p class="text-small text-white"></p>
                                    </div>
                                </div>

                                <div>
                                    <h1 style="color: white" id="node1">12.5m</h1>
                                    <h5 style="color: whitesmoke">NORMAL</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center" style="border-radius: 10px; background-color: gray">
                                <div>
                                    <i class="iconsminds-cpu mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">Node 2</p>
                                        <p class="text-small text-white"></p>
                                    </div>
                                </div>

                                <div>
                                    <h1 style="color: white" id="node2">N/A</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center" style="border-radius: 10px;background-color: red">
                                <div>
                                    <i class="iconsminds-cpu mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">Node 3</p>
                                        <p class="text-small text-white">Updated 1s ago</p>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h1 style="color: white" id="node3">25m</h1>
                                    <h5 style="color: whitesmoke">DANGER</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center" style="background-color: seagreen; border-radius: 10px">
                                <div>
                                    <i class="iconsminds-magnifi-glass mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">Flood</p>
                                        <p class="text-white small-text">predicted %</p>
                                    </div>
                                </div>

                                <div>
                                    <div role="progressbar"
                                         class="progress-bar-circle progress-bar-banner position-relative"
                                         data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                         aria-valuenow="25" aria-valuemax="100" data-show-percent="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Water Level</h5>
                                <div class="dashboard-line-chart chart">
                                    <canvas id="myChart" width="500px" height="120"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row sortable">
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">MQTT BROKER</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="100"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">CPU LOAD</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="30"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">SYSTEM MEMORY </h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<footer class="page-footer">
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-0 text-muted">IoTALabs {{date('Y')}}</p>
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/vendor/moment.min.js')}}"></script>
<script src="{{asset('js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/vendor/progressbar.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{asset('js/vendor/select2.full.js')}}"></script>
<script src="{{asset('js/vendor/nouislider.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/vendor/Sortable.js')}}"></script>
<script src="{{asset('js/vendor/mousetrap.min.js')}}"></script>
<script src="{{asset('js/vendor/glide.min.js')}}"></script>
<script src="{{asset('js/dore.script.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var cdata = {
        labels: ['00:00'],
        datasets: [
            {
                data: [1,2,30],
                label: "Node 1",
                borderColor: "rgba(255, 99, 132, 0.8)",
                backgroundColor: "rgba(255, 99, 132, 1)",
            },{
                data: [2,2,5],
                label: "Node 2",
                borderColor: "rgba(54, 162, 235, 0.8)",
                backgroundColor: "rgba(54, 162, 235, 1)",
            },{
                data: [0],
                label: "Node 3",
                borderColor: "rgba(153, 102, 255, 0.8)",
                backgroundColor: "rgba(153, 102, 255, 1)",
            }
        ]
    }



    var myChart = new Chart(ctx, {
        type: 'line',
        data: cdata,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    setInterval(function (){
        updateChart();
    },1500);

    function updateChart(){
        $.ajax({
            type: 'GET',
            url : '/data',
            datatype: 'json',
            success: function (data){
                var json = $.parseJSON(data)
                updateStat(json.node1[json.node1.length-1],json.node1[json.node1.length-1],json.node1[json.node1.length-1])
                $('#node1').text(json.node1[json.node1.length-1]);
                $('#node2').text(json.node2[json.node2.length-1]);
                $('#node3').text(json.node3[json.node3.length-1]);
                $.each(myChart.data.labels, function (i,v){
                    myChart.data.labels.pop();
                })
                $.each(myChart.data.datasets, function (i,v){

                    $.each(myChart.data.datasets[i].data,function (k,d){
                        myChart.data.datasets[i].data.pop();
                    })
                })
                $.each(json.time, function (i,item){
                    myChart.data.labels.push(item);
                    myChart.data.datasets[0].data.push(json.node1[i])
                    myChart.data.datasets[1].data.push(json.node2[i])
                    myChart.data.datasets[2].data.push(json.node3[i])
                })
                myChart.update('none');
            }
        })
    }

    function updateStat(node1, node2, node3){

    }


</script>
</body>

</html>
