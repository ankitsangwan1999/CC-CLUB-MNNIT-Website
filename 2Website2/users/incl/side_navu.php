  <!--Side NAV-->

  <ul id="slide-out" class="sidenav">

    <li>
        <div class="user-view">
        <div class="background">
            <img src="Images/background3.jpg">
        </div>
          <?php
            if(isset($_SESSION['u_id'])){
                ?>
          <a href="#name"><span class="white-text name">Hello <?php echo $_SESSION['u_name'];?></span></a>
          <a href="#email"><span class="white-text email">Welcome!</span></a>
          <?php
      }
      else{
        ?>
      <a href="#name"><span class="white-text name">Hello Coder!</span></a>
          <a href="#email"><span class="white-text email">Welcome!</span></a>

          <?php
      }
          ?>
        </div>
    </li>

    <div class="container">
        <form class="col s12" method="POST" action="users/include/index_cate_inc.php">
            <?php
            // include_once"../include/dbh_inc.php";
                    if(!isset($_SESSION['u_id'])){
                    $sql="Select * FROM categories";
                    $result=mysqli_query($conn,$sql);
                    ?>
                   <div class="row">
                   <?php while($row = mysqli_fetch_assoc($result))
                    {
                    ?>  <li>
                        <button type="submit" name="submit" value="<?php echo $row['Category'];?>"><?php echo
                         $row['Category'];?></button>
                        </li> 
                     <?php
                                      
                        }
                        ?>
                     <div class="row">
                  </form>
                </div>
              </ul>
              <?php
          }
          else{
                if(isset($_SESSION['u_id'])){
                    $user_name=$_SESSION['u_name'];
                    $sql="SELECT * FROM users_interest WHERE user_name='$user_name'";
                    $result=mysqli_query($conn,$sql);
                    ?>
                   <div class="row">
                   <?php while($row = mysqli_fetch_assoc($result))
                    {
                    ?>  <li>
                        <button type="submit" name="submit" value="<?php echo $row['Category'];?>"><?php echo $row['Category'];?></button>
                        </li> 
                     <?php
                                      
                        }
                        ?>
                     <div class="row">
                  </form>
                </div>
              </ul>
        <?php } } ?>

  <div class="fixed-action-btn-left-bottom horizontal click-to-toggle">
  <a href="#" class="sidenav-trigger btn-floating btn-large waves-light red" data-target="slide-out"><i class="material-icons">menu</i></a>
</div>