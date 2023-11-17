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
                        <a href="{{route('traceToPlots')}}" class="nav-link" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Trace to Plots</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{route('report')}}" class="nav-link active" type="button" role="tab"  aria-selected="false"><i class="bi bi-buildings"></i>Report</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="row">
            <div class="tab-content pt-2" id="myTabContent">

                <!-- Right side columns -->
                <div class="row">

                    <div class="col-lg-6">
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reporting Form</h5>
                                <p class="text-muted">Input the information below using your supply base data. Our system will provide auto-reporting to support due diligence compliance</p>

                                <h5 class="card-title">Shipment Information</h5>
                                <!-- General Form Elements -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-4 col-form-label">Shipment Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-4 col-form-label">Shipment Vessel No</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-4 col-form-label">Origin Port</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-4 col-form-label">Destination Port</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">HS Code</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select HS Code</option>
                                                @foreach($hscodes as $hscode)
                                                    <option value="{{$hscode->hs_code_panjiva}}">{{$hscode->hs_code_panjiva}} - {{$hscode->product_panjiva}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                        
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-4 col-form-label">Volume</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Mill</label>
                                        <div class="col-sm-8">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Mill</option>
                                            @foreach($millss as $mill)
                                                <option value="{{$mill->mill_eq_id}}">{{$mill->mill_name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div> -->
                                    <div class="row mb-3" hidden>
                                        <label for="inputNumber" class="col-sm-4 col-form-label">Upload Mills</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <h5 class="card-title">Select Mills</h5>
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Table with stripped rows -->
                                        <table class="table datatable">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ID RSPO</th>
                                                <th scope="col">ID EQ</th>
                                                <th scope="col">Mill Name</th>
                                                <th scope="col">Company Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($millss as $key => $mill)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="millCheckbox[]" value="{{$mill->mill_eq_id}}">
                                                    </td>
                                                    <td>{{$mill->mill_eq_id}}</td>
                                                    <td>{{$mill->mill_uml_id}}</td>
                                                    <td>{{$mill->mill_name}}</td>
                                                    <td>{{$mill->mill_company_name}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </form><!-- End General Form Elements -->

                            </div>
                        </div><!-- End Recent Activity -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Report Sample</h5>

                                <iframe src="{{asset('asset/NiceAdmin/assets/pdf/sample-report.pdf')}}" width="100%" height="600px"></iframe>

                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card-body">
                            <h5 class="card-title">Report Historical</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID EQ</th>
                                    <th scope="col">ID UML</th>
                                    <th scope="col">Mill Name</th>
                                    <th scope="col">Mill Company</th>
                                    <th scope="col">Dewnload</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reports as $key => $report)
                                    <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{$report->mill_eq_id}}</td>
                                    <td>{{$report->mill_eq_uml}}</td>
                                    <td>{{$report->mill_name}}</td>
                                    <td>{{$report->mill_company_name}}</td>
                                    <td><span class="badge bg-info text-dark"><i class="bi bi-file-earmark-text me-1"></i> <a href="#">Download Report</a></span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                            </div>
                        </div><!-- End Recent Activity -->
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>
@endsection