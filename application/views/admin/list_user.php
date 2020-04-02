<section class="content">
    <div class="container-fluid">
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            USER LIST
                            <small>Daftar - daftar user yang telah terdaftar</small>
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
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($users as $user) :
                                ?>
                                    <tr>
                                        <th><?= $nomor ?></th>
                                        <th><?= $user['nama'] ?></th>
                                        <th><?= $user['email'] ?></th>
                                        <th><?= $user['password'] ?></th>
                                        <th>
                                            <a href="<?= base_url() ?>index.php/admin/edit/<?= $user['id'] ?>" type="button" class="btn btn-success waves-effect">EDIT</a>
                                            <a href="<?= base_url() ?>index.php/admin/delete/<?= $user['id'] ?>" type="button" class="btn btn-danger waves-effect">DELETE</a>
                                        </th>
                                    </tr>
                                <?php
                                    $nomor++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
    </div>
</section>