<?php
    require_once '../controllers/userMapper.php';
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
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Username</th>
                        <th>Emaili</th>
                        <th>Roli</th>
                        <th>Upgrade Role</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $p = new UserMapper;
                    $allUsers = $p -> getAllUsers();
                    foreach($allUsers as $users): ?>
                    <tr>
                        <td><?php echo $users['name'];?></td>
                        <td><?php echo $users['lname'];?></td>
                        <td><?php echo $users['username']; ?></td>
                        <td><?php echo $users['email']; ?></td>
                        <td><?php echo $users['role']; ?></td>
                        <td><a href="UpdateRole.php? id=<?php echo $users['id']; ?>">Update</a></td>
                        <td><a href="DeleteUsers.php? id=<?php echo $users['id']; ?>">Delete</a></td> 
                        
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
