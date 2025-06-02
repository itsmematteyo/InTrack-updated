<?php
$pageStyles = '<link rel="stylesheet" href="../styles/approvals_view.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Job Approval Details</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a href="approvals.php">Pending Approvals</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a class="active" href="#">View Details</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="approvals-view-container">
        <div class="approvals-view-card">
            <div class="approvals-view-header">
                <h2>Web Developer Position</h2>
                <span class="approvals-status pending">Pending Approval</span>
            </div>

            <div class="approvals-view-body">
                <div class="approvals-view-row">
                    <div class="approvals-view-group">
                        <h3>Employer Information</h3>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Employer ID:</span>
                            <span class="approvals-view-value">EMP-1001</span>
                        </div>
                    </div>

                    <div class="approvals-view-group">
                        <h3>Job Details</h3>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Job Title:</span>
                            <span class="approvals-view-value">Web Developer</span>
                        </div>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Type of Employment:</span>
                            <span class="approvals-view-value">Full-time</span>
                        </div>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Wage/Salary per Month:</span>
                            <span class="approvals-view-value">$3,500</span>
                        </div>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Desired Hours per Week:</span>
                            <span class="approvals-view-value">40 hours</span>
                        </div>
                    </div>
                </div>

                <div class="approvals-view-group">
                    <h3>Job Description</h3>
                    <div class="approvals-view-text">
                        <p>We are looking for a skilled Web Developer who will be responsible for developing and maintaining our company websites. The ideal candidate should have strong programming skills and experience with modern web technologies.
                        Responsibilities include designing user interfaces, implementing backend functionality, optimizing performance, and ensuring cross-browser compatibility.
                        </p>

                    </div>
                </div>

                <div class="approvals-view-row">
                    <div class="approvals-view-group-bottom">
                        <h3>Contact Information</h3>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Contact Person:</span>
                            <span class="approvals-view-value">John Smith</span>
                        </div>
                        <div class="approvals-view-item">
                            <span class="approvals-view-label">Email:</span>
                            <span class="approvals-view-value">hr@techcompany.com</span>
                        </div>
                    </div>

                    <div class="approvals-view-group-bottom">
                        <h3>Skill Requirements</h3>
                        <div class="approvals-view-text">
                            <ul class="approvals-view-list">
                                <li>Proficiency in HTML, CSS, JavaScript</li>
                                <li>Experience with React or Angular</li>
                                <li>Knowledge of Node.js and Express</li>
                                <li>Familiarity with database systems (MySQL, MongoDB)</li>
                                <li>Understanding of RESTful APIs</li>
                                <li>Version control with Git</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="approvals-view-footer">
                <button class="approvals-back-btn">
                    <i class='bx bx-arrow-back'></i> Back
                </button>
                <div class="approvals-action-btns">
                    <button class="approvals-reject-btn">Disapprove</button>
                    <button class="approvals-approve-btn">Approve</button>
                </div>
            </div>
        </div>
    </div>

</main>

<?php 
$pageScript = ' <script src="../scripts/approval_view.js"></script>';
include '../includes/footer.php'; 
?>