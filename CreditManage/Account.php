<?php include('header.html'); ?>

<div style="padding-left:20px; padding-top: 10px;">
  <!-- <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p> -->
  <div class="table-responsive">
    <div class="form-group">
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Register Account</a>
  </div>
<table class="table table-bordered table-striped table-responsive">
  <th>Id</th>
  <th>AccountNumber</th>
  <th>Actual Balance</th>
  <th>Available Balance</th>
  <th>Credit Limit</th>
  <th>Action</th>
  <tbody>
    
  </tbody>
</table>
  </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register Account</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">AccountNumber</label></div>
          <div class="col-md-8"><input type="text" name="name" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Actual Balance</label></div>
          <div class="col-md-8"><input type="text" name="creditlimit" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Available Balance</label></div>
          <div class="col-md-8"><input type="text" name="payterms" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Credit Limit</label></div>
          <div class="col-md-8"><input type="text" name="payterms" class="form-group"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php include('footer.html'); ?>