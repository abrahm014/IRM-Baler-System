<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Member') {
    header("Location: MLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="MDashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile">
                <div class="icon">👤</div>
                <h3><?php echo htmlspecialchars($_SESSION['username']); ?></h3>
                <p>Member</p>
            </div>
            <nav>
                <a href="#">🏠 Home</a>
                <a href="#">📖 My Profile</a>
                <a href="#">📅 Activities</a>
                <a href="#">⚙️ Settings</a>
                <a href="Logout.php" class="logout">🚪 Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                <p>Continue your spiritual journey here ✨</p>
            </header>

            <section class="cards">
                <div class="card">
                    <h3>📖 Profile</h3>
                    <p>View and update your personal information.</p>
                    <a href="#">Go to Profile</a>
                </div>
                <div class="card">
                    <h3>📅 Activities</h3>
                    <p>Check upcoming events and activities.</p>
                    <a href="#">View Activities</a>
                </div>
                <div class="card">
                    <h3>⚙️ Settings</h3>
                    <p>Manage your account preferences and security.</p>
                    <a href="#">Open Settings</a>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
