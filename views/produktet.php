
<?php
    require_once '../controllers/MenuController.php';
    include_once '../includes/dashboard.php';

?>

 <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}


.content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 80%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left:20px;
    margin-left:350px;
    
    }
    
    .content-table thead tr {
    background-color:#013c58;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
    }
    
    .content-table th,
    .content-table td {
    padding: 12px 15px;
    }
    
    .link{
    text-decoration: none;
    color: red;
    font-size: 17px;
    }
    .first-link{
    color: black;
    font-size: 22px;
    padding-left: 50%;
    position: relative;
    top: 20px;
    }
    .top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
    }

    .dashboard{
        position: relative;
        padding-right:40px;
    }
 </style>

        <div class="dashboard">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Emri Produktit</th>
                        <th>Cmimi</th>
                        <th>INSERT</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        <th>Kategoria</th>
                        <th>Added by</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $p = new MenuController;
                    $allProducts = $p -> readData();
                    foreach($allProducts as $product): ?>
                    <tr>
                        <td><?php echo $product['foto_produktit'];?></td>
                        <td><?php echo $product['emri_produktit'];?></td>
                        <td><?php echo $product['cmimi_produktit']; ?></td>
                        
                        <td><a href="insert-products.php? id=<?php echo $product['ID']; ?>">Insert</a></td>
                        <td><a href="edit-products.php? id=<?php echo $product['ID']; ?>">Edit</a></td>
                        <td><a href="delete-products.php? id=<?php echo $product['ID']; ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
 
        <!-- <td><?php echo $product['kategoria_produktit']; ?></td> -->