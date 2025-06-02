   <!-- HEADER-->
   <?php
    include '../includes/header.php';
    ?>
   <!-- MAIN -->
   <main class="main-content">
       <div class="head-title">
           <div class="left">
               <h1>Dashboard</h1>
               <ul class="breadcrumb">
                   <li>
                       <a href="#">Dashboard</a>
                   </li>
               </ul>
           </div>
       </div>

       <ul class="box-info">
           <li>
               <i class="bx bx-task"></i>
               <span class="text">
                   <h3>Total Job Listings</h3>
                   <p>100</p>
               </span>
           </li>
           <li>
               <i class="bx bxs-user"></i>
               <span class="text">
                   <h3>Total Users</h3>
                   <p>50</p>
               </span>
           </li>
           <li>
               <i class="bx bx-time"></i>
               <span class="text">
                   <h3>Pending Approvals</h3>
                   <p>10</p>
               </span>
           </li>
       </ul>

       <div class="table-data">
           <div class="head">
               <h3>Recent Job Approvals</h3>
               <i class="bx bx-search"></i>
           </div>
           <table>
               <thead>
                   <tr>
                       <td>Job ID</td>
                       <td>Company</td>
                       <td>Status</td>
                       <td>Date</td>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>#JOB123</td>
                       <td>Tech Corp</td>
                       <td><span class="status approved">Approved</span></td>
                       <td>2023-10-01</td>
                   </tr>
                   <tr>
                       <td>#JOB124</td>
                       <td>Design Studio</td>
                       <td><span class="status pending">Pending</span></td>
                       <td>2023-10-02</td>
                   </tr>
                   <tr>
                       <td>#JOB125</td>
                       <td>Marketing LLC</td>
                       <td><span class="status rejected">Rejected</span></td>
                       <td>2023-10-03</td>
                   </tr>
               </tbody>
           </table>
       </div>

       <div class="statistics-graph">
           <div class="head">
               <h3>Application Statistics</h3>
               <i class="bx bx-search"></i>
           </div>
           <canvas id="myChart"></canvas>
       </div>
   </main>
   <!-- FOOTER -->
   <?php include '../includes/footer.php'; ?>