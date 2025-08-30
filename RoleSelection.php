<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Church Management System</title>
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      color: #333;
    }
    header {
      text-align: center;
      padding: 60px 20px 30px;
      background: url('church.jpg') center/cover no-repeat;
      color: #fff;
    }
     header h1 {
    font-family: 'Marcellus SC', serif;
    font-size: 3rem;
    font-weight: 400;
    color: #333;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    letter-spacing: 2px;
    }
    
    header p {
      font-size: 1rem;
      color: #e0e0e0;
    }
    .section-title {
      text-align: center;
      margin: 40px 0 20px;
    }
    .roles {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px;
    }
    .card {
      background: #fff;
      padding: 30px 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }
    .card:hover {
      transform: translateY(-5px);
      border-color: #007bff;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .icon {
      font-size: 40px;
      margin-bottom: 15px;
    }
    .pastor-icon { color: #f4b400; }
    .member-icon { color: #003366; }
    .media-icon { color: #28a745; }
    .card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }
    .card p {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 20px;
    }
    .btn {
      display: inline-block;
      padding: 10px 18px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      color: #fff;
      transition: background 0.3s ease;
    }
    .btn-pastor { background: #f4b400; }
    .btn-pastor:hover { background: #db9e00; }
    .btn-member { background: #003366; }
    .btn-member:hover { background: #001f4d; }
    .btn-media { background: #28a745; }
    .btn-media:hover { background: #1e7e34; }
  </style>
</head>
<body>

<header>
  <h1><i class="fas fa-church" style="color:#ffd700; margin-right:10px;"></i> IRM Baler System</h1>
  <p>Streamline membership, spiritual growth, and community engagement</p>
</header>

<section>
  <div class="section-title">
    <h2>Choose Your Role</h2>
    <p>Select your role to access the appropriate dashboard</p>
  </div>

  <div class="roles">
    <!-- Pastor -->
    <div class="card">
      <div class="icon pastor-icon"><i class="fa-solid fa-dove"></i></i></div>
      <h3>Pastor</h3>
      <p>Access member progress, financial analytics, and event approvals</p>
      <a href="PLogin.php" class="btn btn-pastor">Access Pastor Dashboard</a>
    </div>

    <!-- Member -->
    <div class="card">
      <div class="icon member-icon"><i class="fas fa-user"></i></div>
      <h3>Member</h3>
      <p>View life class lessons, track progress, and book events</p>
      <a href="MLogin.php" class="btn btn-member">Access Member Dashboard</a>
    </div>

    <!-- Media Officer -->
    <div class="card">
      <div class="icon media-icon"><i class="fas fa-gear"></i></div>
      <h3>Media Officer</h3>
      <p>Manage membership records and financial data</p>
      <a href="MOLogin.php" class="btn btn-media">Access Media Officer Dashboard</a>
    </div>
  </div>
</section>

</body>
</html>
