<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/nice/img/favicon.png" rel="icon">
  <link href="assets/nice/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/nice/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/nice/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/nice/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo base_url();?>assets/nice/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/nice/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/nice/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/nice/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url();?>assets/nice/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
		  
			<div v-if="!ModulStat" class="col-xxl-12 col-md-12">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Modul IoT anda Sedang Offline/Tidak Aktif!!!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" fdprocessedid="rjidxc"></button>
				</div>
            </div>

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card revenue-card">
				<div class="card-body">
                  <h5 class="card-title">Temperature <span>| Now</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-thermometer-sun"></i>
                    </div>
                    <div class="ps-3">
					  <h6>{{lasttemp}}° C</h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card revenue-card">
				<div class="card-body">
                  <h5 class="card-title">Humidity <span>| Now</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-droplet-half"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{lasthum}}%</h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-3">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">LED <span>| Control</span></h5>
				  
				    <button type="button"  @click="turnlight('red')" class="btn btn-danger btn-lg">
						<i v-bind:class="{ 'bi bi-lightbulb-off-fill': red == 0, 'bi bi-lightbulb': red == 1 }"></i>
					</button>
					
					<button type="button"  @click="turnlight('yellow')" class="btn btn-warning btn-lg">
						<i v-bind:class="{ 'bi bi-lightbulb-off-fill': yellow == 0, 'bi bi-lightbulb': yellow == 1 }"></i>
					</button>
					
					<button type="button"  @click="turnlight('green')" class="btn btn-success btn-lg">
						<i v-bind:class="{ 'bi bi-lightbulb-off-fill': green == 0, 'bi bi-lightbulb': green == 1 }"></i>
					</button>
					
					
				</div>
              </div>

            </div><!-- End Customers Card -->
			
			
			<div class="col-xxl-4 col-xl-3">
				<div class="card info-card">
					<div class="card-body">
					  <h5 class="card-title">Relay <span>| Control</span></h5>
					  <button type="button"  @click="turnlight('relay1')" class="btn btn-primary btn-lg">
						<i v-bind:class="{ 'bi bi-toggle2-off': R1 == 0, 'bi bi-toggle2-on': R1 == 1 }"></i>
					  </button>
					  <button type="button"  @click="turnlight('relay2')" class="btn btn-primary btn-lg">
						<i v-bind:class="{ 'bi bi-toggle2-off': R2 == 0, 'bi bi-toggle2-on': R2 == 1 }"></i>
					  </button>
					  
					</div>
				  </div>																																								
				</div>																																								
            <!-- Reports -->
            <div class="col-6">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">DHT 11 <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <!--div id="reportsChart"></div-->
				  <apexchart type="area" :options="chartOptions" :series="chartSeries"></apexchart>

                  

                </div>

              </div>
            </div><!-- End Reports -->
			
			<!-- Reports -->
            <div class="col-6">
              <div class="card">
				<div class="card-body">
                  <h5 class="card-title">LDR Sensor <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <apexchartldr type="area" :options="chartOptionsLDR" :series="chartSeriesLDR"></apexchartldr>

                  

                </div>

              </div>
            </div><!-- End Reports -->
			
			
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatableaa">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
						<th scope="col">Timelog</th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Humidity</th>
                        <th scope="col">LDR</th>
                        
                      </tr>
                    </thead>
                    <tbody v-for="(ch, index) in aData.timelog">
					  <div>
						  <tr>
						   <td>{{index + 1}}</td>
							<td>{{ch}}</td>
							
							<td>{{aData.serries[0].data[index]}}</td>
							<td>{{aData.serries[1].data[index]}}</td>
							<td>{{aData.ldrserries[0].data[index]}}</td>
							
							
						  </tr>
					  </div>
                      
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            
          </div>
        </div><!-- End Left side columns -->

        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--script src="<?php echo base_url();?>assets/nice/vendor/apexcharts/apexcharts.min.js"></script-->
  <script src="<?php echo base_url();?>assets/nice/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/nice/vendor/chart.js/chart.umd.js"></script>
  <!--script src="<?php echo base_url();?>assets/nice/vendor/echarts/echarts.min.js"></script-->
  <script src="<?php echo base_url();?>assets/nice/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>assets/nice/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>assets/nice/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/nice/vendor/php-email-form/validate.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts@latest"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.css">

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/nice/js/main.js"></script>
  
  <script src="<?php echo base_url();?>assets/js/vue.js"></script>
  <script src="<?php echo base_url();?>assets/js/axios.min.js"></script>
  
  <script>
    var currentUrl = window.location.href.split('/');
	var baseUrl = currentUrl.slice(0, 4).join('/');
    Vue.component('apexchart', VueApexCharts);
    Vue.component('apexchartldr', VueApexCharts);
	
    new Vue({
      el: '#main',
      data: {
		uri: "",
		aData: [], ModulStat: true,
		lasttemp: "0",
		lasthum: "0",
		timelog: '',
        chartOptions: {
          series: [
            { name: 'temperature', data: [] },
            { name: 'humidity', data: [] }
          ],
          chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'time',
                          categories: []
						},
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm:ss'
                          },
                        }
        },
        chartSeries: [],
		chartOptionsLDR: {
          series: [
            { name: 'temperature', data: [] },
            { name: 'humidity', data: [] }
          ],
          chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'time',
                          categories: []
						},
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm:ss'
                          },
                        }
        },
        chartSeriesLDR: [],
		red: 0, yellow: 0, green: 0, R1: 0, R2: 0
      },
      mounted() {
		this.uri = baseUrl;
        this.startChartRefresh();
		console.log(baseUrl);
      },
      methods: {
        startChartRefresh() {
          setInterval(() => {
            this.fetchData();
          }, this.ModulStat ? 3000 : 10000); // Refresh setiap 3 detik
        },
        fetchData() {
          axios.get(this.uri+'/api/module/dht/ac0bfbdb9ce3')
            .then(response => {
			  this.timelog = response.data.last_timelog[0].timelog;
			  this.timeDiffInMinutes() > 1 ? this.ModulStat = false : this.ModulStat = true;
			  console.log(this.ModulStat);
			  
			  if(this.ModulStat){
				  this.lasttemp = response.data.last_temp[0].temp;
				  this.lasthum = response.data.last_hum[0].hum;
				  this.aData = response.data;
				  this.chartSeries = response.data.serries;
				  this.chartOptions.series = response.data.serries;
				  this.chartOptions.xaxis.categories = response.data.timelog;
				  
				  this.chartSeriesLDR = response.data.ldrserries;
				  this.chartOptionsLDR.series = response.data.ldrserries;
				  this.chartOptionsLDR.xaxis.categories = response.data.timelog;
				  
				  response.data.module[0].red == "1" ? this.red = 1 : this.red = 0;
				  this.yellow = response.data.module[0].yellow;
				  this.green = response.data.module[0].green;
				  this.R1 = response.data.module[0].relay1;
				  this.R2 = response.data.module[0].relay2;
			  }else{
				  this.lasttemp = 0;
				  this.lasthum = 0;
				  this.aData = [];
				  this.chartSeries = [];
				  this.chartOptions.series = [];
				  this.chartOptions.xaxis.categories = [];
				  
				  this.chartSeriesLDR = [];
				  this.chartOptionsLDR.series = [];
				  this.chartOptionsLDR.xaxis.categories = [];
				  
				  response.data.module[0].red == "1" ? this.red = 1 : this.red = 0;
				  this.red = 0;
				  this.yellow = 0;
				  this.green = 0;
				  this.R1 = 0;
				  this.R2 = 0;
			  }
			  
			  //console.log(this.timeDiffInMinutes());
            })
            .catch(error => {
              console.error(error);
            });
        },
		turnlight(btn){
			if(this.ModulStat){
				var i = 0;
				if(btn == 'red')         {this.red == 1 ? i = 0 : i = 1;}
				else if(btn == 'yellow') {this.yellow == 1 ? i = 0 : i = 1;}
				else if(btn == 'green')  {this.green == 1 ? i = 0 : i = 1;}
				else if(btn == 'relay1') {this.R1 == 1 ? i = 0 : i = 1;}
				else if(btn == 'relay2') {this.R2 == 1 ? i = 0 : i = 1;}
				
				var param = "p="+btn+"&val="+i;
				axios.get(this.uri+'/api/module/ubah/ac0bfbdb9ce3?'+param)
				.then(response => {console.log(response);this.chg(btn);})
				.catch(error=>{console.error(error);});
			}
		},
		
		chg(btn){
			var i = 0;
			if(btn == 'red')         {this.red == 1 ? this.red = 0 : this.read = 1;}
			else if(btn == 'yellow') {this.yellow == 1 ? this.yellow = 0 : this.yellow = 1;}
			else if(btn == 'green')  {this.green == 1 ? this.green = 0 : this.green = 1;}
			else if(btn == 'relay1') {this.R1 == 1 ? this.R1 = 0 : this.R1 = 1;}
			else if(btn == 'relay2') {this.R2 == 1 ? this.R2 = 0 : this.R2 = 1;}
		},
		
		timeDiffInMinutes() {
		  const currentTime = new Date(); // Waktu saat ini
		  const timeLog = new Date(this.timelog); // Waktu yang diberikan
		  //console.log(currentTime);
		  //console.log(timeLog);

		  // Hitung selisih waktu dalam menit
		  const timeDiff = Math.abs(Math.floor((currentTime - timeLog) / 1000 / 60));
		  
		  console.log(timeDiff);
		  return timeDiff;
		}
      }
    });
  </script>

</body>

</html>