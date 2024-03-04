<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <!-- <h4 class="modal-title text-center">USERNAME:</h4> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     <center> 
      <h4>DO YOU WANT TO LOGOUT</h4>
      <button type="button" class="btn btn-primary mt-3" >YES</button>
      <button type="button" class="btn btn-danger mt-3" >NO</button>
    </center>
      </div>




    </div>
  </div>
</div>


<?php
include("headlink.php");
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid
    <a class="navbar-brand" href="#">MKOBA KWA HEWA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <a class="nav-link" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">LOGOUT</a> -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            LOGOUT
          </button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">PROFILE UPDATE</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">CHANGE PASSWORD</a></li>
            <li><a class="dropdown-item" href="#">PROFILE UPADE</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>