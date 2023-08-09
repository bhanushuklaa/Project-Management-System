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
    <link rel="stylesheet" type="text/css" href="../css.css">
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

    .tr_faculty {
        border: 1px solid black;
    }

    .link_faculty {
        text-decoration: none;
        color: black;
    }
    </style>
    <title>Project Management System</title>
</head>

<body>
    <div class="container">
        <div class="row row1">
            <div class="col-sm-5">
                <img height="250px" src="logo1.png" alt=" LOGO">
            </div>
            <div class="col-sm-7">
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
        <table width="100%" border="0" cellspacing="01" cellpadding="01">
            <tr class="tr_faculty">
                <th width="5%" scope="col">
                    <h4>&nbsp;</h4>
                </th>
                <th width="12%" scope="col"><a href="student.php" class="link_faculty">Add Student</a></th>
                <th width="11%" scope="col"><a href="faculty.php" class="link_faculty">Add Faculty</a></th>
                <th width="11%" scope="col"><a href="stsearch.php" class="link_faculty">Search Student</a></th>
                <th width="11%" scope="col"><a href="fa_search.php" class="link_faculty">Search Faculty </a></th>
                <th width="11%" scope="col"><a href="allocate.php" class="link_faculty">Allocate</a></th>
                <th width="11%" scope="col"><a href="skill.php" class="link_faculty">Skill Matrix</a></th>
                <th width="11%" scope="col"><a href="report.php" class="link_faculty">Reports</a></th>
                <th width="11%" scope="col"><a href="../logout.php" class="link_faculty">Logout</a></th>
                <th width="6%" scope="col">&nbsp;</th>
            </tr>
        </table>
        <form method="post" action="fa.php">
            <br /><br /><br /><br />
            <div style="border:1px solid black; margin-left: 25%; alignment-adjust: central; width: 50%">
                <h2 class="mt-2" style="text-align:center;"><span style="border-bottom:1px solid black;">
                        Add Faculty</span></h2>
                <table width="100%" border="0" cellspacing="00" cellpadding="05" align="center">
                    <tr>
                        <th width="7%" scope="col">&nbsp;</th>
                        <th width="43%" scope="col">&nbsp;</th>
                        <th width="44%" scope="col">&nbsp;</th>
                        <th width="6%" scope="col">&nbsp;</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Faculty ID&nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="text" name="id" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Name&nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="text" name="faname" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Email&nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="email" name="faemail" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Phone&nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="text" name="faphone" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Password &nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="password" name="fapass" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="right">
                            <font size="5">Qualification&nbsp;:&nbsp;</font>
                        </td>
                        <td><input id="in" type="text" name="faqulification" />
                            <font color="red">*</font>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr align="center">
                        <td>&nbsp;</td>
                        <td colspan="2"><input type="submit" name="add" value="Add" id="bt" class="mt-3" />

                        <td>&nbsp;</td>
                    </tr>
                </table> <br /><br />
            </div>
        </form>
        <?php
    } elseif ($role == "Faculty") {
      ?>
        <?php
        header('Location:../Admin.php');
        ?>
        <?php
    } else {
      ?>
        <?php
        header('Location:../Admin.php');
        ?>
        <?php
    }
      ?>
        </table>

        <?php
  }
    ?>



        <p>&nbsp;</p>