<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad" id="target-1">
            
          </div>
          <div class="widget widget-table action-table" id="target-3">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Your Current Orders</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr> 
                    <th> Restaurant </th>
                    <th> Table No. </th>
                    <th> Book Date </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach ($restaurant_order as $k => $cust) { ?>
                  <tr>
                    <td> <?=$cust->restaurant_name?> </td>
                    <td> <?=$cust->table_number?> </td>
                    <td> <?=$cust->book_date?></td>
                    <td> <?=$cust->book_price?></td>
                  </tr>
                
                  <? } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 

          </div>
          <?/*
          <!-- /widget -->
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Calendar</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div id='calendar'>
              </div>
            </div>
            <!-- /widget-content --> 
          </div>
          */?>

        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
  
          <!-- /widget -->
          <div class="widget widget-table action-table" id="target-4">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Your Current Reservations</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
					          <th> Room No. </th>
                    <th> Order Date </th>
                    <th> Check-In Date </th>
					          <th> Check-Out Date </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach ($reservation_order as $k => $cust) { ?>
                  <tr>
                    <td> <?=$cust->room_id?> </td>
                    <td> <?=$cust->reservation_date?></td>
                    <td> <?=$cust->checkin_date?></td>
                    <td> <?=$cust->checkout_date?></td>
                    <td> <?=$cust->reservation_price?></td>
                    <!--td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td-->
                  </tr>
                  <? } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
		  <div class="widget widget-table action-table" id="target-3">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Your Scheduled Tours</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Order No. </th>
                    <th> Bikes Rented </th>
                    <th> Tour Time </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach ($reservation_order as $k => $cust) { ?>
                  <tr>
                    <!--<td> <?=$cust->room_id?></td> EMPTY BECAUSE WE'RE NOT USING IT
                    <td> <?=$cust->room_id?> </td>
                    <td> <?=$cust->reservation_date?></td>
                    <td> <?=$cust->checkin_date?></td> --> 
                  </tr>
                  <? } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
