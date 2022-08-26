           <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                   
        
                    </tr>
                </thead>
                
                      <tbody>
                      

  <?php 
    
    $query = "SELECT * FROM admin";
    $select_users = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_users)) {
        $admin_id             = $row['id'];
        $admin_first_name           = $row['First_Name'];
        $admin_last_name      = $row['Last_Name'];
        $gender       = $row['Gender'];
    
        
        echo "<tr>";
        
        echo "<td>$admin_id  </td>";
        echo "<td>$admin_first_name  </td>";
        echo "<td>$admin_last_name </td>";
        echo "<td>$gender </td>";
        
    
     
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
            
            
            
            
            
            
            
      