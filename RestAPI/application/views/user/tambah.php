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
                        <a href="#" class="list-group-item list-group-item-action active"> Users</a>
                        <a href="#" class="list-group-item list-group-item-action"> Settings</a>
                    </div>
                </nav>

                <!-- main content -->
                <main class="col-md-9 col-lg-10 ml-sm-auto px-md-4 py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </nav>
                    <h3>Tambah Users</h3>
                                        
                    <div class="row">
                        <div class="col-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">Tambah Data Pengguna</h5>
                                <form class="need-validation" @submit.prevent="tambahdata">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="username">Username</label>
                                                <input type="text" v-model="NewData.username" class="form-control" id="id" required>
                                                <div class="invalid-feedback">
                                                    Valid Username is Requred
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" v-model="NewData.nama" class="form-control" id="nama" required>
                                                <div class="invalid-feedback">
                                                    Valid Nama is Requred
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="email">Email</label>
                                                <input type="email" v-model="NewData.email" class="form-control" id="email" required>
                                                <div class="invalid-feedback">
                                                    Valid email is Requred
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="alamat">alamat</label>
                                                <input type="text" v-model="NewData.alamat" class="form-control" id="alamat" required>
                                                <div class="invalid-feedback">
                                                    Valid alamat is Requred
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="email">Password</label>
                                                <input type="password" v-model="NewData.password" class="form-control" id="password" required>
                                                <div class="invalid-feedback">
                                                    Valid Password is Requred
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="tipeuser">Tipe User</label>
                                                <input type="text" v-model="NewData.tipeuser" class="form-control" id="tipe User">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="card-footer">
                                        <a href="<?php echo site_url('user');?>" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <footer class="pt-5 d-flex justify-content-between">
                        <span>Copyright @ 2023 <a href="informatika.unpam.ac.id">Teknik Informatika Unpam</a></span>
                    </footer>
                </main>

            </div>

            <!-- Vertically centered modal -->
            <div id="#exampleModal" class="modal-dialog modal-dialog-centered">
                    ...
                    </div>

        </div>
        
        <script src="<?php echo base_url();?>assets/js/vue.js"></script>
        <script src="<?php echo base_url();?>assets/js/axios.min.js"></script>


        <script>
            var v = new Vue({
                el: "#app",
                data:{
                    apiUrl: '',
                    aData: [],
                    NewData: {
                        nama: '', 
                        username: '',
                        email: '', 
                        password: '', 
                        alamat: '', 
                        tipeuser: ''
                    }
                },
                created(){
                    this.showdata();
                },
                methods:{
                    showdata(){
                        this.apiUrl = "http://localhost:8080/restapi/index.php/api/";
                        console.log(this.apiUrl);

                        axios.get(this.apiUrl+'user')
                            .then(response => {
                                this.aData = response.data;
                                console.log(response.data);
                            })
                            .catch(error=>{
                                console.log(error);
                            });
                    },

                    oFormData(obj){
                        var formData = new FormData();
                        for(var key in obj){
                            formData.append(key, obj[key]);
                        }
                        return formData;
                    },

                    tambahdata(){
                        alert("proses");
                        var dt = this.oFormData(this.NewData);
                        console.log(dt);
                        axios.post(this.apiUrl+'user', dt)
                                .then(response => {
                                    console.log(response.data);
                                    window.location.href = "../user";
                                })
                                .catch(error=>{
                                    console.log(error);
                                });
                       
                    }
                }

            })
        </script>

                
    </body>
</html>