<?php
session_start();
if (empty($_SESSION['email'])) {
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <!--bootstrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Bootstrap CDN JAVASCRIPT-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

    .table {
        border-top: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
    }
    </style>
    <title>Task monitor</title>
</head>

<body>
    <div class="container w-100">
        <!--
        <table width="100%" cellspacing="00" cellpadding="00">
            <tr bgcolor="#f4f4f4" style="height:200px; border-bottom:4px double black;">
                <th width=" 7%" scope="col">&nbsp;</th>
                <th width="164" scope="col"><img height="200px" src="logo1.png" alt="LOGO"></th>
                <th width="646" scope="col">
                    <font size="8" color="Blue">Task Monitor</font>
                </th>
                <th width="13%" scope="col">
                    <font size="5" color="White">&nbsp;</font>
                </th>
                <th width="6%" scope="col">&nbsp;</th>
            </tr>-->
        <div class="row row1">
            <div class="col-sm-5">
                <img height="250px" src="logo1.png" alt="LOGO">
            </div>
            <div class="col-sm-7">
                <p class="project_name">Task <mark>Monitor</mark></p>
            </div>
        </div>
        <div class="row mt-5">
            <span style="border-bottom:4px double black;"></span>
            <div class="col-sm-12 mt-5 table">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><br /><br />
                        <div style="width:50%;margin-left:24%;border:1px solid black;">
                            <br><br>
                            <form name="login" action="chk.php" method="post">

                                <table width="100%" cellspacing="02" cellpadding="05">
                                    <tr>
                                        <th colspan="2" scope="col">
                                            <center>
                                                <font size="6"><u>LOGIN</u></font>
                                            </center>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <font size="5">ID&nbsp;:&nbsp;</font>
                                        </td>
                                        <td><input style="height: 20px; font-size: 15px;" type="text" name="id" /><br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <font size="5">Password&nbsp;:&nbsp;</font>
                                        </td>
                                        <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <font size="5">Login_As&nbsp;:&nbsp;</font>
                                        </td>
                                        <td>
                                            <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
                                                <option value="Student">Student</option>
                                                <option value="Faculty">Faculty</option>
                                                <option value="Admin">Admin</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><br><input type="submit"
                                                style="width: 4em;  height: 2em; font-size: 20px;" name="register"
                                                value="Submit" /></td>
                                    </tr>
                                </table>

                                <br />
                                &nbsp;
                            </form>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </table>

            </div>
        </div>
    </div>
</body>

</html>

<?php
} else {
    header("location:Admin.php");
}

?>