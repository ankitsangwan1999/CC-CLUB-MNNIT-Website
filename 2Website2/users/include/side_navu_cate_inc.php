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
        
           
                   <div class="row">
                     <li>
                        <a href="../../index.php"><button type="submit">Home</button></a>
                      </li> 
                      <li>
                        <a href="https://github.com/CC-MNNIT/2018-19-Classes"><button>Git Repository</button></a>

                      </li>
                     
                     </div>
                  
                </div>
              </ul>

  <div class="fixed-action-btn-left-bottom horizontal click-to-toggle">
  <a href="#" class="sidenav-trigger btn-floating btn-large waves-light red" data-target="slide-out"><i class="material-icons">menu</i></a>
</div>