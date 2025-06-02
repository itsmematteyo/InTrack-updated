<?php
$pageStyles = '<link rel="stylesheet" href="../styles/archive.css">';
include '../includes/header.php';
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Archive</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li>
                    <a class="active" href="#">Archive</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="archive-page-container">
        <div class="archive-tools-wrapper">
            <div class="archive-search-filter">
                <div class="archive-filter-group">
                    <select class="archive-type-select">
                        <option value="all">All Archives</option>
                        <option value="users">Users</option>
                        <option value="employers">Employers</option>
                        <option value="jobs">Job Listings</option>
                        <option value="messages">Messages</option>
                        <option value="approvals">Approvals</option>
                    </select>
                    <select class="archive-date-select">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                    </select>
                </div>

                <form class="archive-search-form">
                    <div class="archive-form-input">
                        <input type="text" placeholder="Search archives...">
                        <button type="submit" class="archive-search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="archive-table-data">
            <div class="archive-table-head">
                <h3>Archived Items</h3>
                <span>Total: 125 items</span>
            </div>

            <div class="archive-table-responsive">
                <table class="archive-table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Type</td>
                            <td>Name/Title</td>
                            <td>Archived Date</td>
                            <td>Archived By</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#USR-1254</td>
                            <td>User</td>
                            <td>John Doe</td>
                            <td>2023-10-15</td>
                            <td>Admin</td>
                            <td>
                                <div class="archive-actions">
                                    <a href="#" class="archive-retrieve-btn" title="Retrieve">
                                        <i class='bx bx-undo'></i>
                                    </a>
                                    <a href="#" class="archive-delete-btn" title="Delete Permanently">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#EMP-3256</td>
                            <td>Employer</td>
                            <td>Tech Solutions Inc.</td>
                            <td>2023-10-14</td>
                            <td>Admin</td>
                            <td>
                                <div class="archive-actions">
                                    <a href="#" class="archive-retrieve-btn" title="Retrieve">
                                        <i class='bx bx-undo'></i>
                                    </a>
                                    <a href="#" class="archive-delete-btn" title="Delete Permanently">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#JOB-7852</td>
                            <td>Job Listing</td>
                            <td>Senior Web Developer</td>
                            <td>2023-10-12</td>
                            <td>Admin</td>
                            <td>
                                <div class="archive-actions">
                                    <a href="#" class="archive-retrieve-btn" title="Retrieve">
                                        <i class='bx bx-undo'></i>
                                    </a>
                                    <a href="#" class="archive-delete-btn" title="Delete Permanently">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MSG-9856</td>
                            <td>Message</td>
                            <td>Application Inquiry</td>
                            <td>2023-10-10</td>
                            <td>Admin</td>
                            <td>
                                <div class="archive-actions">
                                    <a href="#" class="archive-retrieve-btn" title="Retrieve">
                                        <i class='bx bx-undo'></i>
                                    </a>
                                    <a href="#" class="archive-delete-btn" title="Delete Permanently">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#APP-4521</td>
                            <td>Approval</td>
                            <td>Company Registration</td>
                            <td>2023-10-08</td>
                            <td>Admin</td>
                            <td>
                                <div class="archive-actions">
                                    <a href="#" class="archive-retrieve-btn" title="Retrieve">
                                        <i class='bx bx-undo'></i>
                                    </a>
                                    <a href="#" class="archive-delete-btn" title="Delete Permanently">
                                        <i class='bx bx-trash'></i>
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

<?php
include '../includes/footer.php';
?>