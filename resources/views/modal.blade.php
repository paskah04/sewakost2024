<div class="modal fade" id="modalUserLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Masuk Ke Sewa Kost</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Saya ingin masuk sebagai</p>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" data-toggle="modal" data-target="#modalLoginCustomer" class="pointer"><i class="fa fa-user"></i> Pencari Kost</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="pointer" href="{{route("login")}}"><i class="fa fa-user"></i> Pemilik Kost</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modalLoginCustomer" id="modalLoginCustomer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <h4 class="card-title">Form Login Pencari Kost</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="text" class="form-control" id="psw" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-navbar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Katgeori</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" class="form-control" name="categories_name"
                                       placeholder="Silahkan masukkan nama kategori">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="categories_description" class="form-control"
                                       placeholder="Silahkan masukkan deskripsi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
