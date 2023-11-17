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

        <div class="row">
            <div class="tab-content pt-2" id="myTabContent">

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

                            <select id="country">
                                <!-- Pilihan country diisi dari server-side atau hard-coded -->
                            </select>
                            <select id="province">
                                <!-- Opsi province akan diisi melalui AJAX setelah country dipilih -->
                            </select>
                            <select id="district">
                                <!-- Opsi district akan diisi melalui AJAX setelah province dipilih -->
                            </select>
                            <select id="mill">
                                <!-- Opsi mill akan diisi melalui AJAX setelah district dipilih -->
                            </select>

                            <script>
                                // Contoh menggunakan jQuery untuk AJAX
                                $('#country').change(function() {
                                    var country = $(this).val();
                                    $.get('/get-provinces/' + country, function(data) {
                                        // Isi dropdown province dengan opsi yang diterima dari server
                                    });
                                });

                                // Lakukan hal yang sama untuk setiap perubahan pilihan dropdown berikutnya
                                // Misalnya, untuk province, district, dan mill
                            </script>


                            <!-- End Table with stripped rows -->

                        </div>
                    
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->
            </div>
        </div>

        <div id="map" style="height: 400px;">
            <div id="basemapSelector">
                <label class="basemap-option">
                    <input type="radio" name="basemap" value="osm" checked> OpenStreetMap
                </label>
                <label class="basemap-option">
                    <input type="radio" name="basemap" value="satellite"> Satellite
                </label>
                <label class="basemap-option">
                    <input type="radio" name="basemap" value="topo"> Topographic
                </label>
            </div>
        </div>

    </section>

</main>

<script src="{{ asset('asset/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('asset/NiceAdmin/assets/vendor/chart.js/chart.umd.js') }}"></script>


<script>
    $(document).ready(function() {
        // group 
        $(".chatbox form .group").submit(function(e) {
            e.preventDefault();
            sendMessage2();
        });

        function sendMessage2() {
            var group_name = $("#group_name").val();
            var message = "<div class='response-group user'>" + group_name + "</div>";
            $("#response-group").append(message);

            $.ajax({
                url: "/eq-subsidiary-en",
                type: "POST",
                dataType: "json",
                data: {
                    message: group_name,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response2) {
                    var message = "<div class='response-group bot'>" + response2.message + "</div>";
                    $("#response-group").append(message);
                }
            });

            $("#group_name").val("");
        }
        // end group


        // subsidiary 
        $(".chatbox form").submit(function(e) {
            e.preventDefault();
            sendMessage();
        });

        function sendMessage() {
            var subsidiary = $("#subsidiary").val();
            var message = "<div class='response user'>" + subsidiary + "</div>";
            $("#response").append(message);

            $.ajax({
                url: "/eq-subsidiary-en",
                type: "POST",
                dataType: "json",
                data: {
                    message: subsidiary,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    var message = "<div class='response bot'>" + response.message + "</div>";
                    $("#response").append(message);
                }
            });

            $("#subsidiary").val("");
        }
        // end 

        // nav 
        // Ambil semua link navigasi
        const navLinks = document.querySelectorAll('.nav-link');

        // Tambahkan event listener pada setiap link navigasi
        navLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault(); // Hentikan aksi default link navigasi

                // Ambil id tab pane yang sesuai dengan link navigasi yang ditekan
                const tabId = link.getAttribute('href');

                // Hapus class active dari semua link navigasi
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                // Tambahkan class active pada link navigasi yang ditekan
                link.classList.add('active');

                // Sembunyikan semua tab pane
                const tabPanes = document.querySelectorAll('.tab.pane');
                tabPanes.forEach(pane => {
                    pane.style.display = 'none';
                });

                // Tampilkan tab pane yang sesuai dengan link navigasi yang ditekan
                const tabPane = document.querySelector(tabId);
                tabPane.style.display = 'block';
            });
        });

        var nav = document.querySelector('nav');
        nav.classList.add('active');
        // end nav 
    });

    // end nav 
</script>

@section('mapsLeaflet')
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    const coordinates = <?php echo json_encode($coordinates); ?>;

    const map = L.map('map').setView([coordinates[0].latitude, coordinates[0].longitude], 13);

    // Pilihan basemap
    const basemaps = {
        'Esri Satellite': L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri'
        }),
        'OpenStreetMap': L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18,
        }),
        'Esri WorldStreetMap': L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri'
        }),
        // Tambahkan jenis basemap lainnya sesuai kebutuhan
    };

    // Pilih basemap default
    basemaps['Esri Satellite'].addTo(map);

    // Tambahkan kontrol layer untuk mengubah basemap
    L.control.layers(basemaps).addTo(map);

    const markers = [];

    coordinates.forEach((coord, index) => {
    const marker = L.marker([coord.latitude, coord.longitude]).addTo(map);
    const formattedSize = Math.round(coord.sizebyeq).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    @if(auth()->check() && in_array(auth()->user()->user_level, ['Premium']))
        if (coord.principal_activities === "Palm Oil Mill") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Mill Name: ${coord.facilities}<br>Mill Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Refinery") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Refinery Name: ${coord.facilities}<br>Refinery Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Manufacturer") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Manufacturer Name: ${coord.facilities}<br>Manufacturer Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Oil Palm Plantation & Mill") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Mill Name: ${coord.facilities}<br>Mill Capacity: ${coord.capacity}<br>Estate Name: ${coord.estate}<br>Planted: ${formattedSize} hectare<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Estate Name: ${coord.estate}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
    @else
        // Add conditions for non-Premium users if needed
        // if (coord.principal_activities === "Non-Premium Activity") {
        //     marker.bindPopup(`Non-Premium Activity: ${coord.principal_activities}<br>Company Name: ${coord.subsidiary}<br>Estate Name: ${coord.estate}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        // }
        if (coord.principal_activities === "Palm Oil Mill") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Mill Name: ${coord.facilities}<br>Mill Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Refinery") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Refinery Name: ${coord.facilities}<br>Refinery Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Manufacturer") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Manufacturer Name: ${coord.facilities}<br>Manufacturer Capacity: ${coord.capacity}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else if (coord.principal_activities === "Oil Palm Plantation & Mill") {
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Mill Name: ${coord.facilities}<br>Mill Capacity: ${coord.capacity}<br>Estate Name: ${coord.estate}<br>Planted: ${formattedSize} hectare<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
        }else
            marker.bindPopup(`<b>${coord.principal_activities}</b><br>Company Name: ${coord.subsidiary}<br>Estate Name: ${coord.estate}<br>Location: ${coord.regency} District, ${coord.province} Province, ${coord.country_operation}<br>Latitude: ${coord.latitude}<br>Longitude: ${coord.longitude}<br>`);
    @endif

    markers.push(marker);
});

    const group = new L.featureGroup(markers);
    map.fitBounds(group.getBounds());
</script>
@endsection