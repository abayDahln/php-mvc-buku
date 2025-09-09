<?php
include "../model/bukuModel.php";
class bukuController{

    public function getAll(){
        $model = new bukuModel();
        $data = $model->getAll();

        foreach ($data as $b){?>
            <tr>
                <td><?php echo $b['id'];?></td>
                <td><?php echo $b['judul'];?></td>
                <td><?php echo $b['penulis'];?></td>
                <td><?php echo $b['tahun_terbit'];?></td>
            </tr>
        <?php
        }
    }

    public function getById(){
        if (isset($_GET['id']) && $_GET['id'] != ""){
            $model = new bukuModel();
            return $data = $model->getById($_GET['id']);
        }
        else{
            return;
        }
        
    }
}

?>