@extends('layout/appDashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mill - Agriplot stats</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Mill - Agriplot Stats</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">

          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Mill supplier <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-buildings"></i>
                    </div>
                    <div class="ps-3">
                      <h6>324</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Mills</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Actual supplier plots <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check2-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>324</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Plots</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Potential supplier plots <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1,324</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Plots</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-3">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Neigligible plot <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-eye-slash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>92.8%</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Plots</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          </div>

          <div class="card">
          <iframe style="display: none;" src="//mangomap.com/inovasi-digital293/maps/01e59a98-73d2-11ee-b7d2-027d7e0bb32b?preview=true" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="100%" height="600" onload="this.style.display='block';"></iframe>
          </div>

          <div class="card">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mill suppliers</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mill name</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                    <th scope="col">Actual supplier</th>
                    <th scope="col">Potential suppliers</th>
                    <th scope="col">Neigligible plot</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Melangking</td>
                    <td>Sandakan</td>
                    <td>Malaysia</td>
                    <td>8,503.02</td>
                    <td>8,503.02</td>
                    <td>98%</td>
                    <td>Details</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Adimulia Palmo Lestari</td>
                    <td>Batang Hari</td>
                    <td>Indonesia</td>
                    <td>8,503.02</td>
                    <td>12,110.61</td>
                    <td>98%</td>
                    <td>Details</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Tapung</td>
                    <td>Kampar</td>
                    <td>Indonesia</td>
                    <td>8,503.02</td>
                    <td>15,114.12</td>
                    <td>98%</td>
                    <td>Details</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Ban Dung Palm Oil Industries Sdn Bhd</td>
                    <td>Batu Pahat</td>
                    <td>Indonesia</td>
                    <td>8,503.02</td>
                    <td>4,656.12</td>
                    <td>98%</td>
                    <td>Details</td>
                  </tr>
                </tbody>
              </table>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
              <!-- End Table with hoverable rows -->

            </div>
        </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main>
  @endsection