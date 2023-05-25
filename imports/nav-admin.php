
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Rich Tech</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">

              <?php
                include '../imports/config.php';
                
                $sql_query = "SELECT * FROM notift WHERE euid='admin' ORDER BY id DESC LIMIT 4;";
                $result = mysqli_query($conn,$sql_query);
                $count = mysqli_num_rows($result);
                echo $count;
              ?>

            </span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              <?php
                echo "You have $count new Recent Activites &emsp;&emsp;&emsp;";
              ?>
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <?php

              $sql_query = "SELECT * FROM notift WHERE euid='admin' ORDER BY id DESC LIMIT 4;";
              $result = mysqli_query($conn,$sql_query);
              while($row = mysqli_fetch_assoc($result)){
                echo '<li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>';
                echo '<div><h4>'.$row['ttype'].'</h4>';
                echo '<p class="notification-text">'.$row['nmsg'].'</p>';
                $newdate = date("d M, Y", strtotime($row['ddate']));
                echo '<p class="notification-text">'.$newdate.'</p>';
                echo '</li></div>';

                echo '<li><hr class="dropdown-divider"></li>';
              }

            ?>

            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"> Admin </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span> Previliged </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../admin/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="../MCQ/dashboard.php">
          <i class="bi bi-people"></i>
          <span>MCQ Test</span>
        </a>
      </li>

            <li class="nav-item">
        <a class="nav-link " href="../admin/attendance.php">
          <i class="bi bi-people"></i>
          <span>Attendance</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#finance-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="finance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
            <a href="../admin/finance.php">
              <i class="bi bi-circle"></i><span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="../admin/transaction.php">
              <i class="bi bi-circle"></i><span>Transaction Entry</span>
            </a>
          </li>
          </ul>
      </li>



      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#salary-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Salary</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="salary-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
            <a href="../admin/allsalary.php">
              <i class="bi bi-circle"></i><span>View Salary</span>
            </a>
          </li>

          <li>
            <a href="../admin/salpayment.php">
              <i class="bi bi-circle"></i><span>Salary Payment</span>
            </a>
          </li>
          </ul>
      </li>
    <!-- End Salary Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#client-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Client</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="client-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../admin/view_cli.php">
              <i class="bi bi-circle"></i><span>View All Clients</span>
            </a>
          </li>
          <li>
            <a href="../admin/add_cli.php">
              <i class="bi bi-circle"></i><span>Add Client</span>
            </a>
          </li>
          <li>
            <a href="../admin/browse_cli.php">
              <i class="bi bi-circle"></i><span>Browse Client</span>
            </a>
          </li>
          <li>
            <a href="../admin/payment.php">
              <i class="bi bi-circle"></i><span>Payment Received</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#projects-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="projects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../admin/assign.php">
              <i class="bi bi-circle"></i><span>Assign Work</span>
            </a>
          </li>
          <li>
            <a href="../admin/change_status.php">
              <i class="bi bi-circle"></i><span>Update Status</span>
            </a>
          </li>
          <li>
            <a href="../admin/project_report.php">
              <i class="bi bi-circle"></i><span>Project Report</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#employees-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="employees-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="../admin/addEmployee.php">
              <i class="bi bi-circle"></i><span>Add Employee</span>
            </a>
          </li>
          <li>
            <a href="../admin/all_emp.php">
              <i class="bi bi-circle"></i><span>All Employees</span>
            </a>
          </li>
          <li>
            <a href="../admin/browse_emp.php">
              <i class="bi bi-circle"></i><span>Browse Employee</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
