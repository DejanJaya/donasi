<div class="content-wrapper">
    <!-- Page Heading -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Barang Keluar</a></li>
                        <li class="breadcrumb-item active">Data Barang Keluar</li> -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?= $this->session->flashdata('message'); ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-bottom-primary">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col">
                                <!-- <h4 class="h5 align-middle m-0 font-weight-bold">
                                    
                                </h4> -->
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr class="text-center">
                                <th>NO</th>
                                <th>TANGGAL DONASI</th>
                                <th>EMAIL</th>
                                <th>NOMINAL</th>
                                <th>STATUS DONASI</th>
                                <th>DIPROSES OLEH</th>
                            </tr>

                            <?php
                            $no = 1;
                            foreach ($donasi as $adm) :
                            ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $adm->tgl_donasi ?></td>
                                    <td><?php echo $adm->email_donatur ?></td>
                                    <td><?= "Rp " . number_format($adm->nominal, 0, '', '.'); ?>
                                    </td>
                                    <td><?php echo $adm->status_donasi ?></td>
                                    <td><?php echo $adm->nama ?></td>
                                </tr>

                            <?php endforeach; ?>

                        </table>
                    </div>
                </div>
            </div>
    </section>


</div>