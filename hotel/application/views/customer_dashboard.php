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
                    <th> Order No. </th>
                    <th> Ordered Items </th>
                    <th> Order Time </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach ($customer_most_paid as $k => $cust) { ?>
                  <tr>
                    <td> <?php echo $cust->customer_firstname." ".$cust->customer_lastname;?> </td> <!-- Edit following list for restaurant items -->
                    <td> <?=$cust->customer_TCno?> </td>
                    <td> <?=$cust->checkin_count?></td>
                    <td> <?=$cust->total_paid?></td>
                    <!--td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td-->
                  </tr>
                  <? } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
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
					<th> Room Type </th>
                    <th> Order Date </th>
                    <th> Check-In Date </th>
					<th> Check-Out Date </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach ($customer_pay_list as $k => $cust) { ?>
                  <tr>
                    <td> <? echo $cust->customer_firstname." ".$cust->customer_lastname;?> </td>
                    <td> <?=$cust->customer_TCno?> </td>
                    <td> <?=$cust->checkin_count?></td>
                    <td> <?=$cust->total_paid?></td>
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
                  <? foreach ($customer_most_paid as $k => $cust) { ?>
                  <tr>
                    <td> <?php echo $cust->customer_firstname." ".$cust->customer_lastname;?> </td> <!-- Edit following list for restaurant items -->
                    <td> <?=$cust->customer_TCno?> </td>
                    <td> <?=$cust->checkin_count?></td>
                    <td> <?=$cust->total_paid?></td>
                    <!--td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td-->
                  </tr>
                  <? } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <? /*
          <!-- /widget --> 
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Recent News</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="news-items">
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                    <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                  </div>
                  
                </li>
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/" class="news-item-title" target="_blank">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                    <p class="news-item-preview"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                  </div>
                  
                </li>
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/" class="news-item-title" target="_blank">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                    <p class="news-item-preview"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                  </div>
                  
                </li>
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          */ ?>
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
