<?php include('header.html'); ?>

<div style="padding-left:20px; padding-top: 10px;">
  <!-- <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p> -->
  <div class="table-responsive">
    <div class="form-group">
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Make Payment</a>
  </div>
<table class="table table-bordered table-striped table-responsive">
  <th>Id</th>
  <th>InvoiceId</th>
  <th>Amount</th>
  <th>Paydate</th>
  <th>DueDate</th>
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
        <h4 class="modal-title">Make Payments</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Invoice Id</label></div>
          <div class="col-md-8"><input type="text" name="invoiceid" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Amount</label></div>
          <div class="col-md-8"><input type="text" name="invoiceid" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">Pay Date</label></div>
          <div class="col-md-8"><input type="text" name="invoiceid" class="form-group"></div>
        </div>
        <div class="form-group">
          <div class="col-md-4"><label class="form-group">DueDate</label></div>
          <div class="col-md-8"><input type="text" name="invoiceid" class="form-group"></div>
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