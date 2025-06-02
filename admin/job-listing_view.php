<?php
$pageStyles = '<link rel="stylesheet" href="../styles/job-listing-view.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Job Listings</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a href="job-listing.php">List of Jobs</a>
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

    <div class="job-view-container">
        <div class="job-view-card">
            <div class="job-view-header">
                <h2>Web Developer Position</h2>
                <span class="job-status approved">Approved</span>
            </div>

            <div class="job-view-body">
                <div class="job-view-row">
                    <div class="job-view-group">
                        <h3>Employer Information</h3>
                        <div class="job-view-item">
                            <span class="job-view-label">Employer ID:</span>
                            <span class="job-view-value">EMP-1001</span>
                        </div>
                    </div>

                    <div class="job-view-group">
                        <h3>Job Details</h3>
                        <div class="job-view-item">
                            <span class="job-view-label">Job Title:</span>
                            <span class="job-view-value">Web Developer</span>
                        </div>
                        <div class="job-view-item">
                            <span class="job-view-label">Type of Employment:</span>
                            <span class="job-view-value">Full-time</span>
                        </div>
                        <div class="job-view-item">
                            <span class="job-view-label">Wage/Salary per Month:</span>
                            <span class="job-view-value">$3,500</span>
                        </div>
                        <div class="job-view-item">
                            <span class="job-view-label">Desired Hours per Week:</span>
                            <span class="job-view-value">40 hours</span>
                        </div>
                    </div>
                </div>

                <div class="job-view-group">
                    <h3>Job Description</h3>
                    <div class="job-view-text">
                        <p>We are looking for a skilled Web Developer who will be responsible for developing and maintaining our company websites. The ideal candidate should have strong programming skills and experience with modern web technologies.
                        Responsibilities include designing user interfaces, implementing backend functionality, optimizing performance, and ensuring cross-browser compatibility.
                        </p>

                    </div>
                </div>

                <div class="job-view-row">
                    <div class="job-view-group-bottom">
                        <h3>Contact Information</h3>
                        <div class="job-view-item">
                            <span class="job-view-label">Contact Person:</span>
                            <span class="job-view-value">John Smith</span>
                        </div>
                        <div class="job-view-item">
                            <span class="job-view-label">Email:</span>
                            <span class="job-view-value">hr@techcompany.com</span>
                        </div>
                    </div>

                    <div class="job-view-group-bottom">
                        <h3>Skill Requirements</h3>
                        <div class="job-view-text">
                            <ul class="job-view-list">
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

            <div class="job-view-footer">
                <button class="job-back-btn">
                    <i class='bx bx-arrow-back'></i> Back
                </button>
            </div>
        </div>
    </div>

</main>

<?php include '../includes/footer.php'; ?>