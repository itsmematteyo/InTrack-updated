<?php 
$pageStyles = '<link rel="stylesheet" href="../styles/job-listing.css">';
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
                    <a class="active" href="#">Job Listings</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="job-listing-container">
        <div class="job-tools-wrapper">
            <div class="job-search-filter">
                <div class="job-filter-group">
                    <select name="job-status" id="job-status">
                        <option value="all">All Jobs</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <select name="job-category" id="job-category">
                        <option value="all">All Categories</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="internship">Internship</option>
                    </select>
                </div>
                <div class="job-search-form">
                    <div class="job-form-input">
                        <input type="text" placeholder="Search jobs...">
                        <button class="job-search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-table-data">
            <div class="job-table-head">
                <h3>Approved Job Listings</h3>
                <span>Update as of June 10, 2025</span>
            </div>
            <div class="job-table-responsive">
                <table class="job-table">
                    <thead>
                        <tr>
                            <td>Job Title</td>
                            <td>Company</td>
                            <td>Category</td>
                            <td>Posted Date</td>
                            <td>Applications</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Job Title">Senior Web Developer</td>
                            <td data-label="Company">Tech Solutions Inc.</td>
                            <td data-label="Category">Full-time</td>
                            <td data-label="Posted Date">May 15, 2023</td>
                            <td data-label="Applications">24</td>
                            <td data-label="Status">
                                <span class="job-status active">Active</span>
                            </td>
                            <td data-label="Actions">
                                <div class="job-actions">
                                    <a href="job-listing_view.php" class="job-view-btn" title="View">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="#" class="job-deactivate-btn" title="Deactivate">
                                        <i class='bx bx-hide'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">Marketing Specialist</td>
                            <td data-label="Company">Digital Agency Co.</td>
                            <td data-label="Category">Part-time</td>
                            <td data-label="Posted Date">May 20, 2023</td>
                            <td data-label="Applications">12</td>
                            <td data-label="Status">
                                <span class="job-status active">Active</span>
                            </td>
                            <td data-label="Actions">
                                <div class="job-actions">
                                    <a href="job-listing_view.php" class="job-view-btn" title="View">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="#" class="job-deactivate-btn" title="Deactivate">
                                        <i class='bx bx-hide'></i>
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