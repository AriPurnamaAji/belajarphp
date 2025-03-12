<?php
include('layouts/header.php');
?>
<title>Data Peserta</title>

<div class="mx-auto py-3">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <a href="index.php" class="text-decoration-none text-blue"> Form input </a> |
                    <a href="Lis_data.php" class="text-decoration-none text-warning"><u>Data Peserta</u> </a>
                </h5>
            </div>
            <div class="card-body">
                <div class="mx-auto col-md-8">
                    <div class="text-center h5">Data Peserta</div>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <tr class="table-info text-center text-uppercase">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                            </tr>
                            <?php
                            if (file_exists('db/data.json')) {
                                $current_data = file_get_contents('db/data.json');
                                $array_data = json_decode($current_data, true);

                                foreach ($array_data as $listdata) {
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $listdata['No']; ?>
                                        </td>
                                        <td>
                                            <?php echo $listdata['Nama']; ?>
                                        </td>
                                        <td>
                                            <?php echo $listdata['Pekerjaan']; ?>
                                        </td>
                                        <td>
                                            <?php echo $listdata['Alamat']; ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('layouts/footer.php');
?>