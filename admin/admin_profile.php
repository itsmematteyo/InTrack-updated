<?php
$pageStyles = '<link rel="stylesheet" href="../styles/admin-profile.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Admin Profile</h1>
            <ul class="breadcrumb">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a class="active" href="#">Admin Profile</a></li>
            </ul>
        </div>
    </div>

    <div class="admin-profile-container">
        <div class="admin-view-card">
            <div class="admin-user-header">
                <h2>Admin Account</h2>
            </div>
        </div>
        
        <div class="admin-profile-body">
            <div class="admin-profile-role">
                <div class="profile-picture-container">
                    <div class="profile-picture-wrapper">
                        <img src="../pfp.jpg" alt="Admin Profile" class="profile-picture">
                        <div class="upload-overlay">
                            <i class='bx bx-cloud-upload'></i>
                            <span>Upload Image</span>
                        </div>
                    </div>
                    <div class="profile-info">
                        <h1>Admin Name</h1>
                        <span class="admin-profile-role-label">Administrator</span>
                    </div>
                </div>

                <div class="admin-profile-group">
                    <h3>Account Details</h3>
                    <div class="admin-form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="admin-form-input" value="admin123" disabled>                        
                    </div>
                    <div class="admin-form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="admin-form-input" value="jairusbacsa@gmail.com" required>
                    </div>
                    <div class="admin-form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" class="admin-form-input" value="Jairus Bacsa">
                    </div>
                    <div class="admin-form-group">
                        <label for="password">Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" name="password" class="admin-form-input" placeholder="New your password">
                        </div>
                    </div>
                    <div class="admin-form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" name="confirm_password" class="admin-form-input" placeholder="Confirm your password">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="admin-profile-footer">
            <div class="admin-profile-action">
                <button class="admin-reset-btn">
                    <i class="bx bx-reset"></i>Reset
                </button>
                <button class="admin-save-btn">
                    <i class="bx bx-save"></i>Save Changes
                </button>
            </div>
        </div>
    </div>
</main>

<?php
$pageScripts = '<script src="../scripts/admin-profile.js"></script>';
 include '../includes/footer.php'; 
?>