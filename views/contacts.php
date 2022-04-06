<?php
    require_once '../controllers/ContactUsMapper.php';
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
    margin-top: 25px ;
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

   
 </style>

        <div class="dashboard">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $p = new ContactUsMapper;
                    $allMessages = $p -> getAllMessages();
                    foreach($allMessages as $messages): ?>
                    <tr>
                        <td><?php echo $messages['name'];?></td>
                        <td><?php echo $messages['email'];?></td>
                        <td><?php echo $messages['message']; ?></td>
                        
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
