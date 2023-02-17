   <?php
    session_start();
    ?>
   <!DOCTYPE html>
   <html>
   <title>Home | MyStory</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
   <style>
     body {
       background-image: url('../asset/img/back_log.jpg');
       background-size: cover;
       height: 100vh;
       padding: 0;
       margin: 0;
     }
   </style>

   <body>
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
       <button class="w3-bar-item w3-button w3-large" onclick="close_side()">Close &times; </button>
       <a href="#" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
           <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
         </svg> | Home</a>
       <a href="../detail/home_detail.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
           <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
         </svg> | Detail</a>
       <a href="../timeline/home_timeline.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
           <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
           <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
           <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
         </svg> | For Your Diary</a>
       <a href="../log_out.php" class="w3-bar-item w3-button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
           <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
         </svg> | Log-Out</a>
     </div>

     <div id="main">

       <div class="w3-teal">
         <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="open_side()">&#9776;</button>
         <div class="w3-container">
           <h3 style="font-family: 'Space Mono', monospace">My Story <?php echo "✨ " . $_SESSION['username'] . " ✨"; //echo $_SESSION['id_user'];
                                                                      ?></h3>
         </div>
       </div>
       <style>
         .form-control {
           border-radius: 2px;
           border: unset;
           background-color: lightgoldenrodyellow;
           font-family: 'Space Mono', monospace;
         }

         .form-control:focus {
           outline-color: lightcoral;
           font-family: 'Space Mono', monospace;
           color: lightcoral;
           font-size: 1rem;
         }

         .form_control::placeholder {
           color: lightcoral;
           font-family: 'Space Mono', monospace;
           font-size: 1rem;
         }

         .form_control::-ms-value {
           color: lightcoral;
           font-family: 'Space Mono', monospace;
           font-size: 1rem;
         }
       </style>
       <div class="w3-container">
         <form method="post" class="form_diary" style="text-align: center;">
           <h5 style="margin-top: 30px; font-family:'Space Mono', monospace; ">Apa yang kamu pikirkan hari ini 💭 ?</h5><br>
           <input type="hidden" style="width:30%;" class="form-control" name="now" aria-describedby="emailHelp" value=<?php echo date("Y-m-d"); ?>>
           <input type="text" style="width:30%; margin-left: 35%; " class="form-control" name="judul" aria-describedby="emailHelp" placeholder="Judul ✏️"><br>
           <textarea name="content" id="content" cols="40" rows="10" style="border-radius: 2px;border: unset; background-color: lightgoldenrodyellow; font-family: 'Space Mono', monospace; " placeholder="tulis diary mu disini ... 👻"></textarea>
           <input type="hidden" style="width:30%;" class="form-control" name="id_user" aria-describedby="emailHelp" value=<?php echo $_SESSION['id_user']; ?>><br>
           <input type="submit" name="Submit" style="width: 30%; margin-bottom: 20px;font-family: 'Space Mono', monospace " id="save" class="btn btn-outline-primary" value="Kirim"><br>
         </form><br><br>

         <b>
           <h4 style="font-family:'Space Mono', monospace; text-align: center">Latest Story 🦄</h4>
         </b><br>
         <span style=""> <?php include_once("show_Ad.php"); ?></span>
         <div class='back-to-top'>
           ...
         </div>
         <?php
          // if(isset($_POST['Submit'])) {
          // 	$time = $_POST['now'];
          //     $judul = $_POST['judul'];
          //     $content = $_POST['content'];
          //     $id_user = $_POST['id_user'];

          // include_once("jquery.js");
          //     $result = mysqli_query($conn, "INSERT INTO tb_main(judul_diary,time_diary,isi_diary,id_user) VALUES('$judul','$time','$content','$id_user')");

          // }
          ?>
       </div>

     </div>
     <script src="jquery.js"></script>
     <script type="text/javascript">
       $(document).ready(function() {
         $("#save").click(function() {
           var data = $('.form_diary').serialize();
           $.ajax({
             type: 'POST',
             url: "home_pros_Ad.php",
             data: data,
             success: function() {
               alert("scroll ke bawah untuk meilhat diary anda :)");
               $('.tampil').load("show_Ad.php");
             }
           });
         });
       });
     </script>
     <script>
       function open_side() {
         document.getElementById("main").style.marginLeft = "30%";
         document.getElementById("mySidebar").style.width = "30%";
         document.getElementById("mySidebar").style.display = "block";
         document.getElementById("openNav").style.display = 'none';
       }

       function close_side() {
         document.getElementById("main").style.marginLeft = "0%";
         document.getElementById("mySidebar").style.display = "none";
         document.getElementById("openNav").style.display = "inline-block";
       }
     </script>

   </body>

   </html>