<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Post</title>

    <!-- CSS  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" />
    <link href="../materialize.css" rel="stylesheet" />
    <link href="../materialize-social.css" rel="stylesheet" />

    <style>
        .bg_img2 {
            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(2px);
        }

        .bg_img3 {
            filter: blur(8px);
            -webkit-filter: blur(3px);
        }

    
    </style>

</head>

<body style="background: url('../images/back.jpg') fixed no-repeat center; background-size: cover;">



    <div class="container">
        <h2 class="center">Add Post</h2>
        <div class="row">
            <form class="col s12" action="include/add_post_inc.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">chrome_reader_mode</i>
                  <input id="icon_prefix" type="text" class="validate" name="title" required>
                  <label for="icon_prefix">Post title</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">card_giftcard</i>
                  <input id="icon_telephone" type="tel" class="validate" name="label" required>
                  <label for="icon_telephone">Post label</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea" name="content" required ></textarea>
                  <label for="icon_prefix2">Content</label>
                </div>

                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Upload Image</span>
                    <input type="file" name="post_image" value="post_image">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>

                <div class="input-field col s6">
                     <i class="material-icons prefix">playlist_add</i>
                      <?php
                    include_once"include/admin_dbh_inc.php";
                    $sql="SELECT * FROM categories";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      // echo $count
                    ?>
                    <select name="category">   
                     <!--  <option value="" disabled selected>Choose your option</option -->>
                                        <?php 
                      for($i=0;$i<$count;$i++){
                        $sql = "SELECT * FROM categories WHERE s_no=$i+1";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        ?>
                        <option  value="<?php echo $row['Category']?>"  <?php if($row['s_no']==1){ 
                            ?> selected <?php } ?>
                          > 
                                 <?php echo$row['Category']; ?> 
                        </option>
                      <?php
                    }
                    ?>
                      
                    </select>
                    <label>Category</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">date_range</i>
                   <select name="schedule">
                    <option value="Yes"  selected>Yes</option>
                    <option value="No">No</option>
                  </select>
                    <label>Schedule</label>
                </div>
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Add
                        <i class="material-icons right">send</i>
                    </button>
              </div>
            </form>
        </div>
    </div>































    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript"
            src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

   <script type="text/javascript">
        $(document).ready(function(){
        $('.sidenav').sidenav();
        });
   </script>

   <script type="text/javascript">
       $(document).ready(function(){
    $('select').formSelect();
  });

   </script>

   <script type="text/javascript">
       $(document).ready(function(){
    $('.collapsible').collapsible();
  });
   </script>


</body>

</html>