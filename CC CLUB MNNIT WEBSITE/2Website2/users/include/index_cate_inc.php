<?php
session_start();
include_once"dbh_inc.php";
if(isset($_POST['submit'])){
$category=mysqli_real_escape_string($conn,$_POST['submit']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CC MNNIT</title>

    <!-- CSS  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
    <link href="materialize.css" rel="stylesheet" />
    <link href="materialize-social.css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/x-icon" href="img/1200px-Code.org_logo.svg.png" />

    <link rel="stylesheet" type="text/css" href="W3Schools.css" />

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

<body style="background: url('../../images/back2.jpg') fixed no-repeat center; background-size: cover;">



 <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <img src="img/1200px-Code.org_logo.svg.png" style="height:100px; width:100px; margin-left:-50px; margin-top:100px" />
                <h1 class="header center white-text text-lighten-2 container" style="width:70%; font-family:cursive; text-align:center; margin-top:-100px">CC Club MNNIT</h1>
                <div class="row center">
                    <h5 class="header col s12 light" style="font-weight:500; text-align: center;">A club for enthusiast coders at MNNIT Allahabad</h5>
                </div>


            </div>
        </div>
        <div class="parallax"><img src="img/746524.png" style="height:1000px; width:800px;" alt="Unsplashed background img 1" height="1500px"></div>
    </div>
    
   
  <?php include_once"navu_cate_inc.php";?>
<?php include_once"side_navu_cate_inc.php";?>

   

    <div class="container">
        <!-- PHP Loop HERE for posts -->
        <?php
                $sql="SELECT * FROM posts WHERE Category='$category' ORDER BY updated DESC,created DESC";
                $result=mysqli_query($conn,$sql);
                // if(mysqli_num_rows($result)>0){
                
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
              {   
                ?>
        <ul class="collection with-header">
            <li class="collection-header brown-text">
                <h4 style="display: inline-block;"  >
                    <?php echo $row['Title']; 
                    ?> 
                </h4>
                <h6 class="right" style="display: inline-block;">
                    -<?php echo $row['admin_name'];?>
                </h6>
                <div class="divider"></div>
                <h6 style="display: inline-block;">
                    Category-
                </h6>
                <p style="display: inline-block;">
                    <?php echo $row['Category'];?>
                </p>
                <h6 class="right" style="display: inline-block;">
                    - Created-<?php echo $row['updated'];?>
                </h6>
            </li>
            <li class="collection-item">
                <?php
        
        $image_name=$row["image_name"];
        
        $image_path="../../admin/include/uploads";
        
        ?>
        <?php
        if($image_name){?>


         <img src="<?php echo $image_path."/".$image_name?>"> 





                <p> <?php echo $row['content'];?></p>
                <?php } ?>
            </li>
        </ul>
<?php
                $s_no=$row['s_no'];
        $sql ="SELECT * FROM comments WHERE p_s_no=$s_no ORDER BY created ";
            $result1=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result1);
            
    if(isset($_SESSION['u_id'])){
?>

        <!-- Comment started -->
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header" id="<?php echo $row['Title'] ?>"><i class="material-icons">mode_comment</i>Comments</div>
                        <div class="collapsible-body">
                            <div>
                                <?php
                                 while($row1 = mysqli_fetch_assoc($result1)){ ?>
                                <p><?php echo $row1['user_name'];?> : <?php echo $row1['comment'];?></p>
                                <?php
                                    }
                                  ?>
                            </div>
                            <div class="divider"></div>
                            <div>
                                <div class="row">
                                    <form method="POST" action="comment_inc.php" class="col s12">
                                      <div class="row">
                                        <div class="input-field col s12">
                                          <i class="material-icons prefix">mode_edit</i>
                                          <textarea id="icon_prefix2" class="materialize-textarea" name="comment"></textarea>
                                          <label for="icon_prefix2">Comment</label>
                                          <button class="btn waves-effect waves-light" type="submit" name="submit" value="<?php echo $row['Title'] ?>">Submit
                                            <i class="material-icons right">send</i>
                                          </button>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


<?php
    }

    else{
?>

        <!-- Comment started -->
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">mode_comment</i>Comments</div>
                        <div class="collapsible-body">
                            <div>
                                <?php
                                 while($row1 = mysqli_fetch_assoc($result1)){ ?>
                                <p><?php echo $row1['user_name'];?> : <?php echo $row1['comment'];?></p>
                                <?php
                                    }
                                  ?>
                            </div>
                            <div class="divider"></div>
                           
                        </div>
                    </li>
                </ul>

  <?php  
}

}
?>   
    </div>

   <!--ANKIT DO NOT TOUCH ANY CODE BELOW THIS AREA -->

    <!--
    For the slides
    -->
    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/30806092_1677055905722483_2289345754823176776_o.jpg?_nc_cat=108&_nc_ht=scontent-bom1-1.xx&oh=a90be9b53a80a87251ad9f21c1839969&oe=5D3029EE" style="height:550px; width:1035px">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/42264979_1406366546162786_3538118428365684736_o.jpg?_nc_cat=102&_nc_ht=scontent-bom1-1.xx&oh=a81e18a9a09ab8e5ea590a13b660b397&oe=5D417DDF" style="height:550px; width:1035px">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/42167282_1406345649498209_6820284774716801024_n.jpg?_nc_cat=111&_nc_ht=scontent-bom1-1.xx&oh=06df8e6970aea9bfd3b09cce7fb1b7cc&oe=5D4B2237" style="height:550px; width:1035px">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/23845622_868133826681684_183915153898687128_o.jpg?_nc_cat=100&_nc_ht=scontent-bom1-1.xx&oh=b1035178f16dca9d5be4794b24c7f219&oe=5D4EE6A0" style="height:550px; width:1035px">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/17917524_1315005801953974_388510172344941110_o.jpg?_nc_cat=105&_nc_ht=scontent-bom1-1.xx&oh=d0b3f5f4ab7eafc3ffa9d2e2a8169cb9&oe=5D2DF282" style="height:550px; width:1035px">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/21077618_1588440007872983_9031943334457706017_n.jpg?_nc_cat=111&_nc_ht=scontent-bom1-1.xx&oh=164ec4192372dc7c3521db10693862bc&oe=5D45C793" style="height:550px; width:1035px">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/30806092_1677055905722483_2289345754823176776_o.jpg?_nc_cat=108&_nc_ht=scontent-bom1-1.xx&oh=a90be9b53a80a87251ad9f21c1839969&oe=5D3029EE" style="width:100%; height:120px" onclick="currentSlide(1)" alt="CC Queries">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/42264979_1406366546162786_3538118428365684736_o.jpg?_nc_cat=102&_nc_ht=scontent-bom1-1.xx&oh=a81e18a9a09ab8e5ea590a13b660b397&oe=5D417DDF" style="width:100%; height:120px" onclick="currentSlide(2)" alt="Hack 36">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/42167282_1406345649498209_6820284774716801024_n.jpg?_nc_cat=111&_nc_ht=scontent-bom1-1.xx&oh=06df8e6970aea9bfd3b09cce7fb1b7cc&oe=5D4B2237" style="width:100%; height:120px" onclick="currentSlide(3)" alt="Git Stickers">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/23845622_868133826681684_183915153898687128_o.jpg?_nc_cat=100&_nc_ht=scontent-bom1-1.xx&oh=b1035178f16dca9d5be4794b24c7f219&oe=5D4EE6A0" style="width:100%; height:120px" onclick="currentSlide(4)" alt="Code">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t31.0-8/17917524_1315005801953974_388510172344941110_o.jpg?_nc_cat=105&_nc_ht=scontent-bom1-1.xx&oh=d0b3f5f4ab7eafc3ffa9d2e2a8169cb9&oe=5D2DF282" style="width:100%; height:120px" onclick="currentSlide(5)" alt="Team">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/21077618_1588440007872983_9031943334457706017_n.jpg?_nc_cat=111&_nc_ht=scontent-bom1-1.xx&oh=164ec4192372dc7c3521db10693862bc&oe=5D45C793" style="width:100%; height:120px" onclick="currentSlide(6)" alt="Anonymous">
            </div>
        </div>
    </div>



    


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">


                    <h1 class="header" style="font-family:'Congrats Calligraphy'; color:azure">Any Queries?</h1>
                    <h6 class="header" style="font-family:'Lucida Calligraphy'; color:azure"> Feel free to contact us.Thanks!</h6>
                    <form class="header">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">person</i>
                                <input type="text" style="color:azure;" id="name" />
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">email</i>
                                <input type="email" style="color:azure;" id="email"/>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">    
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea class="materialize-textarea" id="ques" style="color:azure"></textarea>
                                <label for="ques">Questions?</label>
                            </div>
                            <button type="submit" style="font-weight:500;" class="pink" onclick="myFunction()">ASK US</button>
                        </div>
                    </form>   



                </div>
            </div>
        </div>
        <div class="parallax bg_img3"><img src="img/1733.jpg" style="width:1500px; height:1500px;" alt="Unsplashed background img 3"></div>
    </div>
<script>
function myFunction() {
  alert("Coming soon!");
}
</script>
 

    <footer class="page-footer teal white-text">
        <div class="container">
            <div class="row">
                <div class="col l9 s12">
                    <h5 class="white-text">Contact Us</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                    <a href="https://www.google.com/maps/place/MNNIT+Allahabad+Campus,+Teliarganj,+Prayagraj,+Uttar+Pradesh/@25.4921509,81.8616897,16z/data=!3m1!4b1!4m5!3m4!1s0x399aca789e0c84a5:0x2c27733a7529bf08!8m2!3d25.4918881!4d81.8675096" class="waves-effect waves-light btn-floating btn-large teal">
                        <i class="material-icons">place</i>
                    </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Address: MNNIT Allahabad Campus, Teliarganj, Prayagraj, Uttar Pradesh

                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <table>
                        <tr>
                            <td>
                                <a class="waves-effect waves-light btn-floating btn-large">
                                    <img src="https://image.flaticon.com/icons/svg/273/273519.svg" style="height:55px; width:55px;" />
                                </a>
                            </td>
                            <td>
                                Email: secretary@mnnit.ac.in
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="waves-effect waves-light btn-floating btn-large">
                                    <img src="https://image.shutterstock.com/z/stock-vector-fax-machine-icon-vector-telefax-solid-logo-illustration-pictogram-isolated-on-white-472247014.jpg" style="height:55px; width:55px;" />
                                </a>
                            </td>
                            <td>
                                Fax No.: 91-0532-2545341
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="waves-effect waves-light btn-floating btn-large">
                                    <img src="https://image.flaticon.com/icons/svg/401/401171.svg" style="height:56px; width:56px;" />
                                </a>
                            </td>
                            <td>
                                Telephone No.: 91-0532-2545404, 2545407
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="waves-effect waves-light btn-floating btn-large">
                                    <img src="https://image.flaticon.com/icons/svg/185/185981.svg" style="height:56px; width:56px;" />
                                </a>
                            </td>
                            <td>
                                Facebook Page : <a href="https://www.facebook.com/groups/ccqueries/" style="color:white;">https://www.facebook.com/groups/ccqueries/</a>
                            </td>
                        </tr>
                    </table>


                    <div class="fixed-action-btn-right-bottom horizontal click-to-toggle">
                        <a class="btn-floating btn-large black" href="#top">
                            <i class="material-icons large">keyboard_arrow_up</i>
                        </a>

                    </div>


                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright of <a class="brown-text text-lighten-3" href="http://materializecss.com">MNNIT ALLAHABAD</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
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
    Template.[name].rendered = function() {
this.autorun(function() {
    var optionsCursor = OptionsList.find().count();
    if(optionsCursor > 0){
         $('select').material_select();
    }
});
   </script>

   <script type="text/javascript">
       $(document).ready(function(){
    $('.collapsible').collapsible();
  });
   </script>


</body>

</html>

 
<?php
}

?> 