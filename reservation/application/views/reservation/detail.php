<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Detail</h5></a>
    </ul>
  </div>
  <div class="col d-flex justify-content-center">
  <div class="card-body">
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header"><h5>Details</h5></div>
        
        <div class="card-body">
            <h5 class="text-left">id : </h5>
            <p class="text-left"><?= $reservation['id'];?></p>
            <h5 class="text-left">time : </h5>
            <p class="text-left"> <?= $reservation['time'];?></p>
            <h5 class="text-left">date : </h5>
            <p class="text-left"> <?= $reservation['date'];?></p>
            <h5 class="text-left">name : </h5>
            <p class="text-left"> <?= $reservation['name'];?></p>
            <h5 class="text-left">tlpnumber : </h5>
            <p class="text-left"><?= $reservation['tlpnumber'];?></p>
            <h5 class="text-left">inumberpeopled : </h5>
            <p class="text-left"><?= $reservation['numberpeople'];?></p>
            <h5 class="text-left">comments : </h5>
            <p class="text-left"><?= $reservation['comments'];?></p>
            <br/>
            <a href="<?=base_url();?>reservation/index" class="btn btn-secondary float-left">Go back</a>  
            <a href="<?= base_url(); ?>reservation/edit/<?=$reservation['id'];?>" class="btn btn-dark float-right">Edit</a> 
            
        </div>
    </div>
  </div>
</div>
