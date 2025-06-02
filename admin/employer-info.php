<?php
$pageStyles = '<link rel="stylesheet" href="../styles/employer-info.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Employers Accounts</h1>
            <ul class="breadcrumb">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a href="employer.php">Employers</a></li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li><a class="active" href="#">Employer Information</a></li>
            </ul>
        </div>
    </div>

    <div class="employer-info-container">
        <div class="employer-view-card">
            <div class="employer-info-header">
                <h2>Employer Information</h2>
                <span class="employer-status active">Active</span>
            </div>

            <div class="employer-info-body">
                <div class="employer-info-row">
                    <div class="employer-info-group">
                        <h3>Company Information</h3>
                        <div class="logo-preview-container">
                            <label class="logo-preview-label">Company Logo</label>
                            <div class="logo-preview">          
                                <img src="../dept.png" alt="Company Logo">
                            </div>
                        </div>
                        <div class="employer-info-item">
                            <div class="employer-form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" name="companyname" class="employer-form-input" value="Tech Solutions Inc.">

                                <div class="employer-form-group">
                                    <label for="contactperson">Contact Person</label>
                                    <input type="text" name="contactperson" class="employer-form-input" value="Jane Doe">
                                </div>

                                <div class="employer-form-group">
                                    <label for="companyaddress">Company Address</label>
                                    <input type="text" name="companyaddress" class="employer-form-input" value="123 Tech Street, Silicon Valley">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="employer-info-group">
                        <h3>Contact Information</h3>
                        <div class="employer-form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="employer-form-input" value="jairusbacsa@gmail.com">
                            <label for="contact">Contact No.</label>
                            <input type="text" name="contact" class="employer-form-input" value="09123456789">
                        </div>
                    </div>
                </div>
            </div>

            <div class="employer-info-footer">
                <button class="employer-bck-btn" onclick="window.history.back()">
                    <i class='bx bx-arrow-back'></i>Back
                </button>
                <div class="employer-info-action">
                    <button class="employer-info-reset">
                        <i class='bx bx-reset'></i>Reset
                    </button>
                    <button class="employer-info-update">
                        <i class='bx bx-save'></i>Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>