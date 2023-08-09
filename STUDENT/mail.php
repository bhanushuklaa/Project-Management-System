<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';


if (isset($_POST['submit'])) {
    $to = $_POST['to'];
    $msg = $_POST['msg'];


    if (!empty($to)) {

        $sql = "INSERT INTO `pmas`.`st_mail` (`s_mail_id`, `s_id`, `f_id`, `mag`) VALUES ('', '$user', '$to', '$msg');";
        mysqli_query($conn, $sql);
        $conn->close();
        header('Location:mail.php');
    } else {
        echo 'Please fill up all fields';
        header('Location:mail.php');
    }
}

if (empty($_SESSION['Email'])) {
    header("location:index.php");
} else {
    if ($role == "Admin") {
?>
<?php
        header('Location:../Admin.php');
    } elseif ($role == "Faculty") {
    ?>

<?php
        header('Location:../Admin.php');
    } else {
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

    .link_mail {
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
                <th width="13%" scope="col"><a href="project.php" class="link_mail">Project</a></th>
                <th width="12%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="skill.php" class="link_mail">View Skill Matrix</a></th>
                <th width="11%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="mail.php" class="link_mail">Mail</a></th>
                <th width="12%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="../logout.php" class="link_mail">Logout</a></th>
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
        <p>&nbsp;</p>


        <form method="post" action="mail.php">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
                <tr style="border:1px solid black;">
                    <th>
                        <h4>&nbsp;</h4>
                    </th>
                    <th><input style="width: 5em;  height: 2em; font-size: 15px;" type="submit" value="Compose"
                            name="compose" /></th>
                    <th>&nbsp;</th>
                    <th><input style="width: 5em;  height: 2em; font-size: 15px;" type="submit" value="Inbox"
                            name="inbox" /></th>
                    <th>&nbsp;</th>
                    <th><input style="width: 5em;  height: 2em; font-size: 15px;" type="submit" value="Sent Mail"
                            name="sent" /></th>
                    <th>&nbsp;</th>
                </tr>
                <?php

                        if (isset($_POST['compose'])) {
                            $sql1 = "select * from project where s_id ='$user' ";
                            $rec = mysqli_query($conn, $sql1);
                            $std = mysqli_fetch_assoc($rec);
                        ?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td colspan="3" align="center">
                        <br /><br />
                        <div style="background-color: beige; width: 40%; margin-left: 5%; border: black;">
                            <br /><br />
                            <font size="5">To : &nbsp;&nbsp; </font><input id="in" type="text" name="to" readonly
                                value="<?php echo $std["f_id"]; ?>" /><br /><br />
                            <font size="5"> From : </font><input id="in" type="text" name="from"
                                value="<?php echo $user; ?>" readonly /><br /><br />
                            <textarea name="msg" cols="30" rows="5" placeholder="Message"></textarea><br /><br />
                            <input id="bt" type="submit" value="Send" name="submit" />
                            <br /><br />
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <?php
                        } elseif (isset($_POST['inbox'])) {
                        ?>

                <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="red">

                    <?php
                                echo "<br/>";
                                echo "<br/>";
                                echo "<br/>";
                                echo "<tr>";
                                echo "<th>" . "FROM" . "</th>";
                                echo "<th>" ?> &nbsp; <?php "</th>";
                                                        echo "<th>" . "MESSAGE" . "</th>";
                                                        echo "</tr>";
                                                        $sql1 = "select * from mail where s_id ='$user'";
                                                        $rec = mysqli_query($conn, $sql1);

                                                        echo "<tr>";
                                                        while ($std = mysqli_fetch_assoc($rec)) {
                                                            if ($std['from'] = "supervisor") {
                                                        ?> <tr bgcolor="beige" align="center"><?php
                                                                                                //echo "<tr>";
                                                                                                echo "<td>" . $std['f_id'] . "<td/>";
                                                                                                echo "<td>" . $std['msg'] . "<td/>";
                                                                                                ?> </tr> <?php
                                                                                                            //echo "<tr/>";
                                                                                                        }
                                                                                                    }

                                                                                                            ?> </table>
                <?php

                        } elseif (isset($_POST['sent'])) {
                        ?>
                <table width="40%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="red">

                    <?php

                                echo "<br/>";
                                echo "<br/>";
                                echo "<br/>";
                                echo "<tr>";
                                echo "<th>" . "TO" . "</th>";
                                echo "<th>" ?>
                    &nbsp;
                    <?php "</th>";
                                echo "<th>" . "MESSAGE" . "</th>";
                                echo "</>";
                                $sql1 = "select * from st_mail where s_id ='$user' ";
                                $rec = mysqli_query($conn, $sql1);

                                echo "<tr>";
                                while ($std = mysqli_fetch_assoc($rec)) {
                                ?>
                    <tr bgcolor="beige" align="center"><?php
                                                                        echo "<td>" . $std['f_id'] . "<td/>";
                                                                        echo "<td>" . $std['mag'] . "<td/>";
                                                                        ?>
                    </tr> <?php
                                        }
                                        //echo "<tr/>";
                                            ?>
                </table> <?php

                                    }

                                        ?>

            </table>
        </form>