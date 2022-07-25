<!DOCTYPE html>
    <html>
    <head>
       <meta http-equiv="refresh" content="11">
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .one{background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);margin-top: 0px;padding-bottom:10px}

    .two{text-align: center;
         border-style: solid;
         border-color:#2F7570;
         padding: 1px;
         border-radius: 30px;
         margin-left: 1100px;
         margin-right: 50px
    }
    body{ margin:0px;
        padding-bottom:10px;
    }
    h2{
        margin-top: 0px;
        margin-bottom: 0px;}


    </style>
    </head>
    <body>

    <div class="one"><h2> Leads From Landing Page: //esoftwarehelp.com/security/</h2><div class="two"><a href="login.php">Sign Out</a></div></div>



    <table>
      <tr>
      <th>S.NO</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
      </tr>

     <?php


    	include "conn.php";


    $q = "select * from user_id ";

    $query = mysqli_query($conn,$q);

    if(mysqli_num_rows($query)> 0){

    $i = 1;

      while($rew = mysqli_fetch_array($query)){ ?>

        <tr>
    	<td><?php echo $i; $i++; ?></td>

        <td><?php echo $rew['name'];?></td>
    	 <td><?php echo $rew['number'];?></td>
        <td><?php echo $rew['email'];?></td>
      </tr>

     <?php
      }
      }

       ?>


    </table>

    

    </body>
    </html>
