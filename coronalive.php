<!DOCTYPE html>
<html lang="en">
<head>
    <title>document</title>
    <?php include 'links/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0 pr-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notifications.php">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="hospitalanddashboard.php">HospitalDashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="coronalive.php">IndiaCoronaLive</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="corona_update container-fluid">
    <div class=" my-5">
        <h3 class="text-center text-uppercase">COVID-19 LIVE UPDATE OF INDIA</h>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped text-center" >
    <tr>
        <th>Loc</th>
        <th>ConfirmedCasesIndia</th>
        <th>ConfirmedCasesforeign</th>
        <th>Discharged</th>
        <th>Death</th>
        <th>Totalconfirmed</th>
        <th>Confirmedbutlocationunidentified</th>
    </tr>
    <?php
    $data = file_get_contents('https://api.rootnet.in/covid19-in/stats/history');
    $coronadata = json_decode($data);
  
    

    ?>
    </table>

</div>

</section>
<body>
</html>