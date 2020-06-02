<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Add Form</h5></a>
    </ul>
  </div>
  <div class="col d-flex justify-content-center">
  <div class="card-body">
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header"><h5>New Reservation</h5></div>
        
        <div class="card-body">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php endif ?>
        <form action="" method="post">
                    <div class="form-group">
                            <label for="id">id</label>
                            <input type="number" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="time">time</label>
                            <input type="text" class="form-control" id="time" name="time">
                        </div>
                        <div class="form-group">
                            <label for="date">date</label>
                            <input type="text" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="nama" name="name">
                        </div>
                        <div class="form-group">
                            <label for="tlpnumber">tlpnumber</label>
                            <input type="number" class="form-control" id="tlpnumber" name="tlpnumber">
                        </div>
                        <div class="form-group">
                            <label for="numberpeople">numberpeople</label>
                            <input type="number" class="form-control" id="numberpeople" name="numberpeople">
                        </div>
                        <div class="form-group">
                            <label for="comments">comments</label>
                            <input type="text" class="form-control" id="comments" name="comments">
                        </div>
                        <a href="<?=base_url();?>reservation/index" class="btn btn-secondary float-left">Back </a>
                        <button type="submit" name="add" class="btn btn-warning float-right">Submit</button>
                    </form>
        </div>
    </div>
  </div>
</div>
