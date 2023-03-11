<?php include('function.php');?>

<div class="header">
    <div class="header-left">
    <a href="./?page=home" class="logo">
            <!-- <img src="assets/img/logo.png" alt="Logo"> -->
            <p class="m-0"><b>Bab-ul-Islam</b></p>
        </a>
        <a href="./?page=home" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
    </a>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg"
                        width="31" alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?php// echo $_SESSION['username']; ?></h6>
                        <h6><?php echo htmlspecialchars($_SESSION["username"]); ?></h6>
                        <p class="text-muted mb-0"><?php// echo $_SESSION['username']; ?></p>
                    </div>
                </div>
                <a class="dropdown-item" href="./?page=profile">My Profile</a>
                <a class="dropdown-item" href="./?page=logout">Logout</a>
            </div>
        </li>
    </ul>
</div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll" style="overflow: auto;">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="">
                    <a href="./?page=home"><i class="fas fa-user-graduate"></i> <span> Admin Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="./?page=students">Student List</a></li>
                        <!-- <li><a href="./?page=student-details">Student View</a></li> -->
                        <!-- <li><a href="./?page=add-student" class="">Student Add</a></li>
                        <li><a href="./?page=edit-student">Student Edit</a></li> -->
                    </ul>
                </li>
                <li class="submenu ">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="./?page=teachers" class="">Teacher List</a></li>
                        <!-- <li><a href="./?page=teacher-details">Teacher View</a></li> -->
                        <!-- <li><a href="./?page=add-teacher">Teacher Add</a></li>
                        <li><a href="./?page=edit-teacher">Teacher Edit</a></li> -->
                    </ul>
                </li>
<!--                Class Section -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Class</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="./?page=class" class="">Class List</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="submenu ">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="./?page=fees-collections" >Fees Collection</a></li>
                        <li><a href="./?page=expenses" class="">Expenses</a></li>
                        <li><a href="./?page=salary">Salary</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
