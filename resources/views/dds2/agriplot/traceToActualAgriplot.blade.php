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
                        <a href="{{route('dashboard')}}" class="nav-link" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Home</a>
                    </li>
                    <li class="nav-item dropdown" role="presentation">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-buildings"></i>
                            Supplier Mill
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('supplierMill')}}">All Supplier</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillDeforestationRisk')}}">Deforestation Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillLegalPrfRisk')}}">Legal PRF Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillLegalLanduseRisk')}}">Legal Landuse Risk</a><div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('supplierMillComplexSupplybaseRisk')}}">Complex Supplybase Risk</a>
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

        <div class="row">
            <div class="tab-content pt-2" id="myTabContent">

                <!-- Right side columns -->
                <div class="">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <!-- <h5 class="card-title">Mill supplier.. <span></span></h5> -->
                            <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/15f1d00a-81d4-11ee-834c-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="600" onload="this.style.display='block';"></iframe>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mill Suppliers</h5>

                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Actual Supplier</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Potential Supplier</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Table with stripped rows -->
                                        <div class="row">
                                            <!-- Revenue Card -->
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier mill region</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let ttps2 = @json($ttps2);

                                                                // Sort ttps2 based on count in descending order
                                                                ttps2.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = ttps2.slice(0, 4).map(item => item.agriplot_deforestation_risk);

                                                                let labels = ttps2.map(item => item.agriplot_deforestation_risk);
                                                                let dataCounts = ttps2.map(item => item.count);

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
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">RSPO Certified</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
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
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Risk</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart4" style="max-height: 400px;"></canvas>
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

                                                                new Chart(document.getElementById('doughnutChart4'), {
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
                                        <h5 class="card-title">Traceability to plantation actual</h5>

                                        <!-- Table with stripped rows -->
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ID TTP</th>
                                                <th scope="col">Mill</th>
                                                <th scope="col">Trace to</th>
                                                <th scope="col">Agriplot</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; ?>
                                                @foreach($ttps0 as $ttp)
                                                <?php $no++ ?>
                                                <tr>
                                                    <th scope="row">{{$no}}</th>
                                                    <td>{{ $ttp->ttp_eq_id }}</td>
                                                    <td>{{ $ttp->mill_name }}</td>
                                                    <td>to</td>
                                                    <td>{{ $ttp->agriplot_estate_name }}</td>
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
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">RSPO Certified</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
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
                                            <div class="col-xxl-3 col-md-3">
                                                <div class="card info-card revenue-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Supplier Risk</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart4" style="max-height: 400px;"></canvas>
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

                                                                new Chart(document.getElementById('doughnutChart4'), {
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
                                        
                                        <!-- Table with stripped rows -->
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mill</th>
                                                <th scope="col">Trace to</th>
                                                <th scope="col">Agriplot ID</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; ?>
                                                @foreach($ttps0 as $ttp)
                                                @foreach($agriplots as $agriplot)
                                                @foreach($agriplot as $item)
                                                <?php $no++ ?>
                                                <tr>
                                                    <th scope="row">{{$no}}</th>
                                                    <td>{{ $ttp->mill_name }}</td>
                                                    <td>to</td>
                                                    <td>{{ $item->agriplot_eq_id }}</td>
                                                </tr>
                                                @endforeach
                                                @endforeach
                                                @endforeach
                                            </tbody>

                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                </div><!-- End Default Tabs -->

                            </div>
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