<div class="account-container" style="margin: 0 auto;">

	<div class="content clearfix">

		<form action="<?php echo base_url(); ?>reservation_type/add" method="post">

			<h1>Add Reservation Type</h1>
			<? if(isset($error)) {?>
						<div class="alert alert-danger">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>Error!</strong> <?=$error?>
			            </div>
			<? } ?>

      <div class="add-fields">

      				<div class="field">
      					<label for="rType_name">Name:</label>
      					<input type="text" id="rType_name" name="rType_name" required value="" placeholder="Type of Reservation"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="rType_payment_time">Payment Time:</label>
      					<input type="number" id="rType_payment_time" name="rType_payment_time" required value="" placeholder="# of days before payment"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="refund_if_canceled">Refund if canceled:</label>
      					<input type="number" id="refund_if_canceled" name="refund_if_canceled" required value="" min="0" max="1" placeholder="0 for no refund. 1 for refund"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="original_base_rate">Orignal base rate:</label>
      					<input type="number" step="0.10" id="original_base_rate" name="original_base_rate" required value="" placeholder="Enter in decimal format"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="additional_base_rate">Additional base rate:</label>
      					<input type="number" step="0.10" id="additional_base_rate" name="additional_base_rate" required value="" placeholder="Enter in decimal format"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="min_days_before_reservation">Mininum days before reservation can be made:</label>
      					<input type="number" id="min_days_before_reservation" name="min_days_before_reservation" required value="" placeholder="# of days before reserving"/>
      				</div> <!-- /field -->

      				<div class="field">
      					<label for="notice_of_payment">Payment Reminder:</label>
      					<input type="number" id="notice_of_payment" name="notice_of_payment" required value="" placeholder="# of days before reminder"/>
      				</div> <!-- /field -->

      			</div> <!-- /login-fields -->

			<div class="login-actions">

				<button class="button btn btn-success btn-large">Add</button>

			</div> <!-- .actions -->



		</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->
<br>
