<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- STYLES -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../styles/notication-dropdown.css">
    <link rel="stylesheet" href="../styles/admin-dropdown.css">
    <?php if (isset($pageStyles)) echo $pageStyles; ?>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <div class="Inlogo">
            <a href="#" class="logo-img">
                <img src="../dept.png" alt="Logo">
            </a>
            <a href="dashboard.php" class="logo-text">InTrack</a>
        </div>
        <ul class="side-menu-top">
            <li data-page="dashboard" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['dashboard.php', 'admin_profile.php', 'all-notification.php']) ?
            'active' : ''; ?>">
                <a href="dashboard.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li data-page="users" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['users.php', 'edit_user.php']) ?
            'active' : ''; ?>">
                <a href="users.php">
                    <i class="bx bxs-user"></i>
                    <span class="text">Users</span>
                </a>
            </li>
            <li data-page="employer" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['employer.php', 'employer-info.php']) ? 'active' : ''; ?>">
                <a href="employer.php">
                    <i class="bx bxs-briefcase"></i>
                    <span class="text">Employers</span>
                </a>
            </li>
            <li data-page="job-listing" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['job-listing.php', 'job-listing_view.php']) ? 'active' : ''; ?>">
                <a href="job-listing.php">
                    <i class="bx bx-task"></i>
                    <span class="text">Job Listings</span>
                </a>
            </li>
            <li data-page="approvals" class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['approvals.php', 'approvals_view.php']) ? 'active' : ''; ?>">
                <a href="approvals.php">
                    <i class="bx bx-sync"></i>
                    <span class="text">Pending Job Approvals</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu-bottom">
            <li data-page="archive" class="<?php echo basename($_SERVER['PHP_SELF']) == 'archive.php' ? 'active' : ''; ?>">
                <a href="archive.php">
                    <i class="bx bxs-archive"></i>
                    <span class="text">Archive</span>
                </a>
            </li>
            <li data-page="logout">
                <a href="logout.php">
                    <i class="bx bxs-log-out"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class="bx bx-menu toggle-sidebar"></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
                </div>
            </form>
            <a href="#" class="notification" id="notification-bell">
                <i class="bx bxs-bell"></i>
                <span class="num">2+</span>
            </a>
            <!-- Notification Dropdown -->
            <div class="notification-dropdown" id="notification-dropdown">
                <div class="notification-header">
                    <h4>Notifications</h4>
                    <a href="#" class="mark-all-read">Mark all as read</a>
                </div>
                <div class="notification-list">
                    <div class="notification-item unread">
                        <div class="notification-icon">
                            <i class='bx bxs-user-plus'></i>
                        </div>
                        <div class="notification-content">
                            <p><strong>John Doe</strong> sent you a connection request</p>
                            <span class="notification-time">2 mins ago</span>
                        </div>
                    </div>
                    <div class="notification-item unread">
                        <div class="notification-icon">
                            <i class='bx bxs-message-alt'></i>
                        </div>
                        <div class="notification-content">
                            <p><strong>Sarah Smith</strong> sent you a message</p>
                            <span class="notification-time">15 mins ago</span>
                        </div>
                    </div>
                    <div class="notification-item">
                        <div class="notification-icon">
                            <i class='bx bxs-badge-check'></i>
                        </div>
                        <div class="notification-content">
                            <p>Your job posting for <strong>Web Developer</strong> was approved</p>
                            <span class="notification-time">1 hour ago</span>
                        </div>
                    </div>
                    <div class="notification-item">
                        <div class="notification-icon">
                            <i class='bx bxs-calendar'></i>
                        </div>
                        <div class="notification-content">
                            <p>Interview scheduled with <strong>Tech Solutions Inc.</strong> tomorrow</p>
                            <span class="notification-time">3 hours ago</span>
                        </div>
                    </div>
                    <div class="notification-item">
                        <div class="notification-icon">
                            <i class='bx bxs-group'></i>
                        </div>
                        <div class="notification-content">
                            <p><strong>5 new applicants</strong> for your job posting</p>
                            <span class="notification-time">1 day ago</span>
                        </div>
                    </div>
                </div>
                <div class="notification-footer">
                    <a href="all-notification.php" class="view-all">View All Notifications</a>
                </div>
            </div>
            <a href="#" class="profile">
                <img src="../pfp.jpg" alt="Profile Picture">
            </a>
            <div class="profile-dropdown" id="profile-dropdown">
                <div class="profile-header">
                    <img src="../pfp.jpg" alt="Profile Picture" class="dropdown-pfp">
                    <div class="profile-info">
                        <h4>Admin Name</h4>
                        <span>Administrator</span>
                    </div>
                </div>
                <div class="profile-footer">
                    <a href="admin_profile.php" class="view-profile">View Profile</a>
                </div>
            </div>
        </nav>