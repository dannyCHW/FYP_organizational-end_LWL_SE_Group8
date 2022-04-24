<?php
echo"
    <div class='sidebar'>
      <div class='logo-details'>
        <i class='bx bxl-c-plus-plus' style='visibility: hidden;'></i>
        <span class='logo_name'>Smart Form</span>
      </div>
        <ul class='nav-links'>
          <li>
            <a href='adminDashHTML.php' >
              <i class='bx bx-grid-alt' ></i>
              <span class='links_name'>Dashboard (Home)</span>
            </a>
          </li>
          <li>
            <a href='adminUserManagementHTML.php'>
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class='links_name'>User Management</span>
            </a>
          </li>
          <li>
            <a href='adminEventListHTML.php'>
              <i class='bx bx-coin-stack' ></i>
              <span class='links_name'>Verify Event</span>
            </a>
          </li>
          <li>
            <a href='adminVerifyAccountHTML.php'>
              <i class='bx bx-book-alt' ></i>
              <span class='links_name'>Verify Account</span>
            </a>
          </li>
          <li>
            <a href='adminGenReportHTML.php'>
              <i class='bx bx-user' ></i>
              <span class='links_name'>Generate Report</span>
            </a>
          </li>
          <li>
            <a href='adminProfileHTML.php'>
              <i class='bx bx-user' ></i>
              <span class='links_name'>Profile</span>
            </a>
          </li>

          <li class='log_out'>
            <a href='./checkSession/adminLogoutSession.php'>
              <i class='bx bx-log-out'></i>
              <span class='links_name'>Log out</span>
            </a>
          </li>
        </ul>
    </div>
  "
 ?>
