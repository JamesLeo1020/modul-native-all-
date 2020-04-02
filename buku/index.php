<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($koneksi,$sql);
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
                                <th scope="col">Judul</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hari Jumat</td>
                                <td>Buapak lo</td>
                                <td>9999</td>
                                <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Edit</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bumi Itu Mitos</td>
                                <td>Mamak Lo</td>
                                <td>69</td>
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
