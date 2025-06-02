<?php
$pageStyles = '<link rel="stylesheet" href="../styles/edit_user.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Users Accounts</h1>
            <ul class="breadcrumb">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a href="users.php">Users</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a class="active" href="#">Edit User</a></li>
            </ul>
        </div>
    </div>

    <div class="edit-user-container">
        <div class="edit-view-card">
            <div class="edit-user-header">
                <h2>Edit User Account</h2>
                <span class="user-status active">Active</span>
            </div>

            <div class="edit-user-body">
                <div class="edit-user-row">
                    <div class="edit-user-group">
                        <h3>Basic Information</h3>
                        <div class="edit-user-item">
                            <div class="user-form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" class="user-form-input" value="Doe">
                            </div>
                            <div class="user-form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" class="user-form-input" value="John">
                            </div>
                            <div class="user-form-group">
                                <label for="middlename">Middlename</label>
                                <input type="text" name="middlename" class="user-form-input" value="Smith">
                            </div>
                        </div>
                        <div class="edit-user-group">
                            <h3>Account Details</h3>
                            <div class="user-form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="user-form-input" value="jairusbacsa@gmail.com">
                                <label for="contact">Contact No.</label>
                                <input type="text" name="contact" class="user-form-input" value="09123456789">
                            </div>
                            <div class="user-form-group">
                                <h3>Student Identification</h3>
                                <label for="student_id">Student ID</label>
                                <input type="text" name="student_id" class="user-form-input" value="2023-12345">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="edit-user-footer">
                <button class="edit-bck-btn">
                   <i class='bx bx-arrow-back'></i>Back
                </button>
                <div class="edit-user-action">
                    <button class="edit-user-reset">
                        <i class='bx bx-reset'></i>Reset
                    </button>
                    <button class="edit-user-update">
                        <i class='bx bx-save'></i>Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>