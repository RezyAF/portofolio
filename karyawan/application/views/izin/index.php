
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <title>Karyawan</title>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <link rel="icon" href="<?php echo base_url();?>assets/img/admin.png" type="image/x-icon"/>

        <!-- Fonts and icons -->
        <script src="<?php echo base_url();?>assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/atlantis.min.css">

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">

        <style>
            a {
                text-decoration: none;
            }
        </style>

        <script src="https://kit.fontawesome.com/43b9c926b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="<?php echo site_url();?>/karyawan" class="logo">
					<!-- <img src="../assets/img/mts.png" alt="navbar brand" class="navbar-brand" width="40"> -->
					<b class="text-white">Universitas Pamulang</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
				<!-- 	<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<!-- <li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> -->
						
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo base_url();?>assets/img/unpam.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo base_url();?>assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Rezy AF</h4>
												<p class="text-muted">ss</p>
												
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">Ganti Password</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

        <div id="app" class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url();?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Rezy AF
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									
									<li>
										<a href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">
											<span class="link-collapse">Pengaturan Akun</span>
										</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">
											<span class="link-collapse">Ganti Password</span>
										</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item ">
							<a href="<?php echo site_url();?>/karyawan" class="collapsed">
								<i class="fas fa-home"></i><p>Karyawan</p>
							</a>							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU KARYAWAN</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="<?php echo site_url();?>/karyawan">
								<i class="fa-solid fa-user"></i>
								<p>Karyawan</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="<?php echo site_url();?>/jabatan">
								<i class="fa-solid fa-ranking-star"></i>
								<p>Jabatan</p>
							</a>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="<?php echo site_url();?>/divisi">
								<i class="fa-solid fa-handshake"></i>
								<p>Divisi</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU ABSENSI</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="<?php echo site_url();?>/absensi">
								<i class="fa-solid fa-file-lines"></i>
								<p>Absensi</p>
							</a>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="<?php echo site_url();?>/izin">
								<i class="fa-solid fa-file-lines"></i>
								<p>Izin</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="<?php echo site_url();?>/lembur">
								<i class="fa-solid fa-file-lines"></i>
								<p>Lembur</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU PENGGAJIAN</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fa-solid fa-money-check-dollar"></i>
								<p>Slip Gaji</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fa-solid fa-money-check"></i>
								<p>Cetak Slip Gaji</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU LAPORAN</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fa-solid fa-file-export"></i>
								<p>Cetak Laporan</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU ADMIN</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fa-solid fa-users"></i>
								<p>Pengguna</p>
							</a>
						</li>

						
						
						<li class="nav-item active mt-3">
							<a href="logout.php" class="collapsed">
								<i class="fas fa-arrow-alt-circle-left"></i>
								<p>Logout</p>
							</a>							
						</li>
	
					<!-- 
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-primary btn-block"><span class="btn-label"> <i class="fas fa-arrow-alt-circle-left"></i> </span> Logout</a> 
						</li> -->
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

                <!-- main content -->
                <main class="col-md-9 col-lg-10 ml-sm-auto px-md-4 py-4">
                    <div class="panel-header bg-primary-gradient">
                        <div class="page-inner py-5">
                            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                                <div>
                                    <br>
                                    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                    <a class="text-white op-5 mb-2"><i class="fas fa-home"></i> <b class="text-warning"></b></a>
                                    <a href="<?php echo site_url();?>/izin" class="text-white op-5 mb-2">| Izin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="page-inner mt--5">
                        <div class="row">
                            <div class="col-12 col-xs-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <h5 class="card-header">Data Hadir</h5>
                                    <div class="card-body">
                                        <!--tombol modal-->
                                        <button data-bs-target="myModal" data-bs-toggle="modal"
                                            @click="showModal(null)"
                                            class="btn btn-outline-primary">Tambah Data Hadir</button>
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Izin</th>
                                                        <th>Tanggal</th>
                                                        <th>Jam</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody v-for="(row, index) in aData" :key="row.id_izin">
                                                    <tr>
                                                        <td>{{index + 1}}</td>
                                                        <td>{{row.nama_karyawan}}</td>
                                                        <td>{{row.nama_izin}}</td>
                                                        <td>{{row.tanggal}}</td>
                                                        <td>{{row.jam}}</td>
                                                        <td>{{row.keterangan}}</td>
                                                        <td>{{row.status}}</td>
                                                        
                                                        <td>
                                                            <a href="#" data-bs-target="myModal" data-bs-toggle="modal"
                                                @click="showModal(row)" class="btn btn-sm btn-success">Show</a>
                                                            <a href="#" @click="hapusdata(row.id_izin)" class="btn btn-sm btn-danger">delete</a>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <footer class="pt-5 d-flex justify-content-between">
                        <span>Copyright @ 2023 <a href="informatika.unpam.ac.id">Teknik Informatika Unpam</a></span>
                    </footer>
                </main>

            </div>

            <!-- -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                    <form class="need-validation">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class=col-md-12>
                                    <label>Nama Karyawan</label>
                                    <input type="text" id="nama_karyawan" v-model="oData.nama_karyawan" class="form-control" required>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class=col-md-12>
                                    <label>Izin</label>
                                    <input type="text" id="nama_izin" v-model="oData.nama_izin" class="form-control" required   >
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=col-md-12>
                                    <label>Tanggal</label>
                                    <input type="date" id="tanggal" v-model="oData.tanggal" class="form-control" required   >
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=col-md-12>
                                    <label>Jam</label>
                                    <input type="time" id="jam" v-model="oData.jam" class="form-control" required>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=col-md-12>
                                    <label>Keterangan</label>
                                    <input type="text" id="keterangan" v-model="oData.keterangan" class="form-control" required>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=col-md-12>
                                    <label>status</label>
                                    <select id="status" class="form-select form-select" aria-label=".form-select-lg example" v-model="oData.status" required>
                                        <option value="Dipersetujui">Disejutui</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </div>
                                
                            </div>
                            
                            
                        </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" @click="simpandata" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
		    </div>
        </div>
        
        <script src="<?php echo base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vue.js"></script>
        <script src="<?php echo base_url();?>assets/js/axios.min.js"></script>

        <script>
            var v = new Vue({
                el: "#app",
                data:{
                    apiUrl: '',
                    aData: [],
                    pilihData: {},
                    oData: {
                        id_izin: '',
                        nama_karyawan: '',
                        tanggal: '',
                        nama_izin: '',
                        jam: '',
                        keterangan: '',
                        status: '',
                        method: '',
                    }
                },
                created(){
                    this.showdata();
                },
                methods:{
                    showModal(oRow){
                        if(oRow == null) {
                            this.oData.method = 'post';
                            this.oData.nama_karyawan = '';
                            this.oData.tanggal = '';
                            this.oData.nama_izin = '';
                            this.oData.jam = '';
                            this.oData.keterangan = '';
                            this.oData.status = '';
                        }else{
                            this.oData.method = 'put';
                            this.oData.id_izin = oRow.id_izin;
                            this.oData.nama_karyawan = oRow.nama_karyawan;
                            this.oData.tanggal = oRow.tanggal;
                            this.oData.nama_izin = oRow.nama_izin;
                            this.oData.jam = oRow.jam;
                            this.oData.keterangan = oRow.keterangan;
                            this.oData.status = oRow.status;
                        }
                        $('#myModal').modal('show');
                    },
                    
                    showdata(){
                        this.apiUrl = "<?php echo base_url();?>index.php/api/";
                        //console.log(this.apiUrl);

                        axios.get(this.apiUrl+'izin')
                            .then(response => {
                                this.aData = response.data;
                                //console.log(response.data);
                            })
                            .catch(error=>{
                                console.log(error);
                            });
                    },

                    hapusdata(id){
                        var konfirmasi = confirm("Apakah yakin data akan dihapus?");

                        if(konfirmasi)
                            axios.delete(this.apiUrl+'izin/'+id)
                                .then(response => {
                                    //console.log("Data Berhasil dihapus");
                                    this.showdata();
                                })
                                .catch(error=>{
                                    console.log(error);
                                });
                        else console.log("data gak jadi dihapus bro!");
                    },

                    oFormData(obj){
                        var formData = new FormData();
                        for(var key in obj){
                            formData.append(key, obj[key]);
                        }
                        return formData;
                    },

                    oUriFormData(obj) {
                        var formData = new URLSearchParams();
                        for (var key in obj) {
                            formData.append(key, obj[key]);
                        }
                        return formData.toString();
                    },

                    simpandata(){
                        var dt = this.oUriFormData(this.oData);
                        console.log(this.oData);
                        if(this.oData.method == 'post')
                            axios.post(this.apiUrl+'izin', dt)
                                .then(response => {
                                    this.showdata();
                                    $('#myModal').modal('hide');
                                    console.log(response.data);
                                })
                                .catch(error=>{
                                    console.log(error);
                                });
                       else{
                            axios.put(this.apiUrl+'izin', dt, {
                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                })
                                .then(response => {
                                    this.showdata();
                                    $('#myModal').modal('hide');
                                    console.log(response);
                                })
                                .catch(error=>{
                                    console.log(error);
                                });
                        }

                    }
                }

            })
        </script>

        
    </body>
</html>