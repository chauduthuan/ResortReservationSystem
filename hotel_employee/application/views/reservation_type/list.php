<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?php echo base_url(); ?>reservation_type/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Reservation Type</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
            <th> Reservation Type ID </th>
				    <th> Reservation Type Name </th>
				    <th> Amount of days before payment </th>
				    <th> Refund if canceled? </th>
				    <th> Orignal base rate </th>
						<th> Additional base rate </th>
						<th> Mininum days before reservation can be made </th>
						<th> Amount of days before email reminder is sent </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?if($reservation_types){
					foreach ($reservation_types as $rt) {
						// $emp->username

				?>
				  <tr>
            <td> <?=$rt->rType_id ?> </td>
				    <td> <?=$rt->rType_name ?> </td>
				    <td> <?=$rt->rType_payment_time ?> </td>
				    <td> <?=$rt->refund_if_canceled ?> </td>
						<td> <?=$rt->original_base_rate ?> </td>
				    <td> <?=$rt->additional_base_rate ?> </td>
				    <td> <?=$rt->min_days_before_reservation ?> </td>
				    <td> <?=$rt->notice_of_payment ?> </td>
				    <td class="td-actions">
              <a href="<?php echo base_url(); ?>reservation_type/edit/<?=$rt->rType_name?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a>
              <a href="<?php echo base_url(); ?>reservation_type/delete/<?=$rt->rType_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
            </td>
				  </tr>
				<? }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>
