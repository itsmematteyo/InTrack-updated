<?php
$pageStyles = '<link rel="stylesheet" href="../styles/users.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Users Accounts</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a class="active" href="#">Users</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="user-page-container">
        <div class="user-tools-wrapper">
            <div class="user-search-filter">
                <form action="#" method="GET" class="user-search-form">
                    <div class="user-form-input">
                        <input type="text" name="search" placeholder="Search students...">
                        <button type="submit" class="user-search-btn"><i class="bx bx-search"></i></button>
                    </div>
                </form>
                <div class="user-filter-group">
                    <select name="course-filter" id="course-filter">
                        <option value="">All Courses</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                        <option value="BSIS">BSIS</option>
                    </select>
                    <select name="status-filter" id="status-filter">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="table-data">
            <div class="head">
                <h3>Student Accounts</h3>
                <span>Update as of June 10, 2025</span>
            </div>
            <div class="user-table-responsive">
                <table class="user-table">
                    <thead>
                        <tr>
                            <td>Full Name</td>
                            <td>Email</td>
                            <td>Course</td>
                            <td>Registered</td>
                            <td>Applications</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>BSIT</td>
                            <td>May 15, 2023</td>
                            <td>5</td>
                            <td><span class="user-status active">Active</span></td>
                            <td>
                                <div class="user-actions">
                                    <a href="edit_user.php?id=1" class="user-edit-btn" title="Edit">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <a href="#" class="user-deactivate-btn" title="Deactivate">
                                        <i class="bx bx-user-x"></i>
                                    </a>
                                    <a href="#" class="user-archive-btn" title="Archive">
                                        <i class="bx bx-archive"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>BSCS</td>
                            <td>Feb 20, 2023</td>
                            <td>8</td>
                            <td><span class="user-status active">Active</span></td>
                            <td>
                                <div class="user-actions">
                                    <a href="edit_user.php?id=2" class="user-edit-btn" title="Edit">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <a href="#" class="user-deactivate-btn" title="Deactivate">
                                        <i class="bx bx-user-x"></i>
                                    </a>
                                    <a href="#" class="user-archive-btn" title="Archive">
                                        <i class="bx bx-archive"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>michael.j@example.com</td>
                            <td>BSIS</td>
                            <td>Jul 10, 2023</td>
                            <td>2</td>
                            <td><span class="user-status inactive">Inactive</span></td>
                            <td>
                                <div class="user-actions">
                                    <a href="edit_user.php?id=3" class="user-edit-btn" title="Edit">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <a href="#" class="user-activate-btn" title="Activate">
                                        <i class="bx bx-user-check"></i>
                                    </a>
                                    <a href="#" class="user-archive-btn" title="Archive">
                                        <i class="bx bx-archive"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>