<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knotty Logistics Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f6fa;
}

.sidebar {
    width: 250px;
    background: #1e3a6f;
    color: white;
    padding: 20px;
    height: 100vh;
    position: fixed;
}

.sidebar .brand {
    font-size: 20px;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
}

.sidebar ul li a.active, .sidebar ul li a:hover {
    background: #0d1b3e;
}

.sidebar-footer {
    position: absolute;
    bottom: 20px;
    width: 100%;
}

.main-content {
    margin-left: 270px;
    padding: 20px;
    width: calc(100% - 270px);
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 10px 20px;
    border-radius: 8px;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.welcome-box {
    background: linear-gradient(45deg, #1e3a6f, #4a6da7);
    color: white;
    padding: 20px;
    border-radius: 8px;
}

.stats {
    display: flex;
    gap: 20px;
}

.stats div {
    text-align: center;
}

.weather-box {
    background: linear-gradient(45deg, #111, #444);
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.jobs-progress {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}

.jobs-progress ul {
    list-style: none;
    padding: 0;
}

.jobs-progress ul li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
}

.dot.new { background: blue; }
.dot.completed { background: green; }
.dot.pending { background: orange; }
.dot.incomplete { background: red; }

</style>
<body>

    <!-- Sidebar -->
    <div class="d-flex">
        <nav class="sidebar">
            <h2 class="brand">KNOTTY LOGISTICS</h2>
            <ul class="nav flex-column">
                <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-network-wired"></i> Network</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i> Job</a></li>
                <li><a href="#"><i class="fas fa-ticket-alt"></i> Ticket</a></li>
                <li><a href="#"><i class="fas fa-box"></i> Assets</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Schedule</a></li>
                <li><a href="#"><i class="fas fa-file-invoice"></i> Billing</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Manage Co.</a></li>
            </ul>
            <div class="sidebar-footer">
                <button class="btn btn-primary w-100">Back to Site</button>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <div class="main-content">
            <header class="d-flex justify-content-between align-items-center p-3">
                <h4>Dashboard</h4>
                <div class="user-info">
                    <span>Alex Carter</span>
                    <img src="https://via.placeholder.com/40" class="rounded-circle">
                </div>
            </header>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="welcome-box">
                            <h2>Welcome John Doe,</h2>
                            <p>Here's what’s happening with your logistics today...</p>
                            <div class="stats">
                                <div>
                                    <h3>541+</h3>
                                    <p>Distribution Center</p>
                                </div>
                                <div>
                                    <h3>35+</h3>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="gps-box">
                            <h5>GPS <span>(Track your fleet!)</span></h5>
                            <img src="https://via.placeholder.com/600x300" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="weather-box">
                            <h4>Las Vegas</h4>
                            <h1>21°C</h1>
                            <p>Updated: 23:00</p>
                        </div>

                        <div class="jobs-progress">
                            <h5>Jobs Progress</h5>
                            <ul>
                                <li><span class="dot new"></span> New Job: 01</li>
                                <li><span class="dot completed"></span> Jobs Completed: 01</li>
                                <li><span class="dot pending"></span> Pending Jobs: 01</li>
                                <li><span class="dot incomplete"></span> Incomplete Jobs: 01</li>
                            </ul>
                            <button class="btn btn-primary">My Jobs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
