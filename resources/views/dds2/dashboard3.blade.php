@extends('layout/appDashboard')

@section('content')
<main id="main" class="main">

    <!-- <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div> -->
    <!-- End Page Title -->

    <section class="section dashboard">
        
        <div class="card">
            <div class="card-head">
                <!-- <p class="card-title"></p> -->

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> <i class="bi bi-house"></i>Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mill-tab" data-bs-toggle="pill" data-bs-target="#pills-mill" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> <i class="bi bi-buildings"></i>Supplier mill</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-plot-tab" data-bs-toggle="pill" data-bs-target="#pills-plot" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> <i class="bi bi-map"></i>Trace to plot</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> <i class="bi bi-file-earmark"></i>Report</button>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Left side columns -->
        <!-- <div class="col-lg-6" id="pills-tab" role="tablist">
          <div class="row"> -->
        <div class="card">
            <div class="card-head">
                <!-- <p class="card-title"></p> -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <!-- <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> <i class="bi bi-house"></i>Home</button> -->
                        <div  class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Facilities <span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$facilities}}</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Facilities</span>

                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <!-- <button class="nav-link" id="pills-mill-tab" data-bs-toggle="pill" data-bs-target="#pills-mill" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> <i class="bi bi-buildings"></i>Supplier mill</button> -->
                        <div class="nav-link" id="pills-mill-tab" data-bs-toggle="pill" data-bs-target="#pills-mill" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Facilities <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$facilities}}</h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Facilities</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <!-- <button class="nav-link" id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> <i class="bi bi-file-earmark"></i>Report</button> -->
                        <div  class="nav-link" id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Mill supplier <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$mills}}</h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Mills</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item" role="presentation">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="raw">
                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplybase region</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millRegionArray = @json($millRegionArray);

                                                    // Sort millRegionArray based on count in descending order
                                                    millRegionArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millRegionArray.slice(0, 4).map(item => item.mill_country);

                                                    let labels = millRegionArray.map(item => item.mill_country);
                                                    let dataCounts = millRegionArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Indonesia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Malaysia': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut Chart -->
                                        </div>

                                    </div>
                                </div><!-- End Revenue Card -->

                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplier Type</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart2" style="max-height: 400px;">
                                            </canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millTypeArray = @json($millTypeArray);

                                                    // Sort millTypeArray based on count in descending order
                                                    millTypeArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millTypeArray.slice(0, 4).map(item => item.mill_type);

                                                    let labels = millTypeArray.map(item => item.mill_type);
                                                    let dataCounts = millTypeArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Manage by Plantation': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Independent Mill': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart2'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut CHart -->

                                        </div>

                                    </div>
                                </div><!-- End Revenue Card -->

                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">RSPO Certified</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millRspoArray = @json($millRspoArray);

                                                    // Sort millRspoArray based on count in descending order
                                                    millRspoArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millRspoArray.slice(0, 4).map(item => item.mill_rspo);

                                                    let labels = millRspoArray.map(item => item.mill_rspo);
                                                    let dataCounts = millRspoArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'No': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'IP': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'IP;MB': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart3'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut CHart -->

                                        </div>

                                    </div>
                            </div><!-- End Revenue Card -->
                            </div>
                        </div>
                    </li>    
                    
                    <li class="nav-item" role="presentation">
                        <div class="tab-pane fade show" id="pills-mill" role="tabpanel" aria-labelledby="mill-tab">
                            <div class="raw">
                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplybase region</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millRegionArray2 = @json($millRegionArray2);

                                                    // Sort millRegionArray2 based on count in descending order
                                                    millRegionArray2.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millRegionArray2.slice(0, 4).map(item => item.mill_country);

                                                    let labels = millRegionArray2.map(item => item.mill_country);
                                                    let dataCounts = millRegionArray2.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Indonesia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Malaysia': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart2'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut Chart -->
                                        </div>

                                    </div>
                                </div><!-- End Revenue Card -->

                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplier Type</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart2" style="max-height: 400px;">
                                            </canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millTypeArray = @json($millTypeArray);

                                                    // Sort millTypeArray based on count in descending order
                                                    millTypeArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millTypeArray.slice(0, 4).map(item => item.mill_type);

                                                    let labels = millTypeArray.map(item => item.mill_type);
                                                    let dataCounts = millTypeArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Manage by Plantation': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Independent Mill': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart2'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut CHart -->

                                        </div>

                                    </div>
                                </div><!-- End Revenue Card -->

                                <!-- Revenue Card -->
                                <div class="raw-xxl-12 raw-md-12">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">RSPO Certified</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millRspoArray = @json($millRspoArray);

                                                    // Sort millRspoArray based on count in descending order
                                                    millRspoArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millRspoArray.slice(0, 4).map(item => item.mill_rspo);

                                                    let labels = millRspoArray.map(item => item.mill_rspo);
                                                    let dataCounts = millRspoArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'No': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                        'IP': 'rgb(62, 250, 153)', // Blue for Thailand
                                                        'IP;MB': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                        // Add more specific colors for other countries as needed
                                                    };

                                                    // Fungsi untuk menghasilkan warna acak
                                                    function generateRandomColors(numColors) {
                                                        var colors = [];
                                                        for (var i = 0; i < numColors; i++) {
                                                            var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                            colors.push(randomColor);
                                                        }
                                                        return colors;
                                                    }

                                                    // Combine specific colors with random colors
                                                    let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                    new Chart(document.getElementById('doughnutChart3'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Mill',
                                                                data: dataCounts,
                                                                backgroundColor: combinedColors,
                                                                hoverOffset: 4
                                                            }]
                                                        },
                                                        options: {
                                                            plugins: {
                                                                legend: {
                                                                    display: true,
                                                                    position: 'bottom',
                                                                    labels: {
                                                                        generateLabels: function (chart) {
                                                                            return topLabelsForLegend.map(label => ({
                                                                                text: label,
                                                                                fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                lineWidth: 2,
                                                                                hidden: false
                                                                            }));
                                                                        }
                                                                    }
                                                                },
                                                                tooltip: {
                                                                    callbacks: {
                                                                        label: function (context) {
                                                                            let label = context.label || '';
                                                                            if (label) {
                                                                                label += ': ';
                                                                            }
                                                                            label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                            return label;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- End Doughnut CHart -->

                                        </div>

                                    </div>
                            </div><!-- End Revenue Card -->
                            </div>
                        </div>
                    </li>   
                    
                </ul>
                
                </div>

            </div>
        </div>

        <div class="row">
            <div class="tab-content pt-2" id="myTabContent">
                    <!-- Left side columns -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Facilities <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$facilities}}</h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Facilities</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Refinery supplier <span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$refineries}}</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Facilities</span>

                                    </div>
                                </div>
                            </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Sales Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Mill supplier <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$mills}}</h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Mills</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Supplybase region</h5>

                                    <!-- Doughnut Chart -->
                                    <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            let millRegionArray = @json($millRegionArray);

                                            // Sort millRegionArray based on count in descending order
                                            millRegionArray.sort((a, b) => b.count - a.count);

                                            // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                            let topLabelsForLegend = millRegionArray.slice(0, 4).map(item => item.mill_country);

                                            let labels = millRegionArray.map(item => item.mill_country);
                                            let dataCounts = millRegionArray.map(item => item.count);

                                            // Define specific colors for Indonesia and Malaysia
                                            let specificColors = {
                                                'Indonesia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                'Malaysia': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                // Add more specific colors for other countries as needed
                                            };

                                            // Fungsi untuk menghasilkan warna acak
                                            function generateRandomColors(numColors) {
                                                var colors = [];
                                                for (var i = 0; i < numColors; i++) {
                                                    var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                    colors.push(randomColor);
                                                }
                                                return colors;
                                            }

                                            // Combine specific colors with random colors
                                            let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                            new Chart(document.getElementById('doughnutChart'), {
                                                type: 'doughnut',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Mill',
                                                        data: dataCounts,
                                                        backgroundColor: combinedColors,
                                                        hoverOffset: 4
                                                    }]
                                                },
                                                options: {
                                                    plugins: {
                                                        legend: {
                                                            display: true,
                                                            position: 'bottom',
                                                            labels: {
                                                                generateLabels: function (chart) {
                                                                    return topLabelsForLegend.map(label => ({
                                                                        text: label,
                                                                        fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        lineWidth: 2,
                                                                        hidden: false
                                                                    }));
                                                                }
                                                            }
                                                        },
                                                        tooltip: {
                                                            callbacks: {
                                                                label: function (context) {
                                                                    let label = context.label || '';
                                                                    if (label) {
                                                                        label += ': ';
                                                                    }
                                                                    label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                    return label;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Doughnut Chart -->
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Supplier Type</h5>

                                    <!-- Doughnut Chart -->
                                    <canvas id="doughnutChart2" style="max-height: 400px;">
                                    </canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            let millTypeArray = @json($millTypeArray);

                                            // Sort millTypeArray based on count in descending order
                                            millTypeArray.sort((a, b) => b.count - a.count);

                                            // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                            let topLabelsForLegend = millTypeArray.slice(0, 4).map(item => item.mill_type);

                                            let labels = millTypeArray.map(item => item.mill_type);
                                            let dataCounts = millTypeArray.map(item => item.count);

                                            // Define specific colors for Indonesia and Malaysia
                                            let specificColors = {
                                                'Manage by Plantation': 'rgb(47, 79, 79)', // Green for Indonesia
                                                'Independent Mill': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                // Add more specific colors for other countries as needed
                                            };

                                            // Fungsi untuk menghasilkan warna acak
                                            function generateRandomColors(numColors) {
                                                var colors = [];
                                                for (var i = 0; i < numColors; i++) {
                                                    var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                    colors.push(randomColor);
                                                }
                                                return colors;
                                            }

                                            // Combine specific colors with random colors
                                            let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                            new Chart(document.getElementById('doughnutChart2'), {
                                                type: 'doughnut',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Mill',
                                                        data: dataCounts,
                                                        backgroundColor: combinedColors,
                                                        hoverOffset: 4
                                                    }]
                                                },
                                                options: {
                                                    plugins: {
                                                        legend: {
                                                            display: true,
                                                            position: 'bottom',
                                                            labels: {
                                                                generateLabels: function (chart) {
                                                                    return topLabelsForLegend.map(label => ({
                                                                        text: label,
                                                                        fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        lineWidth: 2,
                                                                        hidden: false
                                                                    }));
                                                                }
                                                            }
                                                        },
                                                        tooltip: {
                                                            callbacks: {
                                                                label: function (context) {
                                                                    let label = context.label || '';
                                                                    if (label) {
                                                                        label += ': ';
                                                                    }
                                                                    label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                    return label;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Doughnut CHart -->

                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-2">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">RSPO Certified</h5>

                                    <!-- Doughnut Chart -->
                                    <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            let millRspoArray = @json($millRspoArray);

                                            // Sort millRspoArray based on count in descending order
                                            millRspoArray.sort((a, b) => b.count - a.count);

                                            // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                            let topLabelsForLegend = millRspoArray.slice(0, 4).map(item => item.mill_rspo);

                                            let labels = millRspoArray.map(item => item.mill_rspo);
                                            let dataCounts = millRspoArray.map(item => item.count);

                                            // Define specific colors for Indonesia and Malaysia
                                            let specificColors = {
                                                'No': 'rgb(47, 79, 79)', // Green for Indonesia
                                                'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                'IP': 'rgb(62, 250, 153)', // Blue for Thailand
                                                'IP;MB': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                // Add more specific colors for other countries as needed
                                            };

                                            // Fungsi untuk menghasilkan warna acak
                                            function generateRandomColors(numColors) {
                                                var colors = [];
                                                for (var i = 0; i < numColors; i++) {
                                                    var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                    colors.push(randomColor);
                                                }
                                                return colors;
                                            }

                                            // Combine specific colors with random colors
                                            let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                            new Chart(document.getElementById('doughnutChart3'), {
                                                type: 'doughnut',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Mill',
                                                        data: dataCounts,
                                                        backgroundColor: combinedColors,
                                                        hoverOffset: 4
                                                    }]
                                                },
                                                options: {
                                                    plugins: {
                                                        legend: {
                                                            display: true,
                                                            position: 'bottom',
                                                            labels: {
                                                                generateLabels: function (chart) {
                                                                    return topLabelsForLegend.map(label => ({
                                                                        text: label,
                                                                        fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                        lineWidth: 2,
                                                                        hidden: false
                                                                    }));
                                                                }
                                                            }
                                                        },
                                                        tooltip: {
                                                            callbacks: {
                                                                label: function (context) {
                                                                    let label = context.label || '';
                                                                    if (label) {
                                                                        label += ': ';
                                                                    }
                                                                    label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                    return label;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Doughnut CHart -->

                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-2 col-md-2" hidden>
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">RSPO Certified</h5>

                                    <!-- Doughnut Chart -->
                                    <canvas id="doughnutChart4" style="max-height: 400px;"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.getElementById('doughnutChart4'), {
                                                type: 'doughnut',
                                                data: {
                                                    labels: ['Yes', 'No'],
                                                    datasets: [{
                                                        label: 'Mill',
                                                        data: [20, 70],
                                                        backgroundColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(255, 205, 86)'
                                                        ],
                                                        hoverOffset: 4
                                                    }]
                                                },
                                                options: {
                                                    plugins: {
                                                        tooltip: {
                                                            callbacks: {
                                                                label: function(context) {
                                                                    let label = context.label || '';
                                                                    if (label) {
                                                                        label += ': ';
                                                                    }
                                                                    label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                    return label;
                                                                }
                                                            }
                                                        }
                                                    },
                                                    plugins: {
                                                        legend: {
                                                            position: 'bottom' // Atur posisi legenda ke bagian bawah
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Doughnut CHart -->

                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                    </div>

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Maps sedang di siapkan.. <span></span></h5>
                            <!-- <h5 class="card-title">Recent Activity <span>| Today</span></h5> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4826443219645!2d106.79983007462315!3d-6.5867697643880545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5900337fbe1%3A0x41efae520676fac5!2sEarthqualizer%20Foundation!5e0!3m2!1sen!2sus!4v1699127994718!5m2!1sen!2sus" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <!-- <img src="{{ asset('asset/NiceAdmin/assets/img/maps1.png') }}" alt="" class="img-fluid"> -->
                            <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/f18f459a-81f0-11ee-9ba6-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="600" onload="this.style.display='block';"></iframe>
                        </div>
                                        
                    </div><!-- End Recent Activity -->

                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="tab-pane fade show" id="pills-mill" role="tabpanel" aria-labelledby="mill-tab">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Mill supplier.. <span></span></h5>
                            <!-- <h5 class="card-title">Recent Activity <span>| Today</span></h5> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4826443219645!2d106.79983007462315!3d-6.5867697643880545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5900337fbe1%3A0x41efae520676fac5!2sEarthqualizer%20Foundation!5e0!3m2!1sen!2sus!4v1699127994718!5m2!1sen!2sus" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <!-- <img src="{{ asset('asset/NiceAdmin/assets/img/maps1.png') }}" alt="" class="img-fluid"> -->
                            <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/a63695a6-81f2-11ee-9ba6-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="600" onload="this.style.display='block';"></iframe>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Default Tabs</h5> -->

                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mill supplier</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Metric</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Table with stripped rows -->
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mill name</th>
                                                <th scope="col">Region</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Group</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">RSPO certified</th>
                                                <th scope="col">Detail</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($millss as $key => $mill)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{$mill->mill_name}}</td>
                                                    <td>{{$mill->region}}</td>
                                                    <td>{{$mill->country}}</td>
                                                    <td>{{$mill->group_name}}</td>
                                                    <td>{{$mill->company_name}}</td>
                                                    <td>{{$mill->rspo_certified}}</td>
                                                    <td><a href="{{route('agriplotByMill', $mill->mill_name)}}">Details</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Table with stripped rows -->
                                        <div class="row">
                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier mill region</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart5" style="max-height: 400px;"></canvas>
                                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let millRegionArray2 = @json($millRegionArray2);

                                                                // Sort millRegionArray2 based on count in descending order
                                                                millRegionArray2.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = millRegionArray2.slice(0, 4).map(item => item.mill_country);

                                                                let labels = millRegionArray2.map(item => item.mill_country);
                                                                let dataCounts = millRegionArray2.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'Indonesia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'Malaysia': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                                    // Add more specific colors for other countries as needed
                                                                };

                                                                // Fungsi untuk menghasilkan warna acak
                                                                function generateRandomColors(numColors) {
                                                                    var colors = [];
                                                                    for (var i = 0; i < numColors; i++) {
                                                                        var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                                        colors.push(randomColor);
                                                                    }
                                                                    return colors;
                                                                }

                                                                // Combine specific colors with random colors
                                                                let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                                new Chart(document.getElementById('doughnutChart5'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: labels,
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: dataCounts,
                                                                            backgroundColor: combinedColors,
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom',
                                                                                labels: {
                                                                                    generateLabels: function (chart) {
                                                                                        return topLabelsForLegend.map(label => ({
                                                                                            text: label,
                                                                                            fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            lineWidth: 2,
                                                                                            hidden: false
                                                                                        }));
                                                                                    }
                                                                                }
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function (context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>

                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Type</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart6" style="max-height: 400px;">
                                                        </canvas>
                                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let millTypeArray2 = @json($millTypeArray2);

                                                                // Sort millTypeArray2 based on count in descending order
                                                                millTypeArray2.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = millTypeArray2.slice(0, 4).map(item => item.mill_type);

                                                                let labels = millTypeArray2.map(item => item.mill_type);
                                                                let dataCounts = millTypeArray2.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'Manage by Plantation': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'Independent Mill': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'Thailand': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'Colombia': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                                    // Add more specific colors for other countries as needed
                                                                };

                                                                // Fungsi untuk menghasilkan warna acak
                                                                function generateRandomColors(numColors) {
                                                                    var colors = [];
                                                                    for (var i = 0; i < numColors; i++) {
                                                                        var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                                        colors.push(randomColor);
                                                                    }
                                                                    return colors;
                                                                }

                                                                // Combine specific colors with random colors
                                                                let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                                new Chart(document.getElementById('doughnutChart6'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: labels,
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: dataCounts,
                                                                            backgroundColor: combinedColors,
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom',
                                                                                labels: {
                                                                                    generateLabels: function (chart) {
                                                                                        return topLabelsForLegend.map(label => ({
                                                                                            text: label,
                                                                                            fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            lineWidth: 2,
                                                                                            hidden: false
                                                                                        }));
                                                                                    }
                                                                                }
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function (context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>

                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">RSPO Certified</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart7" style="max-height: 400px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let millRspoArray2 = @json($millRspoArray2);

                                                                // Sort millRspoArray2 based on count in descending order
                                                                millRspoArray2.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = millRspoArray2.slice(0, 4).map(item => item.mill_rspo);

                                                                let labels = millRspoArray2.map(item => item.mill_rspo);
                                                                let dataCounts = millRspoArray2.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'No': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'IP': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'IP;MB': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                                    // Add more specific colors for other countries as needed
                                                                };

                                                                // Fungsi untuk menghasilkan warna acak
                                                                function generateRandomColors(numColors) {
                                                                    var colors = [];
                                                                    for (var i = 0; i < numColors; i++) {
                                                                        var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                                        colors.push(randomColor);
                                                                    }
                                                                    return colors;
                                                                }

                                                                // Combine specific colors with random colors
                                                                let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                                new Chart(document.getElementById('doughnutChart7'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: labels,
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: dataCounts,
                                                                            backgroundColor: combinedColors,
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom',
                                                                                labels: {
                                                                                    generateLabels: function (chart) {
                                                                                        return topLabelsForLegend.map(label => ({
                                                                                            text: label,
                                                                                            fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            lineWidth: 2,
                                                                                            hidden: false
                                                                                        }));
                                                                                    }
                                                                                }
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function (context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Risk</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart8" style="max-height: 400px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let millDeforestationRiskArray = @json($millDeforestationRiskArray);

                                                                // Sort millDeforestationRiskArray based on count in descending order
                                                                millDeforestationRiskArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = millDeforestationRiskArray.slice(0, 4).map(item => item.mill_deforestation_risk);

                                                                let labels = millDeforestationRiskArray.map(item => item.mill_deforestation_risk);
                                                                let dataCounts = millDeforestationRiskArray.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    '': 'rgb(192, 192, 192)', // Green for Indonesia
                                                                    'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'IP': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'IP;MB': 'rgb(46, 139, 87)',  // Blue for Colombia
                                                                    // Add more specific colors for other countries as needed
                                                                };

                                                                // Fungsi untuk menghasilkan warna acak
                                                                function generateRandomColors(numColors) {
                                                                    var colors = [];
                                                                    for (var i = 0; i < numColors; i++) {
                                                                        var randomColor = 'rgb(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ')';
                                                                        colors.push(randomColor);
                                                                    }
                                                                    return colors;
                                                                }

                                                                // Combine specific colors with random colors
                                                                let combinedColors = labels.map(label => specificColors[label] || generateRandomColors(1)[0]);

                                                                new Chart(document.getElementById('doughnutChart8'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: labels,
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: dataCounts,
                                                                            backgroundColor: combinedColors,
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom',
                                                                                labels: {
                                                                                    generateLabels: function (chart) {
                                                                                        return topLabelsForLegend.map(label => ({
                                                                                            text: label,
                                                                                            fillStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            strokeStyle: specificColors[label] || generateRandomColors(1)[0],
                                                                                            lineWidth: 2,
                                                                                            hidden: false
                                                                                        }));
                                                                                    }
                                                                                }
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function (context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->
                                        </div>
                                        <!-- End Sales Card -->
                                    </div>
                                </div><!-- End Default Tabs -->

                            </div>
                        </div>
                    
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->

                <!-- Right side columns -->
                <div class="tab-pane fade show" id="pills-plot" role="tabpanel" aria-labelledby="plot-tab">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Plot supplier.. <span></span></h5>
                            <!-- <h5 class="card-title">Recent Activity <span>| Today</span></h5> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4826443219645!2d106.79983007462315!3d-6.5867697643880545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5900337fbe1%3A0x41efae520676fac5!2sEarthqualizer%20Foundation!5e0!3m2!1sen!2sus!4v1699127994718!5m2!1sen!2sus" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <!-- <img src="{{ asset('asset/NiceAdmin/assets/img/maps1.png') }}" alt="" class="img-fluid"> -->
                            <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/15f1d00a-81d4-11ee-834c-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="600" onload="this.style.display='block';"></iframe>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Default Tabs</h5> -->

                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home" aria-selected="true">Mill supplier</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile" aria-selected="false">Metric</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Table with stripped rows -->
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Supplier name</th>
                                                <th scope="col">Region</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Group company</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">RSPO Certified</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($agriplots as $key => $agriplot)
                                            <tr>
                                                <td scope="row">{{ $key + 1 }}</td>
                                                <td>{{$agriplot->estate}}</td>
                                                <td>{{$agriplot->region}}</td>
                                                <td>{{$agriplot->country}}</td>
                                                <td>{{$agriplot->group}}</td>
                                                <td>{{$agriplot->type_of_supplier}}</td>
                                                <td>{{$agriplot->rspo_certified}}</td>
                                                <td>Details</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- Table with stripped rows -->
                                        <div class="row">
                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplybase region</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart9" style="max-height: 400px;"></canvas>
                                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                                        <script>
                                                        document.addEventListener("DOMContentLoaded", () => {
                                                            new Chart(document.getElementById('doughnutChart9'), {
                                                                type: 'doughnut',
                                                                data: {
                                                                    labels: ['Indonesia', 'PNG', 'Malaysia'],
                                                                    datasets: [{
                                                                        label: 'Mill',
                                                                        data: [500, 200, 300],
                                                                        backgroundColor: [
                                                                            'rgb(255, 99, 132)',
                                                                            'rgb(54, 162, 235)',
                                                                            'rgb(255, 205, 86)'
                                                                        ],
                                                                        hoverOffset: 4
                                                                    }]
                                                                },
                                                                options: {
                                                                    plugins: {
                                                                        legend: {
                                                                            display: true,
                                                                            position: 'bottom'
                                                                        },
                                                                        tooltip: {
                                                                            callbacks: {
                                                                                label: function(context) {
                                                                                    let label = context.label || '';
                                                                                    if (label) {
                                                                                        label += ': ';
                                                                                    }
                                                                                    label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                    return label;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            });
                                                        });
                                                        </script>

                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Type</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart10" style="max-height: 400px;">
                                                        </canvas>
                                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                new Chart(document.getElementById('doughnutChart10'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: ['Manage by plantation', 'Independent mill'],
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: [5345, 300],
                                                                            backgroundColor: [
                                                                                'rgb(255, 99, 132)',
                                                                                'rgb(255, 205, 86)'
                                                                            ],
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom'
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function(context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">RSPO Certified</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart11" style="max-height: 400px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                new Chart(document.getElementById('doughnutChart11'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: ['Yes', 'No'],
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: [20, 70],
                                                                            backgroundColor: [
                                                                                'rgb(255, 99, 132)',
                                                                                'rgb(255, 205, 86)'
                                                                            ],
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom'
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function(context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->

                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Risk</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart12" style="max-height: 400px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                new Chart(document.getElementById('doughnutChart12'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: ['Yes', 'No'],
                                                                        datasets: [{
                                                                            label: 'Mill',
                                                                            data: [20, 70],
                                                                            backgroundColor: [
                                                                                'rgb(255, 99, 132)',
                                                                                'rgb(255, 205, 86)'
                                                                            ],
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        plugins: {
                                                                            legend: {
                                                                                display: true,
                                                                                position: 'bottom'
                                                                            },
                                                                            tooltip: {
                                                                                callbacks: {
                                                                                    label: function(context) {
                                                                                        let label = context.label || '';
                                                                                        if (label) {
                                                                                            label += ': ';
                                                                                        }
                                                                                        label += ((context.parsed * 100) / context.dataset.data.reduce((a, b) => a + b, 0)).toFixed(2) + '%';
                                                                                        return label;
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->

                                                    </div>

                                                </div>
                                            </div><!-- End Revenue Card -->
                                        </div>
                                        <!-- End Sales Card -->
                                    </div>
                                </div><!-- End Default Tabs -->

                            </div>
                        </div>
                    
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->

                <!-- Right side columns -->
                <div class="tab-pane fade show" id="pills-plot-insight" role="tabpanel" aria-labelledby="home-tab">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Maps sedang di siapkan.. <span></span></h5>
                            <!-- <h5 class="card-title">Recent Activity <span>| Today</span></h5> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4826443219645!2d106.79983007462315!3d-6.5867697643880545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5900337fbe1%3A0x41efae520676fac5!2sEarthqualizer%20Foundation!5e0!3m2!1sen!2sus!4v1699127994718!5m2!1sen!2sus" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <img src="{{ asset('asset/NiceAdmin/assets/img/map.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Mill list</h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->
            </div>
        </div>

    </section>

</main>

<script src="{{ asset('asset/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('asset/NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
@endsection