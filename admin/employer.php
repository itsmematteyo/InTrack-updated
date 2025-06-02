<?php 
$pageStyles = '<link rel="stylesheet" href="../styles/employer.css">';
include '../includes/header.php'; 
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Employers Accounts</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a class="active" href="#">Employers</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="employer-page-container">
        <div class="employer-tools-wrapper">
            <div class="employer-search-filter">
                <form action="#" method="GET" class="employer-search-form">
                    <div class="employer-form-input">
                        <input type="text" name="search" placeholder="Search employers...">
                        <button type="submit" class="employer-search-btn"><i class="bx bx-search"></i></button>
                    </div>
                </form>
                <div class="employer-filter-group">
                    <select name="status-filter" id="status-filter">
                        <option value="all">All Statuses</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <select name="sort" id="sort">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="most-jobs">Most Jobs</option>
                        <option value="least-jobs">Least Jobs</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="employer-table-data">
            <div class="employer-table-head">
                <h3>Employer Accounts</h3>
                <span>Update as of June 10, 2025</span>
            </div>
            <div class="employer-table-responsive">
                <table class="employer-table">
                    <thead>
                        <tr>
                            <td>Company</td>
                            <td>Contact Person</td>
                            <td>Email</td>
                            <td>Registered</td>
                            <td>Status</td>
                            <td>Job Posts</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tech Solutions Inc.</td>
                            <td>John Smith</td>
                            <td>john@techsolutions.com</td>
                            <td>May 15, 2023</td>
                            <td><span class="employer-status approved">Active</span></td>
                            <td>10/12</td>
                            <td class="employer-actions">
                                <a href="employer-info.php" class="employer-view-btn" title="View Profile"><i class="bx bx-show"></i></a>
                                <a href="#" class="employer-deactivate-btn" title="Deactivate"><i class="bx bx-power-off"></i></a>
                                <a href="#" class="employer-archive-btn" title="Archive"><i class="bx bx-archive"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tech Solutions Inc.</td>
                            <td>John Smith</td>
                            <td>john@techsolutions.com</td>
                            <td>May 15, 2023</td>
                            <td><span class="employer-status approved">Active</span></td>
                            <td>10/12</td>
                            <td class="employer-actions">
                                <a href="employer-info.php" class="employer-view-btn" title="View Profile"><i class="bx bx-show"></i></a>
                                <a href="#" class="employer-deactivate-btn" title="Deactivate"><i class="bx bx-power-off"></i></a>
                                <a href="#" class="employer-archive-btn" title="Archive"><i class="bx bx-archive"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>