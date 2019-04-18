  <div class="topnav cyan">
        <a class="white-text" href="index.php">Home</a>



        <a class="white-text" href="about_us.php">About</a>

        

        <!-- For Login -->

        <div class="login-container">
            
            <table>
   

              <tr>
                  <?php
        if(isset($_SESSION['u_id']))
        {
            ?>
            <td>
                <?php
          echo '<form action="users/include/logout_inc.php" method="POST">
        <button type="submit" name="submit" class="teal-text">
            Logout
        </button>
        </form>';?></td>

                    <!-- <td>
                        <button onclick="document.getElementById('id01').style.display='block'" class="teal-text">Login</button>
                    </td>
                    <td>
                        <button onclick="document.getElementById('id03').style.display='block'" class="teal-text">Admin</button>
                    </td>
                    <td>
                        <button onclick="document.getElementById('id02').style.display='block'" class="white-text teal">Sign Up</button>
                    </td> -->
                </tr>
            </table>
         </div>
     </div>
<?php

        }
        elseif(isset($_SESSION['a_name'])){
            ?>


            <td>
                <?php
          echo '<form action="admin/include/dashboard_inc.php" method="POST">
        <button type="submit" name="submit" class="teal-text">
            Dashboard
        </button>
        </form>';

        ?>
            </td>
            <td>
                <?php
          echo '<form action="admin/include/logout_inc.php" method="POST">
        <button type="submit" name="submit" class="teal-text">
            Logout
        </button>
        </form>';

        ?>
            </td>
            </tr>
            </table>
         </div>
     </div>

<?php
        }
        else{
          // echo '<ul class="nav navbar-nav navbar-right">
        // <li><a href="users/login.php">Login</a></li>
        // <li><a href="users/signup.php">Signup</a></li>
        // <li><a href="admin/admin_login_inc.php">Admin Login</a></li>
        // </ul>';
            ?>

                    <td>
                        <button onclick="document.getElementById('id01').style.display='block'" class="teal-text">Login</button>
                    </td>
                    <td>
                        <button onclick="document.getElementById('id03').style.display='block'" class="teal-text">Admin</button>
                    </td>
                    <td>
                        <button onclick="document.getElementById('id02').style.display='block'" class="white-text teal">Sign Up</button>
                    </td>
                </tr>
            </table>
         </div>   

        <div id="id01" class="modal" style="background-color:#0e7999">

            <form class="modal-content animate" action='users/include/login_inc.php' method="POST">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://image.freepik.com/free-vector/female-exercise_82446-44.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" id="inputEmail" class="form-control" name="user_name" 
                    placeholder="User Name" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="Password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>

                    <button type="submit" name="submit" style="background-color:hotpink">Login</button>
                </div>


                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>

        <!-- For Sign Up -->

                

        <div id="id02" class="modal" style="background-color:cadetblue">

            <form class="modal-content animate" action="users/include/sign_up_inc.php" 
                    method="POST">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://image.freepik.com/free-vector/looking-talent-background_23-2147988439.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="fname"><b>First name</b></label>
                    <input type="text" name="user_first" placeholder="First Name *" value="" required>

                    <label for="sname"><b>Last name</b></label>
                    <input type="text" name="user_last" placeholder="Last Name" value="" 
                    required>

                    <label for="uname"><b>Username</b></label>
                    <input type="text" name="user_name" placeholder="User Name" value=""
                    required>


                    <label><b>Categories</b><br>
                        <input type="checkbox" name="interest[]" value="Competitive Coding" />
                        <span>Competitive Coding</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Machine Learning" />
                        <span>Machine Learning</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Web development" />
                        <span>Web development</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="IOT" />
                        <span>IOT</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Web-Dev with Django" />
                        <span>Web-Dev with Django</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Weekend Of Code Event" />
                        <span>Weekend Of Code Event</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Java Classes" />
                        <span>Java Classes</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="interest[]" value="Git Classes" />
                        <span>Git Classes</span>
                    </label>

                    <br>


                    <label for="email"><b>Email</b></label>
                  <input type="text" name="user_email" placeholder="E-mail" 
                            value=""/>

                    <label for="psw"><b>Password</b></label>
                   <input type="Password" name="Password" placeholder=
                   "Your Password *" value=""/>
                    <label for="psw"><b>Confirm Password</b></label>
                     <input type="Password" name="confpassword" placeholder="Confirm Password *" value=""/>

                    <button type="submit" name="submit" style="background-color:hotpink">Sign Up</button>
                   
                </div>


                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                   <!--  <span class="psw"><a href="#">Forgot username?</a></span> -->
                </div>
            </form>
        </div>

        <!-- For Admin login -->

                

        <div id="id03" class="modal" style="background-color:darkcyan">

            <form class="modal-content animate" action='admin/include/admin_login_inc.php' method="POST">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://image.freepik.com/free-vector/man-look-graphic-chart-business-analytics-concept-big-data-processing-icon_39422-761.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Admin Username</b></label>
                    <input type="text" id="inputEmail" name="admin_name" placeholder=
                    "Admin User Name"required>

                    <label for="psw"><b>Password</b></label>
                    <input type="Password" name="admin_password" class="form-control" placeholder="Admin Password" required>

                    <button type="submit" name="submit" style="background-color:hotpink">Admin Login</button>
                </div>


                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                <!--     <span class="psw"><a href="#">Forgot password?</a></span> -->
                </div>
            </form>
        </div>
        </div>
    
<?php

        }

      ?>
