<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT USER
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form action="<?= base_url() ?>index.php/admin/edit" method="post">
                            <input type="hidden" name="id" value="<?php if ($user) print($user['id']) ?>">
                            <label for="email_addres">EMAIL</label>
                            <div class="form-group">
                                <div class="form-line disabled">
                                    <input type="text" class="form-control" placeholder="<?php if ($user) print($user['email']) ?>" disabled />
                                </div>
                            </div>
                            <label for="password">NAMA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your password" value="<?php if ($user) print($user['nama']) ?>">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>