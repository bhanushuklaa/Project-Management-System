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

      .link_student {
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
          <table width="100%" cellspacing="01" cellpadding="01">
              <tr style="border:1px solid black;">
                  <th width="5%" scope="col">
                      <h4>&nbsp;</h4>
                  </th>
                  <th width="12%" scope="col"><a href="student.php" class="link_student">Add Student</a></th>
                  <th width="11%" scope="col"><a href="faculty.php" class="link_student">Add Faculty</a></th>
                  <th width="11%" scope="col"><a href="stsearch.php" class="link_student">Search Student</a></th>
                  <th width="11%" scope="col"><a href="fa_search.php" class="link_student">Search Faculty </a></th>
                  <th width="11%" scope="col"><a href="allocate.php" class="link_student">Allocate</a></th>
                  <th width="11%" scope="col"><a href="skill.php" class="link_student">Skill Matrix</a></th>
                  <th width="11%" scope="col"><a href="report.php" class="link_student">Reports</a></th>
                  <th width="11%" scope="col"><a href="../logout.php" class="link_student">Logout</a></th>
                  <th width="6%" scope="col">&nbsp;</th>
              </tr>
          </table>
          <br /><br />
          </p>
          <form method="post" action="st.php">
              <div style="border:1px solid black; margin-left: 25%; alignment-adjust: central; width: 50%">
                  <h2 style="font-family:time new roman; text-align:center;" class="mt-2"><span
                          style="border-bottom:1px solid black;">Add
                          Student</span></h2>
                  <table align="center" width="100%" cellspacing="01" cellpadding="05">
                      <tr>
                          <th width="7%" scope="col">&nbsp;</th>
                          <th width="43%" scope="col">&nbsp;</th>
                          <th width="44%" scope="col">&nbsp;</th>
                          <th width="6%" scope="col">&nbsp;</th>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Student ID&nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="text" size="20" id="in" name="id" />
                              <font color="red" size="4">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Name&nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="text" id="in" name="stname" />
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Email&nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="email" id="in" name="stemail" />
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Phone&nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="text" id="in" name="stphone" />
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Password &nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="password" id="in" name="stpass" />
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Year&nbsp;:&nbsp;</font>
                          </td>
                          <td><input type="text" id="in" name="styear" />
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td align="right">
                              <font size="5">Stream&nbsp;: &nbsp;</font>
                          </td>
                          <td><select name="stream" style="width: 193px; height: 2em; font-size: 15px;">
                                  <option value="Selcet">Select</option>
                                  <option value="CSE">CSE</option>
                                  <option value="COM">COM</option>
                                  <option value="EE">EE</option>
                              </select>
                              <font color="red">*</font>
                          </td>
                          <td>&nbsp;</td>
                      </tr>

                      <tr align="center">
                          <td>&nbsp;</td>
                          <br />
                          <td colspan="2"><input type="submit" name="add" value="Add" id="bt" class="mt-4" />

                          <td>&nbsp;</td>
                      </tr>
                  </table> <br /><br />
              </div>
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
      <p>
          <?php
        }
            ?>



      <p>&nbsp;</p>