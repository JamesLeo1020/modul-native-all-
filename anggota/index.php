<?php
include '../koneksi.php';

$sql = "SELECT nama FROM anggota";

$res = mysqli_query($kon,$sql);
$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
    $pinjam[] = $data;
}
?>

<?php
include '../aset/header.php';
?>
<style>
    thead{
        background-color: turquoise;
        color: white;
    }
    tbody{
        background-color: darkslategrey;
        color: white;
    }
</style>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card bg-dark">
                <div class="card-header">
                    <h2 class="card-title text-white"><i class="fas fa-edit"></i>Data Peminjaman</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Abigail</td>
                                <td>XRPL1</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bernadette</td>
                                <td>XRPL3</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carol</td>
                                <td>XRPL4</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dylan</td>
                                <td>XTKJ3</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ian</td>
                                <td>XTKJ6</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>

          

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include '../aset/footer.php';
?>
