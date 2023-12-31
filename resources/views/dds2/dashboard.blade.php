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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="{{route('dashboard')}}" class="nav-link active" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Home</a>
                    </li>
                    <li class="nav-item dropdown" role="presentation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-buildings"></i>
                            Supplier Mill
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('supplierMill')}}">All Suppliers</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillDeforestationRisk')}}">Deforestation Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillLegalPrfRisk')}}">Legal PRF Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillLegalLanduseRisk')}}">Legal Land Use Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillComplexSupplybaseRisk')}}">Complex Supply Base Risk</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{route('traceToPlots')}}" class="nav-link" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Trace to Plots</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{route('report')}}" class="nav-link" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Report</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>

                <!-- Vertical Pills Tabs -->
                <div class="d-flex align-items-start">
                    <div class="nav flex-row nav-pills me-3 col-xxl-6 col-md-6" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <!-- <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button> -->
                        
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-4 nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-facilities" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
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
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-4 nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-refinery" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Refinery suppliers <span></span></h5>

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
                        <div class="col-xxl-4 col-md-4 nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mills" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Mill suppliers <span></span></h5>

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
                        </div><!-- End Sales Card -->
                        
                    </div>
                    <div class="tab-content col-xxl-6 col-md-6" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-mills" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <!-- Revenue Card -->
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supply Base Region</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let millRegionArray = @json($millRegionArray);

                                                    // Sort millRegionArray based on count in descending order
                                                    millRegionArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = millRegionArray.slice(0, 2).map(item => item.mill_region);

                                                    let labels = millRegionArray.map(item => item.mill_region);
                                                    let dataCounts = millRegionArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'South East Asia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Latin America': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                <div class="col-xxl-4 col-md-4">
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
                                                    let topLabelsForLegend = millTypeArray.slice(0, 2).map(item => item.mill_type);

                                                    let labels = millTypeArray.map(item => item.mill_type);
                                                    let dataCounts = millTypeArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Manage by Plantation': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Independent Mill': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                <div class="col-xxl-4 col-md-4">
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
                                                    let topLabelsForLegend = millRspoArray.slice(0, 2).map(item => item.mill_rspo);

                                                    let labels = millRspoArray.map(item => item.mill_rspo);
                                                    let dataCounts = millRspoArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'No': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                        <div class="tab-pane fade" id="v-pills-refinery" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <!-- Revenue Card -->
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supply Base Country</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart4" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let refineryRegionArray = @json($refineryRegionArray);

                                                    // Sort refineryRegionArray based on count in descending order
                                                    refineryRegionArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = refineryRegionArray.slice(0, 2).map(item => item.refinery_country);

                                                    let labels = refineryRegionArray.map(item => item.refinery_country);
                                                    let dataCounts = refineryRegionArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Indonesia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Malaysia': 'rgb(43, 188, 144)', // Blue for Malaysia
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

                                                    new Chart(document.getElementById('doughnutChart4'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Refinery',
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
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplier Type</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart5" style="max-height: 400px;">
                                            </canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let refineryTypeArray = @json($refineryTypeArray);

                                                    // Sort refineryTypeArray based on count in descending order
                                                    refineryTypeArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = refineryTypeArray.slice(0, 2).map(item => item.refinery_type);

                                                    let labels = refineryTypeArray.map(item => item.refinery_type);
                                                    let dataCounts = refineryTypeArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Refinery': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'KCP': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                                                label: 'Refinery',
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
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">RSPO Certified</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart6" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let refineryRspoArray = @json($refineryRspoArray);

                                                    // Sort refineryRspoArray based on count in descending order
                                                    refineryRspoArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = refineryRspoArray.slice(0, 2).map(item => item.refinery_rspo);

                                                    let labels = refineryRspoArray.map(item => item.refinery_rspo);
                                                    let dataCounts = refineryRspoArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Unknown': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                                                label: 'Refinery',
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
                        <div class="tab-pane fade" id="v-pills-facilities" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <!-- Revenue Card -->
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supply Base Country</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart7" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let facilitiesRegionArray = @json($facilitiesRegionArray);

                                                    // Sort facilitiesRegionArray based on count in descending order
                                                    facilitiesRegionArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = facilitiesRegionArray.slice(0, 2).map(item => item.facilities_country);

                                                    let labels = facilitiesRegionArray.map(item => item.facilities_country);
                                                    let dataCounts = facilitiesRegionArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Malaysia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'United States': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                                                label: 'Facilities',
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
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Supplier Type</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart8" style="max-height: 400px;">
                                            </canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let facilitiesTypeArray = @json($facilitiesTypeArray);

                                                    // Sort facilitiesTypeArray based on count in descending order
                                                    facilitiesTypeArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = facilitiesTypeArray.slice(0, 2).map(item => item.facilities_type);

                                                    let labels = facilitiesTypeArray.map(item => item.facilities_type);
                                                    let dataCounts = facilitiesTypeArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Manufacture': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'Oleochemical': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                                                label: 'Facilities',
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
                                <div class="col-xxl-4 col-md-4">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <h5 class="card-title">RSPO Certified</h5>

                                            <!-- Doughnut Chart -->
                                            <canvas id="doughnutChart9" style="max-height: 400px;"></canvas>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    let facilitiesRspoArray = @json($facilitiesRspoArray);

                                                    // Sort facilitiesRspoArray based on count in descending order
                                                    facilitiesRspoArray.sort((a, b) => b.count - a.count);

                                                    // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                    let topLabelsForLegend = facilitiesRspoArray.slice(0, 2).map(item => item.facilities_rspo);

                                                    let labels = facilitiesRspoArray.map(item => item.facilities_rspo);
                                                    let dataCounts = facilitiesRspoArray.map(item => item.count);

                                                    // Define specific colors for Indonesia and Malaysia
                                                    let specificColors = {
                                                        'Unknown': 'rgb(47, 79, 79)', // Green for Indonesia
                                                        'MB': 'rgb(43, 188, 144)', // Blue for Malaysia
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

                                                    new Chart(document.getElementById('doughnutChart9'), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: labels,
                                                            datasets: [{
                                                                label: 'Facilities',
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
                    </div>
                </div>
                <!-- End Vertical Pills Tabs -->

            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="card">
            <div class="card-body" style="position: relative;">
                <div class="peta2" style="position: relative; z-index: 0;">
                    <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/7c0a6a90-84fa-11ee-82d8-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="800" onload="this.style.display='block';"></iframe>
                    <div class="peta1" style="position: absolute; top: 0; left: 0; width: 100%; height: 120px; background-color: white; z-index: 1;"></div>
                    
                    <!-- Div untuk menutupi sebagian peta bagian bawah -->
                    <div class="peta3" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40px; background-color: white; z-index: 2;"></div>
                </div>
            </div>
        </div>
        
        <!-- End Recent Activity -->

    </section>

</main>

<script src="{{ asset('asset/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('asset/NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
@endsection