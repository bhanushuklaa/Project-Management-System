<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
if (empty($_SESSION['Email'])) {
  header("location:index.php");
} else {
  if ($role == "Admin") {
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
    .row1 {
        min-height: 200px;
        min-width: 100%;
        background: #f4f4f4;
        border: 1px solid black;
    }

    .project_name {
        color: black;
        font-size: 60px;
        line-height: 250px;
        font-family: Rage Italic;
    }

    .link_report {
        text-decoration: none;
        color: black;
    }
    </style>
    <title>Task Monitor</title>
</head>

<body>
    <div class="container">
        <div class="row row1">
            <div class="col-sm-5">
                <img height="250px" src="logo1.png" alt=" LOGO">
            </div>
            <div class="col-sm-6">
                <p class="project_name">Task <mark>Monitor</mark></p>

            </div>
        </div>

        <th width="140" scope="col">
            <font color="White" size="5">
                <?php
            print $role;
            ?></font>
        </th>
        <th width="63" scope="col">&nbsp;</th>
        </tr>
        </table>
        <div class="row mt-2 mb-5">
            <span class="" style="border-bottom:6px double black;"></span>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr style="border:1px solid black;">
                <th width="5%" scope="col">
                    <h4>&nbsp;</h4>
                </th>
                <th width="12%" scope="col"><a href="student.php" class="link_report">Add Student</a></th>
                <th width="11%" scope="col"><a href="faculty.php" class="link_report">Add Faculty</a></th>
                <th width="11%" scope="col"><a href="stsearch.php" class="link_report">Search Student</a></th>
                <th width="11%" scope="col"><a href="fa_search.php" class="link_report">Search Faculty </a></th>
                <th width="11%" scope="col"><a href="allocate.php" class="link_report">Allocate</a></th>
                <th width="11%" scope="col"><a href="skill.php" class="link_report">Skill Matrix</a></th>
                <th width="11%" scope="col"><a href="report.php" class="link_report">Reports</a></th>
                <th width="11%" scope="col"><a href="../logout.php" class="link_report">Logout</a></th>
                <th width="6%" scope="col">&nbsp;</th>
            </tr>
        </table>
        <br /><br /><br />
        <h2 class="mt-2" style="text-align:center;"><span style="border-bottom:1px solid black;">Report</span></h2>
        <table border="1" align="center" class="mt-5">
            <?php
          echo "<tr>";
          echo "<th>" . "Meeting ID" . "</th>";
          echo "<th>" ?> &nbsp; <?php "</th>";
                                echo "<th>" . "Faculty ID" . "</th>";
                                echo "<th>" ?> &nbsp; <?php "</th>";
                                                      echo "<th>" . "Student ID" . "</th>";
                                                      echo "<th>" ?> &nbsp; <?php "</th>";
                                                                            echo "<th>" . "Date" . "</th>";
                                                                            echo "<th>" ?> &nbsp; <?php "</th>";
                                                                                                  echo "<th>" . "Time" . "</th>";
                                                                                                  echo "<th>" ?>
            &nbsp; <?php "</th>";
                  echo "<th>" . "Description" . "</th>";
                  echo "</tr>";
                  include './connection.php';
                  $sql1 = "select * from meeting ";
                  $rec = mysqli_query($conn, $sql1);
                  while ($std = mysqli_fetch_assoc($rec)) {
                  ?> <tr align="center">
                <?php
                    echo "<td>" . $std['meeting_id'] . "<td/>";
                    echo "<td>" . $std['f_id'] . "<td/>";
                    echo "<td>" . $std['s_id'] . "<td/>";
                    echo "<td>" . $std['date'] . "<td/>";
                    echo "<td>" . $std['time'] . "<td/>";
                    echo "<td>" . $std['desc'] . "<td/>";
              ?>
            </tr> <?php
                  }
                  ?>
        </table>
        </form>
        <?php

    } elseif ($role == "Faculty") {
      header('Location:../Admin.php');
      ?>
        <?php
    } else {
      header('Location:../Admin.php');
      ?>

        <?php
    }
      ?>
        </table>
        <p>
            <?php
    }
      ?>