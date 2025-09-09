<?php
include "../controller/bukuController.php";
class bukuView{


    public function SelectData(){
        $buku = new bukuController();

        if (isset($_GET['id']) && $_GET['id'] != ""){
            $data = $buku->getById();
            ?>
            <br>
            <p class="ms-4"><?php echo "id ke " . $data['id'] . ":"; ?></p>
            <p class="ms-4"><?php echo "Judul = " . $data['judul'];?></p>
            <p class="ms-4"><?php echo "Penulis = " . $data['penulis'];?></p>
            <p class="ms-4"><?php echo "Tahun Terbit = " . $data['tahun_terbit'];?></p>
            <?php
        }
        else {
            ?>
            <table class="table m-4">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $buku->getAll(); ?>
                </tbody>
                
            </table>
            <?php
        }
    }
    public function view(){?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Buku Management</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        </head>
        <body>
            <h1 class="pt-4 ps-4">data buku</h1>
            <?php $this->SelectData() ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        </body>
        </html>
    <?php
    }
}

?>