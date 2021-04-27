<div class="container-fluid">
	<div class="m-customer">
		<div class="mg-cus-btn mt-1 mb-1 text-right">
			<button class="btn-modal btn-primary" id="newinvoice" data-toggle="modal" data-target="#invoiceModal">New Invoice</button>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Status</th>
					<th>Q.Number</th>
					<th>Create</th>
					<th>Exprice</th>
					<th>By</th>
					<th>Amount</th>
					<th>Options</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" role="dialog" id="invoiceModal">
	<div class="modal-dialog">
		<div class="modal-content kh-Ang form-product">
			<div class="modal-header">
				<h4 class="modal-title">New Invoice</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Customer Name*</label>
						<input type="text" name="cus_name" class="form-control" placeholder="Customer Name" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Type B*</label>
						<input type="text" name="cus_b" class="form-control" placeholder="Type of Business" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Phone*</label>
						<input type="text" name="cus_phone" class="form-control" placeholder="Phone" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Email*</label>
						<input type="email" name="cus_email" class="form-control" placeholder="Email" autocomplete="off">
					</div>
					<input type="text" name="cus_on" value="<?php echo date('d/m/Y') ?>">
					<input type="text" name="cus_by">
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn-modal" data-dismiss="modal">Cancel</button>
				<button class="btn-modal" id="add_pro">Add</button>
			</div>
		</div>
	</div>
</div>