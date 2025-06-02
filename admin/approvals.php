<?php
$pageStyles = '<link rel="stylesheet" href="../styles/approvals.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Pending Job Approvals</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a class="active" href="#">Pending Approvals</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="approvals-page-container">
        <div class="approvals-tools-wrapper">
            <div class="approvals-search-filter">
                <div class="approvals-filter-group">
                    <select name="sorting" id="sorting">
                        <option value="Type">All Type</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="contract">Contract</option>
                    </select>
                </div>
                <div class="approvals-search-form">
                    <div class="approvals-form-input">
                        <input type="text" placeholder="Search...">
                        <button class="approvals-search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="approvals-table-data">
            <div class="approvals-table-head">
                <h3>Job Approval Requests</h3>
                <span>Total: 15 pending approvals</span>
            </div>
            <div class="approvals-table-responsive">
                <table class="approvals-table">
                    <thead>
                        <tr>
                            <td>Employer ID</td>
                            <td>Job Title</td>
                            <td>Type of Employment</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EMP-1001</td>
                            <td>Web Developer</td>
                            <td>Full-time</td>
                            <td><span class="approvals-stat pending">Pending</span></td>
                            <td>
                                <div class="approvals-actions">
                                    <a href="approvals_view.php" class="approvals-view-btn" title="View Details">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="#" class="approvals-archive-btn" title="Archive">
                                        <i class='bx bx-archive'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP-1002</td>
                            <td>Graphic Designer</td>
                            <td>Part-time</td>
                            <td><span class="approvals-stat pending">Pending</span></td>
                            <td>
                                <div class="approvals-actions">
                                    <a href="approvals_view.php" class="approvals-view-btn" title="View Details">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="#" class="approvals-archive-btn" title="Archive">
                                        <i class='bx bx-archive'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP-1003</td>
                            <td>Marketing Specialist</td>
                            <td>Contract</td>
                            <td><span class="approvals-stat pending">Pending</span></td>
                            <td>
                                <div class="approvals-actions">
                                    <a href="approvals_view.php" class="approvals-view-btn" title="View Details">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="#" class="approvals-archive-btn" title="Archive">
                                        <i class='bx bx-archive'></i>
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