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
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
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

    .link {
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
                <img height="250px" src="logo1.png" alt="LOGO">
            </div>
            <div class="col-sm-7">
                <p class="project_name">Task <mark>Monitor</mark></p>
            </div>
        </div>
        <div class="row">
            <span class="mt-5 mb-4" style="border-bottom:6px double black;"></span>
        </div>

        <th width="140" scope="col">
            <font color="black" size="6" style="font-family:times new roman; border-bottom:1px solid black;">
                <?php
                        print $role;
                        ?></font>
        </th>
        <th width="63" scope="col">&nbsp;</th>
        </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="" style="border: 1px solid black;">
                <th width="5%" scope="col">
                    <h4>&nbsp;</h4>
                </th>
                <th width="12%" scope="col"><a href="ADMIN/student.php" class="link">Add Student</a></th>
                <th width="11%" scope="col"><a href="ADMIN/faculty.php" class="link">Add Faculty</a></th>
                <th width="11%" scope="col"><a href="ADMIN/stsearch.php" class="link">Search Student</a></th>
                <th width="11%" scope="col"><a href="ADMIN/fa_search.php" class="link">Search Faculty </a></th>
                <th width="11%" scope="col"><a href="ADMIN/allocate.php" class="link">Allocate</a></th>
                <th width="11%" scope="col"><a href="ADMIN/skill.php" class="link">Skill Matrix</a></th>
                <th width="11%" scope="col"><a href="ADMIN/report.php" class="link">Reports</a></th>
                <th width="11%" scope="col"><a href="logout.php" class="link">Logout</a></th>
                <th width="6%" scope="col">&nbsp;</th>
            </tr>
            <tr>
                <td colspan="10"><img src="wallpaper_project.jpg" height="50%" width="100%"></img></td>
            </tr>
        </table>

        <?php
        } elseif ($role == "Faculty") {
            ?>
        <!DOCTYPE html
            PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="css/bootstrap.css">
            <script src="js/bootstrap.js"></script>
            <style>
            a link {
                text-decoration: none;
            }

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
            </style>
            <title>Project Management System</title>
        </head>

        <body>
            <div class="container">
                <div class="row row1">
                    <div class="col-sm-5">
                        <img height="250px" src="logo1.png" alt="LOGO">
                    </div>
                    <div class="col-sm-7">
                        <p class="project_name">Task <mark>Monitor</mark></p>
                    </div>
                </div>
                <th width="140" scope="col">
                    <font color="White" size="5">
                        <?php
                                print $role;
                                echo "<br/>";
                                print $user;
                                ?>
                    </font>
                </th>
                <th width="63" scope="col">&nbsp;</th>
                </tr>
                </table>
                <table width="100%" border="0" cellspacing="00" cellpadding="00">
                    <tr bgcolor="white">
                        <th width="7%" scope="col">
                            <h4>&nbsp;</h4>
                        </th>
                        <th width="15%" scope="col"><a href="FACULTY/skill.php">Skill Matrix</a></th>
                        <th width="14%" scope="col"><a href="FACULTY/view.php">View</a></th>
                        <th width="15%" scope="col"><a href="FACULTY/mail.php">Mail</a></th>
                        <th width="13%" scope="col"><a href="FACULTY/meeting.php">Meeting</a></th>
                        <th width="15%" scope="col"><a href="FACULTY/#">Reprots</a></th>
                        <th width="15%" scope="col"><a href="logout.php">Logout</a></th>
                        <th width="6%" scope="col">&nbsp;</th>
                    </tr>
                    <tr>
                        <td colspan="10"><img src="wallpaper_project.jpg" height="50%" width="100%"></img></td>
                    </tr>
                </table>
                <?php
                } else {
                    ?>
                <!DOCTYPE html
                    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">

                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <link rel="stylesheet" href="css/bootstrap.css">
                    <script src="js/bootstrap.js"></script>
                    <style>
                    a link {
                        text-decoration: none;
                    }

                    .tr_student {
                        height: 300px;
                    }

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

                    .link_stud {
                        text-decoration: none;
                        color: black;
                    }
                    </style>
                    <title>Project Management System</title>
                </head>
                <div>

                    <body>
                        <div class="container">
                            <div class="row row1">
                                <div class="col-sm-5">
                                    <img height="250px" src="logo1.png" alt="LOGO">
                                </div>
                                <div class="col-sm-7">
                                    <p class="project_name">Task <mark>Monitor</mark></p>
                                </div>
                            </div>

                            <th width="140" scope="col">
                                <font color="White" size="5">
                                    <?php
                                            print $role;
                                            echo "<br/>";
                                            print $user;
                                            ?></font>
                            </th>
                            <th width="63" scope="col">&nbsp;</th>
                            </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr bgcolor="white" style="border:1px solid black;">
                                    <th width="7%" scope="col">
                                        <h4>&nbsp;</h4>
                                    </th>
                                    <th width="13%" scope="col"><a href="STUDENT/project.php"
                                            class="link_stud">Project</a>
                                    </th>
                                    <th width="12%" scope="col">&nbsp;</th>
                                    <th width="13%" scope="col"><a href="STUDENT/skill.php" class="link_stud">View Skill
                                            Matrix</a></th>
                                    <th width="11%" scope="col">&nbsp;</th>
                                    <th width="13%" scope="col"><a href="STUDENT/mail.php" class="link_stud">Mail</a>
                                    </th>
                                    <th width="12%" scope="col">&nbsp;</th>
                                    <th width="13%" scope="col"><a href="logout.php" class="link_stud">Logout</a></th>
                                    <th width="6%" scope="col">&nbsp;</th>
                                </tr>
                                <tr>
                                    <td colspan="10"
                                        style="border-right:1px solid black; border-left:1px solid black; border-bottom:1px solid black;">
                                        <img src="wallpaper_project.jpg" height="50%" width="100%"></img>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php
                        }
                            ?>
                        </table>
                        <p>
                            <?php
                        }
                            ?>


                        </p>
                        <p>&nbsp;</p>
                        </table>
                        </table>
                </div>
        </body>