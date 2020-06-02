<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Editing Form</h5></a>
    </ul>
  </div>
  <div class="col d-flex justify-content-center">
  <div class="card-body">
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header"><h5>Edit</h5></div>
        
        <div class="card-body">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php endif ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="code">id</label>
                            <input type="number" class="form-control" id="id" name="id" 
                            value="<?= $reservation['id'];?>">
                    </div>
                    <div class="form-group">
                        <label for="time">time</label>
                            <input type="text" class="form-control" id="time" name="time"
                            value="<?= $reservation['time'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">date</label>
                            <input type="text" class="form-control" id="date" name="date"
                            value="<?= $reservation['date'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">name</label>
                            <input type="text" class="form-control" id="name" name="name"
                            value="<?= $reservation['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">tlpnumber</label>
                            <input type="number" class="form-control" id="tlpnumber" name="tlpnumber"
                            value="<?= $reservation['tlpnumber'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">inumberpeople</label>
                            <input type="number" class="form-control" id="inumberpeople" name="inumberpeople"
                            value="<?= $reservation['numberpeople'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">comments</label>
                            <input type="text" class="form-control" id="comments" name="comments"
                            value="<?= $reservation['comments'];?>">
                    </div>
                    <a href="<?=base_url();?>reservation/index" class="btn btn-secondary float-left">Go back</a>
                    <button type="submit" name="submit" class="btn btn-warning float-right">modify</button>
                    
                </form>
        </div>
    </div>
  </div>
</div>
