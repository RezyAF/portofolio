


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Layout Admin</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/layout.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Unpam TI</a>
                <div class="collpase navbar-collapse align-items-center justify-content-md-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div id="app" class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky">
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas"></i> Dashboard</a>
                        <a href="<?php echo site_url("user");?>" class="list-group-item list-group-item-action"> Users</a>
                        <a href="<?php echo site_url("matakuliah");?>" class="list-group-item list-group-item-action active"> Matakuliah</a>
                        <a href="#" class="list-group-item list-group-item-action"> Settings</a>
                    </div>
                </nav>

                <!-- main content -->
                <main class="col-md-9 col-lg-10 ml-sm-auto px-md-4 py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Matakuliah</li>
                        </ol>
                    </nav>
                    <h3>Dashboard Matakuliah</h3>
                    
                    <div class="row">
                        <div class="col-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">Data Matakuliah</h5>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button  data-bs-target="#myModal" data-bs-toggle="modal" @click="showModal(null)" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Matakuliah</th>
                                                    <th>Nama Matakuliah</th>
                                                    <th>Prodi</th>
                                                    <th>Semester</th>
                                                    <th>SKS</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody v-for="(row, index) in aData" :key="row.kode_mk">
                                                <tr>
                                                    <td>{{index + 1}}</td>
                                                    <td>{{row.kode_mk}}</td>
                                                    <td>{{row.nama_matakuliah}}</td>
                                                    <td>{{row.prodi}}</td>
                                                    <td>{{row.semester}}</td>
                                                    <td>{{row.sks}}</td>
                                                    <td>
                                                        <a href="#"  data-bs-target="#myModal" data-bs-toggle="modal" @click="showModal(row)" class="btn btn-sm btn-success">edit</a>
                                                        <a href="#" @click="hapusdata(row.kode_mk)" class="btn btn-sm btn-danger">delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                    <form class="need-validation">
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title" id="exampleModalLabel">{{oData.method == 'post' ? 'tambah' : 'edit'}} Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class=col-md-6>
                                    <label>Kode matakuliah</label>
                                    <input type="text" id="kode_mk" v-model="oData.kode_mk" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Nama matakuliah</label>
                                    <input type="text" id="nama_matakuliah" v-model="oData.nama_matakuliah" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class=col-md-6>
                                    <label>Program Studi</label>
                                    <input type="text" id="prodi" v-model="oData.prodi" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>SKS</label>
                                    <input type="text" id="sks" v-model="oData.sks" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class=col-md-12>
                                    <label>Semester</label>
                                    <input type="text" id="semester" v-model="oData.semester" class="form-control" required>
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

        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
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
                        kode_mk: '',
                        nama_matakuliah: '', 
                        sks: '',
                        semester: '', 
                        prodi: '', 
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
                            this.oData.kode_mk = '';
                            this.oData.nama_matakuliah = '';
                            this.oData.sks = '';
                            this.oData.semester = '';
                            this.oData.proodi = '';
                        }else{
                            this.oData.method = 'put';
                            this.oData.nama_matakuliah = oRow.nama_matakuliah;
                            this.oData.kode_mk = oRow.kode_mk;
                            this.oData.sks = oRow.sks;
                            this.oData.semester = oRow.semester;
                            this.oData.prodi = oRow.prodi;
                        }
                        $('#myModal').modal('show');
                    },
                    
                    showdata(){
                        this.apiUrl = "<?php echo base_url();?>index.php/api/";
                        //console.log(this.apiUrl);

                        axios.get(this.apiUrl+'matakuliah')
                            .then(response => {
                                this.aData = response.data;
                                //console.log(response.data);
                            })
                            .catch(error=>{
                                console.log(error);
                            });
                    },

                    hapusdata(idx){
                        var konfirmasi = confirm("Apakah yakin data akan dihapus?");

                        if(konfirmasi)
                            axios.delete(this.apiUrl+'matakuliah/'+idx)
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
                            axios.post(this.apiUrl+'matakuliah', dt)
                                .then(response => {
                                    this.showdata();
                                    $('#myModal').modal('hide');
                                    ///console.log(response.data);
                                })
                                .catch(error=>{
                                    //console.log(error);
                                });
                       else{
                            axios.put(this.apiUrl+'matakuliah', dt, {
                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                                })
                                .then(response => {
                                    this.showdata();
                                    $('#myModal').modal('hide');
                                    //console.log(response);
                                })
                                .catch(error=>{
                                    //console.log(error);
                                });
                        }

                    }
                }

            })
        </script>

                
    </body>
</html>