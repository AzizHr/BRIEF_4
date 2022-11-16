
<?php 
require_once '../php/database.php' ;
require_once 'header.php' ;
?>


    <div class="container mt-5 justify-content-center">
        <table class="table">
            <thead>
                <th><p class="text-center">Image</p></th>
                <th><p class="text-center">Id</p></th>
                <th><p class="text-center">Libelle</p></th>
                <th><p class="text-center">Quantite</p></th>
                <th><p class="text-center">Prix</p></th>
                <th><p class="text-center">Opeartion</p></th>
            </thead>
            <?php
                $stmt = $conn->query("SELECT `ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `IMAGE` FROM `product`");
                if ($stmt->rowCount()>0) {
                  while($row = $stmt->fetch()){
                    echo 
                    '
                        <tr>
                        <td><p class="text-center"><img height="120" width="120" src="../images/'.$row['IMAGE'].'"></p></td>
                        <td><p class="text-center">'.$row['ID'].'</p></td>
                        <td><p class="text-center">'.$row['LIBELLE'].'</p></td>
                        <td><p class="text-center">'.$row['QUANTITE'].'</p></td>
                        <td><p class="text-center">'.$row['PRIX'].' $</p></td>
                        <td>
                            <form method="POST">
                            <button name="delete" class="btn btn-danger" value='.$row['ID'].'>Delete</button>
                            <button name="update" class="btn btn-primary" value='.$row['ID'].'>Update</button>
                            </form>
                        </td>
                        </tr>
                    ';
                    if(isset($_POST["delete"])){
                        $ID = $row['ID'];
                        $delete = $conn->prepare("DELETE FROM product WHERE ID = :ID");
                        $delete->bindParam("ID" , $ID);

                        if($delete->execute()){
                            echo '<div class="container alert alert-success" role="alert">
                                    A Product has been deleted successfully!
                                </div>';
                        }
                        else{
                            echo '<div class="container alert alert-danger" role="alert">
                                    A Product has not been deleted!
                                </div>';
                        }
                    }
                  }
                } 

                if(isset($_POST["update"])){
                    header("Location:../update_product.php");
                }
            ?>
           
        </table>

        <div class="container d-flex justify-content-center pb-5">
            <form method="POST" action="add_product.php">
            <button type="submit" class="btn btn-success" name="add">Ajouter</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>