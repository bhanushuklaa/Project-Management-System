<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';

if (isset($_POST['allocate'])) {
    $id = $_POST['facultyid'];
    $sql = "INSERT INTO `pmas`.`request` (`request_id`, `s_id`, `f_id`) VALUES ('', '$user', '$id');";
    mysqli_query($conn, $sql);
    $conn->close();
    header('Location:skill.php');
}




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
    body a link {
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
    <title>Task Monitor</title>
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
        <?php
            header('Location:../Admin.php');
        } elseif ($role == "Faculty") {
            header('Location:../Admin.php');
            ?>

        <?php
        } else {
            ?>
        <!DOCTYPE html
            PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="bootstrap.css">
            <script src="bootstrap.js"></script>
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

            .link_skill {
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
                    <div class="col-sm-5">
                        <p class="project_name">Task <mark>Monitor</mark></p>
                    </div>
                </div>
                <br><br>
                <table>
                    <tr>

                        <th scope="col">
                            <span style="border-bottom:2px solid black;">
                                <font size="5">
                                    <?php
                                            print $role;
                                            echo "<br/>";
                                            print $user;
                                            ?></font>
                            </span>
                        </th>
                        <th width="63" scope="col">&nbsp;</th>
                    </tr>
                </table><br><br>
                <table width="100%" border="0" cellspacing="00" cellpadding="00">
                    <tr style="border:1px solid black;">
                        <th width="7%" scope="col">
                            <h4>&nbsp;</h4>
                        </th>
                        <th width="13%" scope="col"><a href="project.php" class="link_skill">Project</a></th>
                        <th width="12%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="skill.php" class="link_skill">View Skill Matrix</a></th>
                        <th width="11%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="mail.php" class="link_skill">Mail</a></th>
                        <th width="12%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="../logout.php" class="link_skill">Logout</a></th>
                        <th width="6%" scope="col">&nbsp;</th>
                    </tr>
                    <?php
                    }
                        ?>
                </table>
                <p>
                    <?php
                    }
                        ?>


                <div style="border:1px solid black; width: 50%; margin-left: 25%; margin-top: 0px; ">
                    <br /><br />
                    <form method="post" action="skill.php">
                        <table align="center" style="border:1px solid black;" width="30%">
                            <tr>

                                <td align="center">
                                    <br /><br />
                                    <?php
                                            include '../connection.php';
                                            $sql = "select f_id from faculty";
                                            $result =  mysqli_query($conn, $sql)
                                            ?> <select name="faculty">
                                        <option selected="selected">
                                            <h3>Supervisors</h3>
                                        </option>
                                        <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $category = $row['f_id'];
                                                ?>
                                        <option selected="selected" value="<?php echo $category; ?>">
                                            <?php echo $category; ?></option>
                                        <?php
                                                }
                                                ?>
                                    </select> <br /><br />
                                    <input type="submit" name="asses" value="View Skill Matrix" /><br /><br />
                                </td>

                            </tr>
                        </table>
                    </form>



                    <br /><br /><br />




                    <form method="post" action="skill.php">
                        <div style="border:1x solid black; width: 60%; margin-left: 20%;">
                            <table width="50%" cellpadding="5" cellspacing="5" border="0" align="center">
                                <?php
                                        if (isset($_POST['asses'])) {
                                            $fid = $_POST['faculty'];
                                            echo "<tr>"; ?>
                                <td>Faculty ID</td>
                                <td><input type="text" name="facultyid" readonly value="<?php echo $fid; ?>"
                                        readonly</td>
                                    <?php
                                                echo "</tr>";

                                                $sql1 = "select * from faculty where f_id ='$fid' ";
                                                $rec = mysqli_query($conn, $sql1);
                                                while ($std = mysqli_fetch_assoc($rec)) {
                                                    echo "<tr>";
                                                    echo "<td>" . "Name" . "</td>";
                                                    echo "<td>" ?> <input type="text" name="stid" readonly
                                        value="<?php echo $std['name']; ?>" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>" . "Qualification" . "</td>";
                                                    echo "<td>" ?>
                                    <input type="text" name="faqu" readonly
                                        value="<?php echo $std['qualification']; ?>" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>" . "Domain" . "</td>";
                                                    echo "<td>" ?>
                                    <input type="text" name="fad" readonly value="<?php echo $std['domain']; ?>" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>" . "Research" . "</td>";
                                                    echo "<td>" ?>
                                    <input type="text" name="far" readonly value="<?php echo $std['research']; ?>" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>" . "Others" . "</td>";
                                                    echo "<td>" ?>
                                    <input type="text" name="fao" readonly value="<?php echo $std['others']; ?>" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td></td>";
                                                    echo "<td>" ?>
                                    <input type="submit" name="allocate" readonly value="Request For Allocate" />
                                    <?php "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>

                            </table>
                        </div>
                    </form>
                    <br /><br /><br />
                </div>