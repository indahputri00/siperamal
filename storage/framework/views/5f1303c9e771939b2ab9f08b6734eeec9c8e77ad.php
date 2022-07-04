<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <img src="<?php echo e(url('image/peminjaman.png')); ?>" width="60"/>
                            </div>
                            <div class="text">
                                <h2><?php echo e($peminjamans->count()); ?></h2>
                                <span>Peminjaman</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <img src="<?php echo e(url('image/pengembalian.png')); ?>" width="60"/>
                            </div>
                            <div class="text">
                                <h2><?php echo e($pengembalians->count()); ?></h2>
                                <span>Pengembalian</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                 <img src="<?php echo e(url('image/user.png')); ?>" width="60"/>
                            </div>
                            <div class="text">
                                <h2><?php echo e($users->count()); ?></h2>
                                <span>User</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                 <img src="<?php echo e(url('image/member.png')); ?>" width="60"/>
                            </div>
                            <div class="text">
                                <h2><?php echo e($anggotas->count()); ?></h2>
                                <span>Anggota</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="au-card recent-report">
                    <div class="au-card-inner">
                        <h3 class="title-2">Grafik Peminjaman & Pengembalian</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>Peminjaman</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot--green"></span>
                                    <span>Pengembalian</span>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card chart-percent-card">
                    <div class="au-card-inner">
                        <h3 class="title-2 tm-b-5">Total Anggota</h3>
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="chart-note-wrap">
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--blue"></span>
                                        <span>Laki - Laki</span>
                                    </div>
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--red"></span>
                                        <span>Perempuan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="percent-chart">
                                    <canvas id="percent-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <h2 class="title-1 m-b-25">Peminjaman Terakhir </h2>
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th width=2>#</th>
                            <th>Anggota Id</th>
                            <th>User Petugas Id</th>
                            <th>Tanggal</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $peminjamans->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-id='<?php echo e($item->id); ?>'>
                                <td>
                                    <?php echo e($loop->iteration); ?>

                                </td>

                                <td><?php echo e($item->anggota->nama); ?></td>
                                <td><?php echo e($item->user_petugas->name); ?></td>
                                <td><?php echo e($item->tanggal); ?></td>
                                <td><?php echo e($item->tanggal_pengembalian); ?></td>
                                <td><?php echo e($item->status); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">
                <h2 class="title-1 m-b-25">Terbanyak Dipinjam</h2>
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>

                                <?php $__currentLoopData = $terbanyak_dpinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->judul); ?></td>
                                        <td class="text-right"><?php echo e($item->jumlah_dipinjam); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard-script'); ?>
    <script>

        (function ($) {
            // USE STRICT
            "use strict";

            try {
                //WidgetChart 1
                var ctx = document.getElementById("widgetChart1");
                if (ctx) {
                    ctx.height = 130;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            type: 'line',
                            datasets: [{
                                data: [78, 81, 80, 45, 34, 12, 40],
                                label: 'Dataset',
                                backgroundColor: 'rgba(255,255,255,.1)',
                                borderColor: 'rgba(255,255,255,.55)',
                            },]
                        },
                        options: {
                            maintainAspectRatio: true,
                            legend: {
                                display: false
                            },
                            layout: {
                                padding: {
                                    left: 0,
                                    right: 0,
                                    top: 0,
                                    bottom: 0
                                }
                            },
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        color: 'transparent',
                                        zeroLineColor: 'transparent'
                                    },
                                    ticks: {
                                        fontSize: 2,
                                        fontColor: 'transparent'
                                    }
                                }],
                                yAxes: [{
                                    display: false,
                                    ticks: {
                                        display: false,
                                    }
                                }]
                            },
                            title: {
                                display: false,
                            },
                            elements: {
                                line: {
                                    borderWidth: 0
                                },
                                point: {
                                    radius: 0,
                                    hitRadius: 10,
                                    hoverRadius: 4
                                }
                            }
                        }
                    });
                }


                //WidgetChart 2
                var ctx = document.getElementById("widgetChart2");
                if (ctx) {
                    ctx.height = 130;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                            type: 'line',
                            datasets: [{
                                data: [1, 18, 9, 17, 34, 22],
                                label: 'Dataset',
                                backgroundColor: 'transparent',
                                borderColor: 'rgba(255,255,255,.55)',
                            },]
                        },
                        options: {

                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                titleFontSize: 12,
                                titleFontColor: '#000',
                                bodyFontColor: '#000',
                                backgroundColor: '#fff',
                                titleFontFamily: 'Montserrat',
                                bodyFontFamily: 'Montserrat',
                                cornerRadius: 3,
                                intersect: false,
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        color: 'transparent',
                                        zeroLineColor: 'transparent'
                                    },
                                    ticks: {
                                        fontSize: 2,
                                        fontColor: 'transparent'
                                    }
                                }],
                                yAxes: [{
                                    display: false,
                                    ticks: {
                                        display: false,
                                    }
                                }]
                            },
                            title: {
                                display: false,
                            },
                            elements: {
                                line: {
                                    tension: 0.00001,
                                    borderWidth: 1
                                },
                                point: {
                                    radius: 4,
                                    hitRadius: 10,
                                    hoverRadius: 4
                                }
                            }
                        }
                    });
                }


                //WidgetChart 3
                var ctx = document.getElementById("widgetChart3");
                if (ctx) {
                    ctx.height = 130;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                            type: 'line',
                            datasets: [{
                                data: [65, 59, 84, 84, 51, 55],
                                label: 'Dataset',
                                backgroundColor: 'transparent',
                                borderColor: 'rgba(255,255,255,.55)',
                            },]
                        },
                        options: {

                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                titleFontSize: 12,
                                titleFontColor: '#000',
                                bodyFontColor: '#000',
                                backgroundColor: '#fff',
                                titleFontFamily: 'Montserrat',
                                bodyFontFamily: 'Montserrat',
                                cornerRadius: 3,
                                intersect: false,
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        color: 'transparent',
                                        zeroLineColor: 'transparent'
                                    },
                                    ticks: {
                                        fontSize: 2,
                                        fontColor: 'transparent'
                                    }
                                }],
                                yAxes: [{
                                    display: false,
                                    ticks: {
                                        display: false,
                                    }
                                }]
                            },
                            title: {
                                display: false,
                            },
                            elements: {
                                line: {
                                    borderWidth: 1
                                },
                                point: {
                                    radius: 4,
                                    hitRadius: 10,
                                    hoverRadius: 4
                                }
                            }
                        }
                    });
                }


                //WidgetChart 4
                var ctx = document.getElementById("widgetChart4");
                if (ctx) {
                    ctx.height = 115;
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [78, 81, 80, 65, 58, 75, 60, 75, 65, 60, 60, 75],
                                    borderColor: "transparent",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(255,255,255,.3)"
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: true,
                            legend: {
                                display: false
                            },
                            scales: {
                                xAxes: [{
                                    display: false,
                                    categoryPercentage: 1,
                                    barPercentage: 0.65
                                }],
                                yAxes: [{
                                    display: false
                                }]
                            }
                        }
                    });
                }

                // Recent Report
                const brandProduct = 'rgba(0,181,233,0.8)'
                const brandService = 'rgba(0,173,95,0.8)'

                var elements = 10
                var data1 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
                var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

                var ctx = document.getElementById("recent-rep-chart");
                if (ctx) {
                    ctx.height = 250;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
                            datasets: [
                                {
                                    label: 'Pengembalian',
                                    backgroundColor: brandService,
                                    borderColor: 'transparent',
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data1

                                },
                                {
                                    label: 'Peminjaman',
                                    backgroundColor: brandProduct,
                                    borderColor: 'transparent',
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data2

                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: true,
                            legend: {
                                display: false
                            },
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        drawOnChartArea: true,
                                        color: '#f2f2f2'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        maxTicksLimit: 5,
                                        stepSize: 50,
                                        max: 150,
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    },
                                    gridLines: {
                                        display: true,
                                        color: '#f2f2f2'

                                    }
                                }]
                            },
                            elements: {
                                point: {
                                    radius: 0,
                                    hitRadius: 10,
                                    hoverRadius: 4,
                                    hoverBorderWidth: 3
                                }
                            }


                        }
                    });
                }

                // Percent Chart

                <?php if(request()->segment(1) == 'home'): ?>
                var ctx = document.getElementById("percent-chart");
                if (ctx) {
                    ctx.height = 280;
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [<?php echo e($anggotas->where('jenis_kelamin', 'Laki - Laki')->count()); ?>, <?php echo e($anggotas->where('jenis_kelamin', 'Perempuan')->count()); ?>],
                                    backgroundColor: [
                                        '#00b5e9',
                                        '#fa4251'
                                    ],
                                    hoverBackgroundColor: [
                                        '#00b5e9',
                                        '#fa4251'
                                    ],
                                    borderWidth: [
                                        0, 0
                                    ],
                                    hoverBorderColor: [
                                        'transparent',
                                        'transparent'
                                    ]
                                }
                            ],
                            labels: [
                                'Laki - Laki',
                                'Perempuan'
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            cutoutPercentage: 55,
                            animation: {
                                animateScale: true,
                                animateRotate: true
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                titleFontFamily: "Poppins",
                                xPadding: 15,
                                yPadding: 10,
                                caretPadding: 0,
                                bodyFontSize: 16
                            }
                        }
                    });
                }
                <?php endif; ?>
            } catch (error) {
                console.log(error);
            }


            try {

                // Recent Report 2
                const bd_brandProduct2 = 'rgba(0,181,233,0.9)'
                const bd_brandService2 = 'rgba(0,173,95,0.9)'
                const brandProduct2 = 'rgba(0,181,233,0.2)'
                const brandService2 = 'rgba(0,173,95,0.2)'

                var data3 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
                var data4 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

                var ctx = document.getElementById("recent-rep2-chart");
                if (ctx) {
                    ctx.height = 230;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
                            datasets: [
                                {
                                    label: 'Pengembalian',
                                    backgroundColor: brandService2,
                                    borderColor: bd_brandService2,
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data3

                                },
                                {
                                    label: 'Peminjaman',
                                    backgroundColor: brandProduct2,
                                    borderColor: bd_brandProduct2,
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data4

                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: true,
                            legend: {
                                display: false
                            },
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        drawOnChartArea: true,
                                        color: '#f2f2f2'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        maxTicksLimit: 5,
                                        stepSize: 50,
                                        max: 150,
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    },
                                    gridLines: {
                                        display: true,
                                        color: '#f2f2f2'

                                    }
                                }]
                            },
                            elements: {
                                point: {
                                    radius: 0,
                                    hitRadius: 10,
                                    hoverRadius: 4,
                                    hoverBorderWidth: 3
                                },
                                line: {
                                    tension: 0
                                }
                            }


                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }


            try {

                // Recent Report 3
                const bd_brandProduct3 = 'rgba(0,181,233,0.9)';
                const bd_brandService3 = 'rgba(0,173,95,0.9)';
                const brandProduct3 = 'transparent';
                const brandService3 = 'transparent';

                var data5 = [52, 60, 55, 50, 65, 80, 57, 115];
                var data6 = [102, 70, 80, 100, 56, 53, 80, 90];

                var ctx = document.getElementById("recent-rep3-chart");
                if (ctx) {
                    ctx.height = 230;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', ''],
                            datasets: [
                                {
                                    label: 'Pengembalian',
                                    backgroundColor: brandService3,
                                    borderColor: bd_brandService3,
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data5,
                                    pointBackgroundColor: bd_brandService3
                                },
                                {
                                    label: 'Peminjaman',
                                    backgroundColor: brandProduct3,
                                    borderColor: bd_brandProduct3,
                                    pointHoverBackgroundColor: '#fff',
                                    borderWidth: 0,
                                    data: data6,
                                    pointBackgroundColor: bd_brandProduct3

                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        drawOnChartArea: true,
                                        color: '#f2f2f2'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        maxTicksLimit: 5,
                                        stepSize: 50,
                                        max: 150,
                                        fontFamily: "Poppins",
                                        fontSize: 12
                                    },
                                    gridLines: {
                                        display: false,
                                        color: '#f2f2f2'
                                    }
                                }]
                            },
                            elements: {
                                point: {
                                    radius: 3,
                                    hoverRadius: 4,
                                    hoverBorderWidth: 3,
                                    backgroundColor: '#333'
                                }
                            }


                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            try {
                //WidgetChart 5
                var ctx = document.getElementById("widgetChart5");
                if (ctx) {
                    ctx.height = 220;
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [78, 81, 80, 64, 65, 80, 70, 75, 67, 85, 66, 68],
                                    borderColor: "transparent",
                                    borderWidth: "0",
                                    backgroundColor: "#ccc",
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: true,
                            legend: {
                                display: false
                            },
                            scales: {
                                xAxes: [{
                                    display: false,
                                    categoryPercentage: 1,
                                    barPercentage: 0.65
                                }],
                                yAxes: [{
                                    display: false
                                }]
                            }
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            try {

                // Percent Chart 2
                var ctx = document.getElementById("percent-chart2");
                if (ctx) {
                    ctx.height = 209;
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [60, 40],
                                    backgroundColor: [
                                        '#00b5e9',
                                        '#fa4251'
                                    ],
                                    hoverBackgroundColor: [
                                        '#00b5e9',
                                        '#fa4251'
                                    ],
                                    borderWidth: [
                                        0, 0
                                    ],
                                    hoverBorderColor: [
                                        'transparent',
                                        'transparent'
                                    ]
                                }
                            ],
                            labels: [
                                'Products',
                                'Services'
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            cutoutPercentage: 87,
                            animation: {
                                animateScale: true,
                                animateRotate: true
                            },
                            legend: {
                                display: false,
                                position: 'bottom',
                                labels: {
                                    fontSize: 14,
                                    fontFamily: "Poppins,sans-serif"
                                }

                            },
                            tooltips: {
                                titleFontFamily: "Poppins",
                                xPadding: 15,
                                yPadding: 10,
                                caretPadding: 0,
                                bodyFontSize: 16,
                            }
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            try {
                //Sales chart
                var ctx = document.getElementById("sales-chart");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                            type: 'line',
                            defaultFontFamily: 'Poppins',
                            datasets: [{
                                label: "Foods",
                                data: [0, 30, 10, 120, 50, 63, 10],
                                backgroundColor: 'transparent',
                                borderColor: 'rgba(220,53,69,0.75)',
                                borderWidth: 3,
                                pointStyle: 'circle',
                                pointRadius: 5,
                                pointBorderColor: 'transparent',
                                pointBackgroundColor: 'rgba(220,53,69,0.75)',
                            }, {
                                label: "Electronics",
                                data: [0, 50, 40, 80, 40, 79, 120],
                                backgroundColor: 'transparent',
                                borderColor: 'rgba(40,167,69,0.75)',
                                borderWidth: 3,
                                pointStyle: 'circle',
                                pointRadius: 5,
                                pointBorderColor: 'transparent',
                                pointBackgroundColor: 'rgba(40,167,69,0.75)',
                            }]
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                titleFontSize: 12,
                                titleFontColor: '#000',
                                bodyFontColor: '#000',
                                backgroundColor: '#fff',
                                titleFontFamily: 'Poppins',
                                bodyFontFamily: 'Poppins',
                                cornerRadius: 3,
                                intersect: false,
                            },
                            legend: {
                                display: false,
                                labels: {
                                    usePointStyle: true,
                                    fontFamily: 'Poppins',
                                },
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: false,
                                        labelString: 'Month'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Value',
                                        fontFamily: "Poppins"

                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }]
                            },
                            title: {
                                display: false,
                                text: 'Normal Legend'
                            }
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {

                //Team chart
                var ctx = document.getElementById("team-chart");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                            type: 'line',
                            defaultFontFamily: 'Poppins',
                            datasets: [{
                                data: [0, 7, 3, 5, 2, 10, 7],
                                label: "Expense",
                                backgroundColor: 'rgba(0,103,255,.15)',
                                borderColor: 'rgba(0,103,255,0.5)',
                                borderWidth: 3.5,
                                pointStyle: 'circle',
                                pointRadius: 5,
                                pointBorderColor: 'transparent',
                                pointBackgroundColor: 'rgba(0,103,255,0.5)',
                            },]
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                titleFontSize: 12,
                                titleFontColor: '#000',
                                bodyFontColor: '#000',
                                backgroundColor: '#fff',
                                titleFontFamily: 'Poppins',
                                bodyFontFamily: 'Poppins',
                                cornerRadius: 3,
                                intersect: false,
                            },
                            legend: {
                                display: false,
                                position: 'top',
                                labels: {
                                    usePointStyle: true,
                                    fontFamily: 'Poppins',
                                },


                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: false,
                                        labelString: 'Month'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Value',
                                        fontFamily: "Poppins"
                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }]
                            },
                            title: {
                                display: false,
                            }
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {
                //bar chart
                var ctx = document.getElementById("barChart");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        defaultFontFamily: 'Poppins',
                        data: {
                            labels: ["January", "February", "March", "April", "May", "June", "July"],
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [65, 59, 80, 81, 56, 55, 40],
                                    borderColor: "rgba(0, 123, 255, 0.9)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(0, 123, 255, 0.5)",
                                    fontFamily: "Poppins"
                                },
                                {
                                    label: "Peminjaman",
                                    data: [28, 48, 40, 19, 86, 27, 90],
                                    borderColor: "rgba(0,0,0,0.09)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(0,0,0,0.07)",
                                    fontFamily: "Poppins"
                                }
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontFamily: "Poppins"

                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        fontFamily: "Poppins"
                                    }
                                }]
                            }
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {

                //radar chart
                var ctx = document.getElementById("radarChart");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'radar',
                        data: {
                            labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                            defaultFontFamily: 'Poppins',
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [65, 59, 66, 45, 56, 55, 40],
                                    borderColor: "rgba(0, 123, 255, 0.6)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(0, 123, 255, 0.4)"
                                },
                                {
                                    label: "Peminjaman",
                                    data: [28, 12, 40, 19, 63, 27, 87],
                                    borderColor: "rgba(0, 123, 255, 0.7",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                                }
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            scale: {
                                ticks: {
                                    beginAtZero: true,
                                    fontFamily: "Poppins"
                                }
                            }
                        }
                    });
                }

            } catch (error) {
                console.log(error)
            }

            try {

                //line chart
                var ctx = document.getElementById("lineChart");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["January", "February", "March", "April", "May", "June", "July"],
                            defaultFontFamily: "Poppins",
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    borderColor: "rgba(0,0,0,.09)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(0,0,0,.07)",
                                    data: [22, 44, 67, 43, 76, 45, 12]
                                },
                                {
                                    label: "Peminjaman",
                                    borderColor: "rgba(0, 123, 255, 0.9)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(0, 123, 255, 0.5)",
                                    pointHighlightStroke: "rgba(26,179,148,1)",
                                    data: [16, 32, 18, 26, 42, 33, 44]
                                }
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                intersect: false
                            },
                            hover: {
                                mode: 'nearest',
                                intersect: true
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontFamily: "Poppins"

                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        fontFamily: "Poppins"
                                    }
                                }]
                            }

                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }


            try {

                //doughut chart
                var ctx = document.getElementById("doughutChart");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            datasets: [{
                                data: [45, 25, 20, 10],
                                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ],
                                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            }],
                            labels: [
                                "Green",
                                "Green",
                                "Green",
                                "Green"
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }


            try {

                //pie chart
                var ctx = document.getElementById("pieChart");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            datasets: [{
                                data: [45, 25, 20, 10],
                                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ],
                                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            }],
                            labels: [
                                "Green",
                                "Green",
                                "Green"
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {

                // polar chart
                var ctx = document.getElementById("polarChart");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            datasets: [{
                                data: [15, 18, 9, 6, 19],
                                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.8)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0,0,0,0.2)",
                                    "rgba(0, 123, 255,0.5)"
                                ]

                            }],
                            labels: [
                                "Green",
                                "Green",
                                "Green",
                                "Green"
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            try {

                // single bar chart
                var ctx = document.getElementById("singelBarChart");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                            datasets: [
                                {
                                    label: "Pengembalian",
                                    data: [40, 55, 75, 81, 56, 55, 40],
                                    borderColor: "rgba(0, 123, 255, 0.9)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                                }
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontFamily: "Poppins"

                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        fontFamily: "Poppins"
                                    }
                                }]
                            }
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

        })(jQuery);


        (function ($) {
            // USE STRICT
            "use strict";
            $(".animsition").animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 900,
                outDuration: 900,
                linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])',
                loading: true,
                loadingParentElement: 'html',
                loadingClass: 'page-loader',
                loadingInner: '<div class="page-loader__spin"></div>',
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration'],
                overlay: false,
                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'html',
                transition: function (url) {
                    window.location.href = url;
                }
            });


        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            // Map
            try {

                var vmap = $('#vmap');
                if (vmap[0]) {
                    vmap.vectorMap({
                        map: 'world_en',
                        backgroundColor: null,
                        color: '#ffffff',
                        hoverOpacity: 0.7,
                        selectedColor: '#1de9b6',
                        enableZoom: true,
                        showTooltip: true,
                        values: sample_data,
                        scaleColors: ['#1de9b6', '#03a9f5'],
                        normalizeFunction: 'polynomial'
                    });
                }

            } catch (error) {
                console.log(error);
            }

            // Europe Map
            try {

                var vmap1 = $('#vmap1');
                if (vmap1[0]) {
                    vmap1.vectorMap({
                        map: 'europe_en',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        enableZoom: true,
                        showTooltip: true
                    });
                }

            } catch (error) {
                console.log(error);
            }

            // USA Map
            try {

                var vmap2 = $('#vmap2');

                if (vmap2[0]) {
                    vmap2.vectorMap({
                        map: 'usa_en',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        enableZoom: true,
                        showTooltip: true,
                        selectedColor: null,
                        hoverColor: null,
                        colors: {
                            mo: '#001BFF',
                            fl: '#001BFF',
                            or: '#001BFF'
                        },
                        onRegionClick: function (event, code, region) {
                            event.preventDefault();
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            // Germany Map
            try {

                var vmap3 = $('#vmap3');
                if (vmap3[0]) {
                    vmap3.vectorMap({
                        map: 'germany_en',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        onRegionClick: function (element, code, region) {
                            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();

                            alert(message);
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

            // France Map
            try {

                var vmap4 = $('#vmap4');
                if (vmap4[0]) {
                    vmap4.vectorMap({
                        map: 'france_fr',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        enableZoom: true,
                        showTooltip: true
                    });
                }

            } catch (error) {
                console.log(error);
            }

            // Russia Map
            try {
                var vmap5 = $('#vmap5');
                if (vmap5[0]) {
                    vmap5.vectorMap({
                        map: 'russia_en',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        hoverOpacity: 0.7,
                        selectedColor: '#999999',
                        enableZoom: true,
                        showTooltip: true,
                        scaleColors: ['#C8EEFF', '#006491'],
                        normalizeFunction: 'polynomial'
                    });
                }


            } catch (error) {
                console.log(error);
            }

            // Brazil Map
            try {

                var vmap6 = $('#vmap6');
                if (vmap6[0]) {
                    vmap6.vectorMap({
                        map: 'brazil_br',
                        color: '#007BFF',
                        borderColor: '#fff',
                        backgroundColor: '#fff',
                        onRegionClick: function (element, code, region) {
                            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                            alert(message);
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }
        })(jQuery);
        (function ($) {
            // Use Strict
            "use strict";
            try {
                var progressbarSimple = $('.js-progressbar-simple');
                progressbarSimple.each(function () {
                    var that = $(this);
                    var executed = false;
                    $(window).on('load', function () {

                        that.waypoint(function () {
                            if (!executed) {
                                executed = true;
                                /*progress bar*/
                                that.progressbar({
                                    update: function (current_percentage, $this) {
                                        $this.find('.js-value').html(current_percentage + '%');
                                    }
                                });
                            }
                        }, {
                            offset: 'bottom-in-view'
                        });

                    });
                });
            } catch (err) {
                console.log(err);
            }
        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            // Scroll Bar
            try {
                var jscr1 = $('.js-scrollbar1');
                if (jscr1[0]) {
                    const ps1 = new PerfectScrollbar('.js-scrollbar1');
                }

                var jscr2 = $('.js-scrollbar2');
                if (jscr2[0]) {
                    const ps2 = new PerfectScrollbar('.js-scrollbar2');

                }

            } catch (error) {
                console.log(error);
            }

        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            // Select 2
            try {

                $(".js-select2").each(function () {
                    $(this).select2({
                        minimumResultsForSearch: 20,
                        dropdownParent: $(this).next('.dropDownSelect2')
                    });
                });

            } catch (error) {
                console.log(error);
            }


        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            // Dropdown
            try {
                var menu = $('.js-item-menu');
                var sub_menu_is_showed = -1;

                for (var i = 0; i < menu.length; i++) {
                    $(menu[i]).on('click', function (e) {
                        e.preventDefault();
                        $('.js-right-sidebar').removeClass("show-sidebar");
                        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
                            $(this).toggleClass('show-dropdown');
                            sub_menu_is_showed = -1;
                        } else {
                            for (var i = 0; i < menu.length; i++) {
                                $(menu[i]).removeClass("show-dropdown");
                            }
                            $(this).toggleClass('show-dropdown');
                            sub_menu_is_showed = jQuery.inArray(this, menu);
                        }
                    });
                }
                $(".js-item-menu, .js-dropdown").click(function (event) {
                    event.stopPropagation();
                });

                $("body,html").on("click", function () {
                    for (var i = 0; i < menu.length; i++) {
                        menu[i].classList.remove("show-dropdown");
                    }
                    sub_menu_is_showed = -1;
                });

            } catch (error) {
                console.log(error);
            }

            var wW = $(window).width();
            // Right Sidebar
            var right_sidebar = $('.js-right-sidebar');
            var sidebar_btn = $('.js-sidebar-btn');

            sidebar_btn.on('click', function (e) {
                e.preventDefault();
                for (var i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("show-dropdown");
                }
                sub_menu_is_showed = -1;
                right_sidebar.toggleClass("show-sidebar");
            });

            $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
                event.stopPropagation();
            });

            $("body,html").on("click", function () {
                right_sidebar.removeClass("show-sidebar");

            });


            // Sublist Sidebar
            try {
                var arrow = $('.js-arrow');
                arrow.each(function () {
                    var that = $(this);
                    that.on('click', function (e) {
                        e.preventDefault();
                        that.find(".arrow").toggleClass("up");
                        that.toggleClass("open");
                        that.parent().find('.js-sub-list').slideToggle("250");
                    });
                });

            } catch (error) {
                console.log(error);
            }


            try {
                // Hamburger Menu
                $('.hamburger').on('click', function () {
                    $(this).toggleClass('is-active');
                    $('.navbar-mobile').slideToggle('500');
                });
                $('.navbar-mobile__list li.has-dropdown > a').on('click', function () {
                    var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
                    $(this).toggleClass('active');
                    $(dropdown).slideToggle('500');
                    return false;
                });
            } catch (error) {
                console.log(error);
            }
        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            // Load more
            try {
                var list_load = $('.js-list-load');
                if (list_load[0]) {
                    list_load.each(function () {
                        var that = $(this);
                        that.find('.js-load-item').hide();
                        var load_btn = that.find('.js-load-btn');
                        load_btn.on('click', function (e) {
                            $(this).text("Loading...").delay(1500).queue(function (next) {
                                $(this).hide();
                                that.find(".js-load-item").fadeToggle("slow", 'swing');
                            });
                            e.preventDefault();
                        });
                    })

                }
            } catch (error) {
                console.log(error);
            }

        })(jQuery);
        (function ($) {
            // USE STRICT
            "use strict";

            try {

                $('[data-toggle="tooltip"]').tooltip();

            } catch (error) {
                console.log(error);
            }

            // Chatbox
            try {
                var inbox_wrap = $('.js-inbox');
                var message = $('.au-message__item');
                message.each(function () {
                    var that = $(this);

                    that.on('click', function () {
                        $(this).parent().parent().parent().toggleClass('show-chat-box');
                    });
                });

            } catch (error) {
                console.log(error);
            }

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/home.blade.php ENDPATH**/ ?>