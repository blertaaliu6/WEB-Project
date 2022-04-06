
<?php

require_once '../controllers/newsMapper.php';
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
        /* width: 80%; */
       
        padding-right:40px;
       
    }
 </style>

        <div class="dashboard">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Titulli</th>
                        <th>Permbajtja</th>
                        <th>Data</th>
                        <th>Insert</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $p = new newsMapper;
                    $allNews = $p -> getAllNews();
                    foreach($allNews as $news): ?>
                    <tr>
                        <td><?php echo $news['foto_lajmit'];?></td>
                        <td><?php echo $news['titulli_lajmit'];?></td>
                        <td><?php echo $news['permbajtja_lajmit']; ?></td>
                        <td><?php echo $news['data_lajmit'];?></td>
                       
                        
                        <td><a href="insert-news.php? id=<?php echo $news['ID']; ?>">Insert</a></td>
                        <td><a href="delete-news.php? id=<?php echo $news['ID']; ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
 
   