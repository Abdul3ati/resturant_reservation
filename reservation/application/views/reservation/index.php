<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>reservation/">Reservation Table</a>
      </li>
      <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url();?>reservation/pdf">Print</a>
      </li>
      <li class="nav-item">
          <a class="nav-item nav-link" href="<?= base_url();?>login">Logout</a>
        </li>
    </ul>
  </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container-fluid">
<?php if($this->session->flashdata('flash-data')):?>
    <div class="row mt-4">
        <div class="col md-6">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            reservation Data <strong>successfully</strong> <?= $this->session->flashdata('flash-data'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            
        </div>
    </div>
    
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
            <h2>reservation List</h2>
            <br>
            
            <?php if(empty($reservation)):?>
                <div class="alert alert-danger" role="alert">
                    Data reservation Tidak Ditemukan
                </div>
            <?php endif;?>
            
            <ul class="list-group">
            <table id="mytable" class="table table-striped table-bordered table-sm">
            <thead>
            <tr class="row100 head">
            <a href="<?= base_url(); ?>reservation/AddData" class="btn btn-primary">Add Data</a>
            <br>
                <th class="cell100 column1">id</th>
                <th class="cell100 column2">time</th>
                <th class="cell100 column3">date</th>
                <th class="cell100 column4">name</th>
                <th class="cell100 column5">tlpnumber</th>
                <th class="cell100 column5">numberpeople</th>
                <th class="cell100 column5">comments</th>
                </tr>
            </thead>
                <?php foreach($reservation as $reservation): ?>
                    
                    <tbody>
        <tr class="row100 head">
            <td><?= $reservation['id']; ?></td>
            <td><?= $reservation['time']; ?></td>
            <td><?= $reservation['date']; ?></td>
            <td><?= $reservation['name']; ?></td>
            <td><?= $reservation['tlpnumber']; ?></td>
            <td><?= $reservation['numberpeople']; ?></td>
            <td><?= $reservation['comments']; ?></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="detail" data-toggle="modal" data-target="#detail" ><a href="<?= base_url(); ?>reservation/detail/<?=$reservation['id'];?>" class="btn btn-primary">Detail</a></button></p></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="delete" data-toggle="modal" data-target="#delete" ><a href="<?=base_url();?>reservation/delete/<?= $reservation['id']; ?>" class="btn btn-danger btn-xs"onclick="return confirm('Are you sure you want to delete this Data');">delete</a></button></p></td>
        </tr>
    
    </tbody>
                <?php endforeach; ?>
                
            </ul>
        </div>
    </div>
</div>  
</table>
