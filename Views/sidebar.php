<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #3A4851;">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link" style = "background-color: #3A4851;">
            <img src="../img/logo.png" alt="Teradata Logo" style="height: 30%; width: 50%;padding-left: 5%;">
        </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $name;?></a>
                </div>
            </div>
 <!-- Sidebar Menu -->
 <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="admin.php" class="nav-link">
                            <i class=" fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                            <i class="fas fa-plus-square"></i>
                            <p>
                                Add Exam
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
							<!-- <i class="nav-icon fas fa-book"></i> -->
                            <i class="fas fa-plus-square"></i>
                            <p>
                                Add user
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_examineess.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Examinee</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                            <i class="far fa-eye"></i>
                            <p>
                                View Exam
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
							<!-- <i class="nav-icon fas fa-book"></i> -->
                            <i class="far fa-eye"></i>
                            <p>
                                View Answers
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>MCQ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Essay</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="retrieve_users.php" class="nav-link">
                            <i class="far fa-eye"></i>
                            <p>
                                View Results
                            </p>
                        </a>
                    </li>
					<li class="nav-item">
                        <a href="exam_versions.php" class="nav-link">
                            <i class="fas fa-list"></i>
                            <p>
                                View Exam versions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../Controllers/logout_controller.php" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>
                                Sign out
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>