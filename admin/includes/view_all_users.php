           <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Phone</th>
                        <th>Balance</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                   
        
                    </tr>
                </thead>
                
                      <tbody>
                      

  <?php 
    
    $query = "SELECT * FROM user WHERE user_role = 'user' ";
    $select_users = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id             = $row['id'];
        $phone           = $row['phone'];
        $balance           = $row['balance'];
        $user_firstname      = $row['FirstName'];
        $user_lastname       = $row['LastName'];
    
        
        echo "<tr>";
        
        echo "<td>$user_id </td>";
        echo "<td>$phone  </td>";
        echo "<td>$balance  </td>";
        echo "<td>$user_firstname </td>";
        echo "<td>$user_lastname </td>";
        
    
     
        // echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
        // echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
        // echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
        // echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
        echo "</tr>";
   
    }




      ?>


   
            </tbody>
            </table>
            
            
<?php

if(isset($_GET['change_to_admin'])) {
    
    $the_user_id = escape($_GET['change_to_admin']);
    
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id   ";
    $change_to_admin_query = mysqli_query($connection, $query);
    header("Location: users.php");
    
    
}





if(isset($_GET['change_to_sub'])){
    
    $the_user_id = escape($_GET['change_to_sub']);
    

    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id   ";
    $change_to_sub_query = mysqli_query($connection, $query);
    header("Location: users.php");
    
    
    
}




if(isset($_GET['delete'])){

    if(isset($_SESSION['user_role'])) {

        if($_SESSION['user_role'] == 'admin') {

        $the_user_id = escape($_GET['delete']);

        $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
        $delete_user_query = mysqli_query($connection, $query);
        header("Location: users.php");

            }   


        }
   
    
    }





?>     
            
            
            
            
            
            
            
      