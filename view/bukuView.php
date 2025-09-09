<?php
include "../controller/bukuController.php";
class bukuView{


    public function SelectData(){
        $buku = new bukuController();

        if (isset($_GET['id']) && $_GET['id'] != ""){
            $data = $buku->getById();
            ?>
            <p><?php echo "id ke " . $data['id'] . ":"; ?></p>
            <p><?php echo "Judul = " . $data['judul'];?></p>
            <p><?php echo "Penulis = " . $data['penulis'];?></p>
            <p><?php echo "Tahun Terbit = " . $data['tahun_terbit'];?></p>
            <?php
        }
        else {
            ?>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
                <?php $buku->getAll(); ?>
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
            <title>Document</title>
        </head>
        <body>
            <h1>data buku</h1>
            <?php $this->SelectData() ?>
        </body>
        </html>
    <?php
    }
}

?>