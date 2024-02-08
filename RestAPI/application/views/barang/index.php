


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
                        <a href="<?php echo site_url("barang");?>" class="list-group-item list-group-item-action active"> Barang</a>
                        <a href="#" class="list-group-item list-group-item-action"> Settings</a>
                    </div>
                </nav>

                <!-- main content -->
                <main class="col-md-9 col-lg-10 ml-sm-auto px-md-4 py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">barang</li>
                        </ol>
                    </nav>
                    <h3>Dashboard Barang</h3>
                    
                    <div class="row">
                        <div class="col-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">Data Barang</h5>
                                
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
                                                    <th>ID barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Barang Satuan</th>
                                                    <th>Barang Harga Pokok</th>
                                                    <th>Barang Harga Jual</th>
                                                    <th>Barang Harga Jual Grosir</th>
                                                    <th>Stok Barang</th>
                                                    <th>Stok Minimal Barang</th>
                                                    <th>Tanggal Input</th>
                                                    <th>Tanggal Terakhir Input</th>
                                                </tr>
                                            </thead>
                                            <tbody v-for="(row, index) in aData" :key="row.barang_id">
                                                <tr>
                                                    <td>{{index + 1}}</td>
                                                    <td>{{row.barang_id}}</td>
                                                    <td>{{row.barang_nama}}</td>
                                                    <td>{{row.barang_satuan}}</td>
                                                    <td>{{row.barang_harpok}}</td>
                                                    <td>{{row.barang_harjul}}</td>
                                                    <td>{{row.barang_harjul_grosir}}</td>
                                                    <td>{{row._barang_stok}}</td>
                                                    <td>{{row.barang_min_stok}}</td>
                                                    <td>{{row.barang_tgl_input}}</td>
                                                    <td>{{row.barang_tgl_last_update}}</td>
                                                    <td>
                                                        <a href="#"  data-bs-target="#myModal" data-bs-toggle="modal" @click="showModal(row)" class="btn btn-sm btn-success">edit</a>
                                                        <a href="#" @click="hapusdata(row.barang_id)" class="btn btn-sm btn-danger">delete</a>
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
                                    <label>Id Barang</label>
                                    <input type="text" id="barang_id" v-model="oData.barang_id" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Nama Barang</label>
                                    <input type="text" id="barang_nama" v-model="oData.barang_nama" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class=col-md-6>
                                    <label> Satuan Barang</label>
                                    <input type="text" id="barang_satuan" v-model="oData.barang_satuan" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Barang Harga Pokok</label>
                                    <input type="text" id="barang_harpok" v-model="oData.barang_harpok" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Barang Harga Jual</label>
                                    <input type="text" id="barang_harjul" v-model="oData.barang_harjul" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Barang Harga Jual Grosir</label>
                                    <input type="text" id="barang_harjul_grosir" v-model="oData.barang_harjul_grosir" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Stok Barang</label>
                                    <input type="text" id="barang_stok" v-model="oData.barang_stok" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Stok Minimal Barang</label>
                                    <input type="text" id="barang_min_stok" v-model="oData.barang_min_stok" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Tanggal Input</label>
                                    <input type="datetime-local" id="barang_tgl_input" v-model="oData.barang_tgl_input" class="form-control" required>
                                </div>
                                <div class=col-md-6>
                                    <label>Tanggal Terakhir Input</label>
                                    <input type="datetime-local" id="barang_tgl_last_update" v-model="oData.barang_tgl_last_update" class="form-control" required>
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
                        barang_id: '',
                        barang_nama: '',
                        barang_satuan: '', 
                        barang_harpok: '',
                        barang_harjul: '', 
                        barang_harjul_grosir: '', 
                        barang_stok: '',
                        barang_stok_min: '',
                        barang_tgl_input: '',
                        barang_tgl_last_update: '',
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
                            this.oData.barang_id = '';
                            this.oData.barang_nama = '';
                            this.oData.barang_satuan = '';
                            this.oData.barang_harpok = '';
                            this.oData.barang_harjul = '';
                            this.oData.barang_harjul_grosir = '';
                            this.oData.barang_stok ='';
                            this.oData.barang_stok_min ='';
                            this.oData.barang_stok.min='';
                            this.oData.barang_tgl_input ='';
                            this.oData.barang_tgl_last_update ='';
                        }else{
                            this.oData.method = 'put';
                            this.oData.barang_id = oRow.barang_id;
                            this.oData.barang_nama = oRow.barang_nama;
                            this.oData.barang_satuan = oRow.barang_satuan;
                            this.oData.barang_harpok = oRow.barang_harpok;
                            this.oData.barang_harjul = oRow.barang_harjul;
                            this.oData.barang_harjul_grosir = oRow.barang_harjul_grosir;
                            this.oData.barang_stok = oRow.barang_stok;
                            this.oData.barang_stok_min = oRow.barang_stok_min;
                            this.oData.barang_tgl_input = oRow.barang_tgl_input;
                            this.oData.barang_tgl_last_update = oRow.barang_tgl_last_update;
                        }
                        $('#myModal').modal('show');
                    },
                    
                    showdata(){
                        this.apiUrl = "<?php echo base_url();?>index.php/api/";
                        //console.log(this.apiUrl);

                        axios.get(this.apiUrl+'barang')
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
                            axios.delete(this.apiUrl+'barang/'+idx)
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
                            axios.post(this.apiUrl+'barang', dt)
                                .then(response => {
                                    this.showdata();
                                    $('#myModal').modal('hide');
                                    ///console.log(response.data);
                                })
                                .catch(error=>{
                                    //console.log(error);
                                });
                       else{
                            axios.put(this.apiUrl+'barang', dt, {
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