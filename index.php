<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>SKYVISION</title>
        <link rel="icon" type="image/x-icon" href="assets/img/icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#home">
                <img src="assets/img/logo.png" alt="Logo" width="170" height="40" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#collections">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#statistic">Statistic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header id="home" class="halamanhero">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video class="d-block w-100" autoplay="true" loop="true" playsinline="" disablepictureinpicture="" disableremoteplayback="" muted="" pip="false" poster="assets/img/air.jpg">
                            <source src="assets/webm/air.webm" type="video/webm">
                            <source src="assets/mp4/air.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-md-block heroopacity">
                            <h5 class="judul">More about SKYVISION</h5>
                            <p class="description">SkyVision stands as a trusted, independent authority in the acquisition and disposition of premium aviation assets globally. We specialize in all major categories, including military jets, heavy commercial airliners (such as Airbus), and versatile rotary-wing helicopters.</p>
                        </div>                    
                    </div>
                </div>
            </div>
        </header>
    <section id="collections" class="halamanservis text-center bg-white">
        <div class="servicetitle">
            <img src="assets/img/collection.png" alt="collections" width="100">
            <h2 class="section-heading judul">Collections</h2>
            <p class="lead description mb-0">Explore our curated aviation collections.</p>
        </div>
        <?php include 'collections.php'; ?>
    </section>
        <section id="statistic" class="halamanstat text-center">
           <video class="halamanstat-video" autoplay loop muted playsinline>
               <source src="assets/mp4/su35edit.mp4" type="video/mp4">
           </video>
            <div class="abouttitle">
                <img src="assets/img/analysis.png" alt="car-repair" width="100" class="aboutimg">
                <h2 class="section-heading mb-4 judul">Statistic</h2>
                <p class="lead mb-0 description">This chart displays the number of units produced for each aircraft model featured on the page, including Airbus airliners, executive jets, and helicopters. Values are total production counts (per model) to help compare relative production scale across categories.</p>
            </div>
            <div class="container constat">
                <div class="row g-0 text-dark ">
                    <div class="col-lg-12 order-lg-1 chart-container">
                        <h2 class="text-dark">Chart</h2>
                        <div class="chart-wrapper d-flex justify-content-center">
                            <canvas id="myChart" style="width:100%;max-width:700px;height:360px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="halamanabout text-center bg-white">
            <div class="abouttitle">
                <img src="assets/img/information.png" alt="car-repair" width="100">
                <h2 class="section-heading mb-4 judul">About Us</h2>
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-1">
                            <h2>Our Media</h2>
                            <div class="social-icons">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">
                                    <a class="d-flex align-items-center" href="https://instagram.com/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                        <img src="assets/svg/Instagram_logo_2022.svg" alt="Instagram">
                                        <span class="media-name">SKYVISION</span>
                                    </a>
                                    </li>
                                    <li class="mb-2">
                                    <a class="d-flex align-items-center" href="https://x.com/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)">
                                        <img src="assets/svg/X_(formerly_Twitter)_logo_late_2025.svg" alt="X">
                                        <span class="media-name">SKYVISION</span>
                                    </a>
                                    </li>
                                    <li class="mb-2">
                                    <a class="d-flex align-items-center" href="https://reddit.com/user/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="Reddit">
                                        <img src="assets/svg/Reddit_Logo_Icon.svg" alt="Reddit">
                                        <span class="media-name">SHYVISION</span>
                                    </a>
                                    </li>
                                    <li class="mb-2">
                                    <a class="d-flex align-items-center" href="https://github.com/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                                        <img src="assets/svg/GitHub_Invertocat_Logo.svg" alt="GitHub">
                                        <span class="media-name">SKYVISION</span>
                                    </a>
                                    </li>
                                    <li class="mb-2">
                                    <a class="d-flex align-items-center" href="https://wa.me/6281234567890?text=Hello%20SkyVision" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                                        <img src="assets/svg/WhatsApp.svg" alt="WhatsApp">
                                        <span class="media-name">SKYVISION</span>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 showcase-text">
                            <h2>Our Office</h2>
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13418.781165563103!2d-97.44962530137255!3d32.773818865911615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e0cb124cc5f59%3A0x3e4673f24c7c844!2sLockheed%20Martin%20Corporation!5e0!3m2!1sen!2sid!4v1763694397586!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="halamancontact text-center text-white">
            <div class="abouttitle">
                <img src="assets/img/contact.png" class="contactimg" alt="car-repair" width="100">
                <h2 class="section-heading mb-4 judul">Contact Us</h2>
            </div>
            <div class="container">
                <form id="contactForm" class="text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6 description">
                            <label for="inputNama">Name</label>
                            <input type="text" class="form-control description" id="inputNama" name="name" required>
                        </div>
                        <div class="form-group col-md-6 description">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control description" id="inputEmail" name="email" required>
                        </div>
                    </div>
                    <div class="form-group description">
                        <label for="inputKeterangan">Description</label>
                        <textarea class="form-control description" id="inputKeterangan" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary description">Send</button>
                </form>
            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Your message has been sent</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Thank you for contacting SKYVISION. We will get back to you shortly.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center bg-white py-3 description">
            Copyright © 2025 SKYVISION | All rights reserved.
        </footer>
        <script>
           $(function(){
               $('#exampleModal').on('hidden.bs.modal', function () {
                   $('#inputNama, #inputEmail, #inputKeterangan').val('');
               });
           });
        </script>
        <script>
            $(function () {
                var $nav = $('.navbar');
                var navHeight = $nav.outerHeight() || 0;

                $('a.nav-link[href^="#"], .dropdown-item[href^="#"]').on('click', function (e) {
                    var target = $(this).attr('href');
                    if (target && target.startsWith('#') && $(target).length) {
                        e.preventDefault();
                        var offset = $(target).offset().top - navHeight + 1;
                        $('html, body').animate({ scrollTop: offset }, 500);
                        $('.navbar-collapse').collapse('hide');
                    }
                });

                var $sections = $('section[id], header[id]');
                $(window).on('scroll resize', function () {
                    var scrollPos = $(document).scrollTop() + navHeight + 10;
                    $sections.each(function () {
                        var $s = $(this);
                        var top = Math.floor($s.offset().top);
                        var bottom = top + $s.outerHeight();
                        var id = $s.attr('id');
                        if (scrollPos >= top && scrollPos < bottom) {
                            $('.navbar-nav .nav-link').removeClass('active');
                            $('.navbar-nav .nav-link[href="#' + id + '"]').addClass('active');
                        }
                    });
                });

                $(window).trigger('scroll');
            });
        </script>
        <script>
            let myChart;
            let elapsed = 0;
            let timer = null;

            // Fungsi mengambil data dari database via getdata.php
            function fetchData() {
                $.ajax({
                    url: 'getdata.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        const labels = response.map(item => item.model_name);
                        const values = response.map(item => item.units_produced);
                        updateChart(labels, values);
                    }
                });
            }

            function updateChart(labels, values) {
                const ctx = document.getElementById('myChart').getContext('2d');
                
                // Hitung warna grayscale otomatis
                const min = Math.min(...values);
                const max = Math.max(...values);
                const barColors = values.map(v => {
                    const t = (v - min) / (max - min || 1);
                    const gray = Math.round(255 * (1 - t));
                    return `rgba(${gray}, ${gray}, ${gray}, 0.9)`;
                });

                if (myChart) {
                    myChart.data.labels = labels;
                    myChart.data.datasets[0].data = values;
                    myChart.data.datasets[0].backgroundColor = barColors;
                    myChart.update('none'); // Update tanpa animasi lompat
                } else {
                    myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: labels,
                            datasets: [{
                                label: "Units",
                                data: values,
                                backgroundColor: barColors,
                                borderColor: 'rgba(0,0,0,1)',
                                borderWidth: 1.5,
                                borderRadius: 12,
                                barThickness: 28
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } }
                        }
                    });
                }
            }

            // Logika Timer Real-time
            function startRealtimeUpdate() {
                fetchData(); // Ambil data awal
                timer = setInterval(() => {
                    elapsed++;
                    // Contoh: Update data setiap 2 detik
                    if (elapsed % 2 === 0) {
                        fetchData();
                    }
                    // Jika ada elemen #timer-display, update teksnya
                    if(document.getElementById('timer-display')) {
                        document.getElementById('timer-display').textContent = elapsed;
                    }
                }, 1000);
            }

            $(document).ready(function() {
                startRealtimeUpdate();
            });
        </script>
        <div class="loader-wrapper">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <script>
            $(window).on("load", function() {
                $(".loader-wrapper").fadeOut("slow");
            });
            // fallback: ensure loader removed after 10s
            setTimeout(function(){ $(".loader-wrapper").fadeOut("slow"); });
        </script>
        <script>
            $(document).ready(function() {
                $('#contactForm').on('submit', function(e) {
                    e.preventDefault(); // Mencegah reload halaman

                    $.ajax({
                        url: 'contact.php',
                        type: 'POST',
                        data: $(this).serialize(), // Mengambil data form
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                // Tampilkan modal sukses dari Bootstrap
                                $('#exampleModal').modal('show');
                                // Bersihkan form
                                $('#contactForm')[0].reset();
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('Terjadi kesalahan teknis.');
                        }
                    });
                });
            });
        </script>
    </body>

</html>
