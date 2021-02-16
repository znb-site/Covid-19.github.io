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
  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
          <img src="images/corona.png" width="300" height="300">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-item-center">
          <h1>#HUM_ANDER_CORONA_BAHAR</h1>
        </div>
      </div>
    </div>
  </div>

<!-- corona upadate -->
<section class="corona_update">

<div class="mb-3">
  <h3 class="text-uppercase text-center">Coid-19 update</h3>


</div>
<div class="">
  <div>
    <h1 class="count"></h1>
    
</div>

</div>


</section>
<div id="button">
<a class="btn btn-primary" href="help.php" role="button">HELP/CONTACT</a>
</div>

<h1>About Corona</h1>
<div class="p-3 mb-2 bg-info text-dark">
<p>
COVID-19
COVID-19 is the disease caused by the new coronavirus that was first identified in December 2019.
COVID-19 symptoms include cough, fever or chills, shortness of breath or difficulty breathing, muscle or body aches, sore throat, new loss of taste or smell, diarrhea, headache, new fatigue, nausea or vomiting and congestion or runny nose. COVID-19 can be severe, and some cases have caused death.
The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.
There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice physical distancing.
</p>
</div>
</body>
</html>