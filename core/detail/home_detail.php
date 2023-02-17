<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Home | MyStory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <button class="w3-bar-item w3-button w3-large" onclick="close_side()">Close &times;</button>
    <a href="../main/home_main.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
      </svg> | Home</a>
    <a href="../detail/home_detail.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
      </svg> | Detail</a></a>
    <a href="../timeline/home_timeline.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
      </svg> | For Your Story</a>
    <a href="../log_out.php" class="w3-bar-item w3-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
      </svg> | Log-Out</a>
  </div>

  <div id="main">
    <div class="w3-pale-red">
      <button id="openNav" class="w3-button w3-pale-red w3-xlarge" onclick="open_side()">&#9776;</button>
      <div class="w3-container">
        <h3 style="font-family:'Space Mono', monospace;">Detail Story <?php echo "✨ " . $_SESSION['username'] . " ✨"; //echo $_SESSION['id_user'];
                                                                      ?></h3>
      </div>

    </div>
    <div style="width: 70%;  margin-top: 40px; margin-left: 15%;">
      <b>
        <h4 style="font-family:'Space Mono', monospace;">Activity post Story 🧠</h4>
      </b>
      <canvas id="myChart"></canvas>
    </div><br><br>

    <b>
      <h4 style="font-family:'Space Mono', monospace; margin-left:15%;">Detail Story 🕵️‍♀️</h4>
    </b><br>
    <?php
    include_once("../../conn.php");
    $id_user = $_SESSION['id_user'];
    //$limit = "DESC LIMIT 1";
    $data = mysqli_query($conn, "SELECT * FROM tb_main WHERE id_user = '$id_user' ORDER BY id_main DESC");
    // echo "";
    while ($d = mysqli_fetch_array($data)) {
    ?>
      <div style="border: 1px solid;padding: 10px; box-shadow: 5px 10px; font-family:'Space Mono', monospace; width: 70%; background-color: lightgoldenrodyellow; font-family: 'Space Mono', monospace; margin-left:15%; ">
        <tr>
          <td><?php echo $d['time_diary'] ?></td><br>
          <b>
            <td><?php echo $d['judul_diary'] ?></td>
          </b><br>
          <td><?php echo $d['isi_diary'] ?></td>
          <td><a style='text-decoration:none' href='home_update.php?id_main=<?php echo $d['id_main'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
              </svg></a>|<a style='text-decoration:none' href='home_delete.php?id_main=<?php echo $d['id_main'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
              </svg></a></td>
        </tr>
      </div>

    <?php } ?>
    <?php
    $chart_sql = mysqli_query($conn, "SELECT time_diary,COUNT(*) AS jumlah_post  FROM tb_main WHERE id_user = '$id_user' GROUP BY time_diary LIMIT 7");
    while ($ret = mysqli_fetch_array($chart_sql)) {

      $label[] =
        $ret["time_diary"];
      $value[] =
        $ret["jumlah_post"];
    }
    //echo json_encode($label);
    //echo json_encode($value);
    ?>
    <script>
      const labels = <?php echo json_encode($label) ?>;

      const data = {
        labels: labels,
        datasets: [{
          label: 'Activity diary',
          backgroundColor: ['rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: 'rgb(255, 99, 132)',
          data: <?php echo json_encode($value); ?>,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
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