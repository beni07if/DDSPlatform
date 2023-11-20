@extends('layout/appDashboard')

@section('content')
<main id="main" class="main">

    <!-- <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>https://dds-inovasiagriplot.irafina.net/dashboard
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

                        <div class="card">
                            <div class="card-body" style="position: relative;">
                                <div class="peta2" style="position: relative; z-index: 0;">
                                <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/a63695a6-81f2-11ee-9ba6-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="800" onload="this.style.display='block';"></iframe>
                                    <div class="peta1" style="position: absolute; top: 0; left: 0; width: 100%; height: 120px; background-color: white; z-index: 1;"></div>
                                    
                                    <!-- Div untuk menutupi sebagian peta bagian bawah -->
                                    <div class="peta3" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40px; background-color: white; z-index: 2;"></div>
                                </div>
                            </div>
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
                                                <th scope="col">Country</th>
                                                <th scope="col">Group</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">RSPO certified</th>
                                                <th scope="col">Detail</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no = 0; ?>
                                                @foreach($millss as $mill)
                                                <?php $no++ ?>
                                                <tr>
                                                    <th scope="row">{{$no}}</th>
                                                    <td>{{$mill->mill_name}}</td>
                                                    <td>{{$mill->mill_country}}</td>
                                                    <td>{{$mill->mill_company_group}}</td>
                                                    <td>{{$mill->mill_company_name}}</td>
                                                    <td>{{$mill->mill_rspo}}</td>
                                                    <!-- <td><span class="badge bg-info text-dark"><i class="bi bi-mesenger me-1"></i> <a href="{{route('traceToActualAgriplot', $mill->mill_eq_id)}}">Detail</a></span></td> -->
                                                    <td>
                                                    <form id="search-form" method="POST" action="{{ route('traceToActualAgriplot') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="text" id="mill_eq_id" value="{{$mill->mill_eq_id}}" class="form-control" name="mill_eq_id" list="mill_eq_id-list" placeholder="Search mill_eq_id/company name" hidden>
                                                        
                                                        <button type="submit" class="badge bg-info text-dark"><i class="bi bi-send me-1"></i>Detail</button>
                                                    </form>

                                                    </td>
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
                                                        <h5 class="card-title">Supplier Mill Country</h5>

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
                                                        <h5 class="card-title">RSPO Suppliers</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart2" style="max-height: 400px;">
                                                        </canvas>
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
                                                                    'IP; MB': 'rgb(46, 139, 87)',  // Blue for Colombia
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
                                                        <h5 class="card-title">Deforestation Risk</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart3" style="max-height: 400px;"></canvas>
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
                                                                    'Not yet verified': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'No Risk': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'Low Risk': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'High Risk': 'rgb(46, 139, 87)',  // Blue for Colombia
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
                                                        <h5 class="card-title">Legal Production Forest</h5>

                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart4" style="max-height: 400px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                let millLegalProductionForestArray = @json($millLegalProductionForestArray);

                                                                // Sort millLegalProductionForestArray based on count in descending order
                                                                millLegalProductionForestArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = millLegalProductionForestArray.slice(0, 4).map(item => item.mill_legal_production_forest);

                                                                let labels = millLegalProductionForestArray.map(item => item.mill_legal_production_forest);
                                                                let dataCounts = millLegalProductionForestArray.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'Not yet verified': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'Low Risk': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'High Risk': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'No Risk': 'rgb(46, 139, 87)',  // Blue for Colombia
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