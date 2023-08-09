<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

if (isset($_POST['bppf'])) {
    if (isset($_FILES['ppf'])) {
        $file = $_FILES['ppf'];
        //file properties
        $file_name = $file['name'];
        $file_temp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        // work out the extension
        $file_ext = explode('.', $file_name);
        $file_ext =  strtolower(end($file_ext));
        $allowed = array('docx', 'doc', 'txt', 'pdf');

        if (in_array($file_ext, $allowed)) {
            if ($file_error === 0) {
                if ($file_size <= 9999999999) {
                    $file_name_new = uniqid('', TRUE) . '.' . $file_ext;
                    $file_destination = '../ppf/' . $file_name_new;
                    if (move_uploaded_file($file_temp, $file_destination)) {
                        //echo $file_destination;
                        include '../connection.php';
                        $sql = "UPDATE project SET ppf='$file_name' WHERE s_id='$user'";
                        mysqli_query($conn, $sql);
                        $conn->close();
                        header('Location:project.php');
                    }
                }
            }
        }
    }
} elseif (isset($_POST['bpsf'])) {
    if (isset($_FILES['psf'])) {
        $file = $_FILES['psf'];
        //file properties
        $file_name = $file['name'];
        $file_temp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        // work out the extension
        $file_ext = explode('.', $file_name);
        $file_ext =  strtolower(end($file_ext));
        $allowed = array('docx', 'doc', 'txt', 'pdf');

        if (in_array($file_ext, $allowed)) {
            if ($file_error === 0) {
                if ($file_size <= 9999999999) {
                    $file_name_new = uniqid('', TRUE) . '.' . $file_ext;
                    $file_destination = '../psf/' . $file_name_new;
                    if (move_uploaded_file($file_temp, $file_destination)) {
                        //echo $file_destination;
                        include '../connection.php';
                        $sql = "UPDATE project SET psf='$file_name' WHERE s_id='$user'";
                        mysqli_query($conn, $sql);
                        $conn->close();
                        header('Location:project.php');
                    }
                }
            }
        }
    }
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <style>

    </style>
    <title>Task monitor</title>
</head>
<div>

    <body>
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

            a link {
                text-decoration: none;
            }

            .tr_project {
                border: 1px solid black;
            }

            .link_pro {
                text-decoration: none;
                color: black;
            }
            </style>
            <title>Task monitor</title>
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
                <div class="row mt-1 mb-5">
                    <span class="" style="border-bottom:6px double black;"></span>
                </div>
                <table width="100%" cellspacing="00" cellpadding="00">
                    <tr class="tr_project">
                        <th width="7%" scope="col">
                            <h4>&nbsp;</h4>
                        </th>
                        <th width="13%" scope="col"><a href="project.php" class="link_pro">Project</a></th>
                        <th width="12%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="skill.php" class="link_pro">View Skill Matrix</a></th>
                        <th width="11%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="mail.php" class="link_pro">Mail</a></th>
                        <th width="12%" scope="col">&nbsp;</th>
                        <th width="13%" scope="col"><a href="../logout.php" class="link_pro">Logout</a></th>
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


                </p>

                <div style="border:1px solid black;  width:70%; margin-left: 15%; margin-top: 0px; ">
                    <br /><br /><br />
                    <form method="post" action="project.php" enctype="multipart/form-data">

                        <table width="100%" border="0" cellspacing="05" cellpadding="05">
                            <tr>
                                <th width="12%" scope="col">&nbsp;</th>
                                <th width="37%" scope="col">&nbsp;</th>
                                <th width="37%" scope="col">&nbsp;</th>
                                <th width="13%" scope="col">&nbsp;</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <div style="border:1px solid black;"><br />
                                        <h3>Project Proposal</h3><br /><input type="file"
                                            name="ppf" /><br /><br /><input type="submit" name="bppf" value="upload"
                                            class="mt-3" /><br /><br />
                                    </div>
                                </td>
                                <td align="center">
                                    <div style="border:1px solid black;"><br />
                                        <h3>Project Specification</h3><br /><input type="file"
                                            name="psf" /><br /><br /><input type="submit" name="bpsf" value="upload"
                                            class="mt-3" /><br /><br />
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                    </form>
                    </table>
                    <br /><br />
                    <form method="post" action="project.php">
                        <div style="background-color: white; width: 30%; margin-left: 35%">
                            <table align="center">
                                <tr>
                                    <td>&nbsp;<br /><br /></td>
                                    <?php
                                            if (isset($_POST['feedback'])) {
                                                include '../connection.php';
                                                $sql1 = "select * from project where s_id ='$user' ";
                                                $rec = mysqli_query($conn, $sql1);

                                                while ($std = mysqli_fetch_assoc($rec)) {
                                            ?>

                                    <td colspan="2" align="center"><textarea name="feedback" rows="5" cols="30"
                                            readonly="readonly"
                                            placeholder="FEEDBACK"><?php echo $std['remark']; ?> </textarea> </td>
                                    <td></td>
                                </tr>
                                <?php
                                                }
                                            } ?>
                                <tr>
                                    <td></td>
                                    <td colspan="2" align="center"><input type="submit" name="feedback"
                                            value="Get Feedback" /><br /><br /></td>
                                    <td>&nbsp;</td>
                                </tr>
                    </form>

                    </table>
                </div>
            </div>
        </body><br /><br />
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</div>

</html>