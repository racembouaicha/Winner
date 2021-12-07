<?php 

include './inc/cnx.php';
include './inc/form.php'; 
include './inc/select.php';
include './inc/cnx_close.php';

?>
<?php include_once './parts/header.php'; ?>

            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img class="img" src="./images/imgwin.png" alt="">
            <h1 class="display-4 fw-normal">Win with us</h1>
            <p class="lead fw-normal">Remaining to open registration</p>
            <h6 id="counter"></h6>
            <button id="winner" type="button" class="btn btn-outline-primary col-12" >
                Pick a winner
              </button>
           
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            <div class="container">
            <ul class="list-group" id="list">
              <h3>To participate </h3>
                <li class="list-group-item">You should be enter your first name</li>
                <li class="list-group-item">You should be enter your last name</li>
                <li class="list-group-item">You should be enter your e-mail</li>
                <li class="list-group-item">and Wait until the time is up </li>
            </ul> 
            </div> 
        </div>

    
            <div class="position-relative  text-center ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
              <div >
              <form class="form-floating mb-3" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <h1>Enter your Data</h1>
                <br>
                <div class="form-floating">
                <input type="text"  name="firstName" class="form-control" value="<?php echo $firstName ?>" id="firstName" placeholder="First Name">
                <label for="firstName">First Name</label>
                <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
                </div>
                <br>
                <div class="form-floating">
                <input type="text"  name="lastName" class="form-control" value="<?php echo $lastName ?>" id="lastName" placeholder="Last Name">
                <label for="lastName">Last Name</label>
                <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                </div>
                <br>
                <div class="form-floating">
                <input type="text"  name="email" class="form-control" value="<?php echo $email ?>" id="email" placeholder="name@example.com">
                <label for="email">E-mail</label>
                <div class="form-text error"><?php echo $errors['emailError'] ?></div>
                <br>
                <input class="btn btn-primary "id="send" type="submit" name="submit" value="send">
            </form>
            </div>  
         </div>
        </div>
    </div>
    

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">The Winner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div  class="row mb-5 pb-5">
        
        <?php foreach ($users as $user): ?>
           <h1 class="display-3 text-center modal-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ;?> </h1>  
        <?php endforeach; ?>
      </div>
        </div>
      
    </div>
  </div>
</div>

<!-- Loader -->
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
    </div>
    
    <?php include_once './parts/footer.php'; ?>