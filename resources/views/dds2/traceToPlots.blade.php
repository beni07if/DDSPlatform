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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-buildings"></i>
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
                        <a href="{{route('traceToPlots')}}" class="nav-link active" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Trace to Plots</a>
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
                            <h5 class="card-title">Agriplot supplier.. <span></span></h5>
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
                                                <th scope="col">ID Agriplot</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Group Company</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">RSPO Certified</th>
                                                <th scope="col">Detail</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($agriplots as $key => $agriplot)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{$agriplot->agriplot_eq_id}}</td>
                                                    <td>{{$agriplot->agriplot_country}}</td>
                                                    <td>{{$agriplot->agriplot_company_group}}</td>
                                                    <td>{{$agriplot->agriplot_type}}</td>
                                                    <td>{{$agriplot->agriplot_rspo}}</td>
                                                    <td><a href="">Details</a></td>
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
                                                                let agriplotCountryArray = @json($agriplotCountryArray);

                                                                // Sort agriplotCountryArray based on count in descending order
                                                                agriplotCountryArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = agriplotCountryArray.slice(0, 4).map(item => item.agriplot_country);

                                                                let labels = agriplotCountryArray.map(item => item.agriplot_country);
                                                                let dataCounts = agriplotCountryArray.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'Malaysia': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'Indonesia': 'rgb(43, 188, 144)', // Blue for Malaysia
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
                                                                let agriplotTypeArray = @json($agriplotTypeArray);

                                                                // Sort agriplotTypeArray based on count in descending order
                                                                agriplotTypeArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = agriplotTypeArray.slice(0, 4).map(item => item.agriplot_type);

                                                                let labels = agriplotTypeArray.map(item => item.agriplot_type);
                                                                let dataCounts = agriplotTypeArray.map(item => item.count);

                                                                // Define specific colors for Indonesia and Malaysia
                                                                let specificColors = {
                                                                    'Company': 'rgb(47, 79, 79)', // Green for Indonesia
                                                                    'POD': 'rgb(43, 188, 144)', // Blue for Malaysia
                                                                    'Smallholder': 'rgb(62, 250, 153)', // Blue for Thailand
                                                                    'Outgrower': 'rgb(46, 139, 87)',  // Blue for Colombia
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
                                                                let agriplotRspoArray = @json($agriplotRspoArray);

                                                                // Sort agriplotRspoArray based on count in descending order
                                                                agriplotRspoArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = agriplotRspoArray.slice(0, 4).map(item => item.agriplot_rspo);

                                                                let labels = agriplotRspoArray.map(item => item.agriplot_rspo);
                                                                let dataCounts = agriplotRspoArray.map(item => item.count);

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
                                                                let agriplotDeforestationRiskArray = @json($agriplotDeforestationRiskArray);

                                                                // Sort agriplotDeforestationRiskArray based on count in descending order
                                                                agriplotDeforestationRiskArray.sort((a, b) => b.count - a.count);

                                                                // Ambil 4 label teratas untuk ditampilkan di bawah grafik
                                                                let topLabelsForLegend = agriplotDeforestationRiskArray.slice(0, 4).map(item => item.agriplot_deforestation_risk);

                                                                let labels = agriplotDeforestationRiskArray.map(item => item.agriplot_deforestation_risk);
                                                                let dataCounts = agriplotDeforestationRiskArray.map(item => item.count);

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