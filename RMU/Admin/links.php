<style type="text/css">
    #welcome
    {
        color: greenyellow;
        margin-right: -55%;
    }
</style>
<ul class="nav">
                        <li>
                            <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
                            <li class="active"><a href="user_account.php"><i class="icon-group icon-large"></i>User Accounts</a></li>
                            <li class="active"><a href="emp_add.php"><i class="icon-list icon-large"></i>Register Items</a></li>
                        </li>
                        
                        <li><a href="returned_item_details.php"><i class="icon-list icon-large"></i>Loan Items</a></li>
                        
                        <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
                        <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
                        <li><a id="welcome" data-toggle="modal" href="#"><i class="icon-large"></i><?php
                            $user_query=mysqli_query($conn,"select *  from user where User_id='$id_session'")or die(mysqli_error());
                                    $row=mysqli_fetch_array($user_query);
                                        echo 'Welcome:'." ".$row['fullname_user']." "."<b style='color:white;'>logged in</b>"."[".$row['User_Type']."]";
                            ?>
                        </a></li>
                    </ul>