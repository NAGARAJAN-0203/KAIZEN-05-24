<?php
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);



?>
<div class="content-body">
<div class="container-fluid">

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">
  <h4>Winners List - <?php echo $load_update_expiry = $this->mapi->load_update_expiry(); ?></h4>
  <span>Kaizen Idea > Kaizen Mang > Add Winner</span>

  <a href="<?php echo site_url('admin/kaizenidea/winners/winnerslist'); ?>" class="btn btn-primary pull-right">View Winners List</a>
  </div>
  </div>
  </div>
  <!--END Page Title-->

<div class="row">
<div class="col-sm-12">

  <!-- Div-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
    <form action="<?php echo site_url('admin/addwinner'); ?>" role="form"    method="post" autocomplete="off"  enctype="multipart/form-data">
      <h4 class="card-title">Add Winner  </h4>
      <p>&nbsp;</p>
             <div class="row">


               <div class="col-md-2">
                <label>Category
                </label>
                <select class="form-control" name="catg" >
                  <option value="Gold">Gold</option>
                  <option value="Silver">Silver</option>
                  <option value="Bronze">Bronze</option>
                </select>
               </div>


               <div class="col-md-2">
                <label>Emp ID
                </label>
                <input type="text" required class="form-control eempid typeempid"  placeholder="" name="empid" />
               </div>

               <div class="col-md-3">
                <label>Emp Name
                </label>
                <input type="text"  class="form-control efname etypefname" placeholder="" name="fname" />
               </div>

               <div class="col-md-2">
                <label>Domain
                </label>
                <input type="text"  class="form-control edomain etypedomain" placeholder="" name="domain" />
               </div>

               <div class="col-md-3">
                <label>Department
                </label>
                <input type="text"  class="form-control edepart etypedepart" placeholder="" name="depart" />
               </div>

</div>




<?php /*
              <div class="col-md-1">
               <label><h3>GOLD </h3></label>
               </div>

              <div class="col-md-2">
               <label>Emp ID
               </label>
               <input type="text" class="form-control eempid typeempid"  placeholder="" name="empid" />
              </div>


              <div class="col-md-3">
               <label>Emp Name
               </label>
               <input type="text" readonly class="form-control efname etypefname" placeholder="" name="fname" />
              </div>

              <div class="col-md-2">
               <label>Domain
               </label>
               <input type="text" readonly class="form-control edomain etypedomain" placeholder="" name="domain" />
              </div>

              <div class="col-md-3">
               <label>Department
               </label>
               <input type="text" readonly class="form-control edepart etypedepart" placeholder="" name="depart" />
              </div>
<?php */ ?>

<?php /*
              <p>&nbsp;</p>

              <div class="row">

                <div class="col-md-1">
                 <label><h3>Silver </h3></label>
                 </div>

                 <div class="col-md-2">
                  <label>Emp ID
                  </label>
                  <input type="text" class="form-control eempid2 typeempid2"  placeholder="" name="empid2" />
                 </div>


                 <div class="col-md-3">
                  <label>Emp Name
                  </label>
                  <input type="text" readonly class="form-control efname2 etypefname2" placeholder="" name="fname2" />
                 </div>

                 <div class="col-md-2">
                  <label>Domain
                  </label>
                  <input type="text" readonly class="form-control edomain2 etypedomain2" placeholder="" name="domain2" />
                 </div>

                 <div class="col-md-3">
                  <label>Department
                  </label>
                  <input type="text" readonly class="form-control edepart2 etypedepart2" placeholder="" name="depart2" />
                 </div>
                </div>
<?php */ ?>

<?php /*
                <p>&nbsp;</p>

                <div class="row">

                  <div class="col-md-1">
                   <label><h3>Bronze </h3></label>
                   </div>

                  <div class="col-md-2">
                   <label>Emp ID
                   </label>
                   <input type="text" class="form-control eempid3 typeempid3"  placeholder="" name="empid3" />
                  </div>


                  <div class="col-md-3">
                   <label>Emp Name
                   </label>
                   <input type="text" readonly class="form-control efname3 etypefname3" placeholder="" name="fname3" />
                  </div>

                  <div class="col-md-2">
                   <label>Domain
                   </label>
                   <input type="text" readonly class="form-control edomain3 etypedomain3" placeholder="" name="domain3" />
                  </div>

                  <div class="col-md-3">
                   <label>Department
                   </label>
                   <input type="text" readonly class="form-control edepart3 etypedepart3" placeholder="" name="depart3" />
                  </div>

                  </div>
*/ ?>
            <p>&nbsp;</p>

            <?php
              $uri5 = $this->uri->segment(5);
              if(empty($uri5)) {
                $randomiduniq = $this->mapi->randomiduniq();
                $winnerid_post     = 'WIN'.$randomiduniq;
              } else {
                $winnerid_post = $uri5;
              }
            ?>

            <?php

              $listactivewinnersbyid = $this->mapi->listactivewinnersbyidgdate($winnerid_post);
              if(!empty($listactivewinnersbyid)) {
                  foreach ($listactivewinnersbyid as $listactivewinnersbyidArray) {
                    $startdate_fe  = $listactivewinnersbyidArray->startdate;
                    $startdate_ex = explode("-",$startdate_fe);
                    $startdate_day = $startdate_ex[0];
                    $startdate_month = $startdate_ex[1];
                    $startdate_year = $startdate_ex[2];
                    //$startdate_form = $startdate_day."/".$startdate_month."/".$startdate_year;
                    $startdate_form = $startdate_year."-".$startdate_month."-".$startdate_day;


                    $enddate_fe  = $listactivewinnersbyidArray->enddate;
                    $enddate_ex = explode("-",$enddate_fe);
                		$enddate_day = $enddate_ex[0];
                		$enddate_month = $enddate_ex[1];
                		$enddate_year = $enddate_ex[2];
                		$enddate_form = $enddate_year."-".$enddate_month."-".$enddate_day;
                  }
             } else {
               $startdate_form  = '';
               $enddate_form  = '';
             }
            ?>

            <div class="row">
              <div class="col-md-2">
              <label>Start Date </label>
              <input type="date" required class="form-control" value="<?php echo $startdate_form; ?>" placeholder="" name="startdate" />
             </div>

             <div class="col-md-2">
              <label>End Date </label>
              <input type="date" required class="form-control" value="<?php echo $enddate_form; ?>" placeholder="" name="enddate" />
             </div>
           </div>





          <div class="form-group col-md-1">
            <label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>

            <input type="hidden" name="id"  value="<?php echo $winnerid_post; ?>" />
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
       </div>
     </form>




  </div>
  </div>
  <!--END Div-->


</div>




  <!--Row-->
  <div class="row">
  <div class="col-sm-12">

    <!-- Div-->
    <div class="row page-titles mx-0">
    <div class="col-sm-12 p-md-0">
        <h4 class="card-title">List Winners - <?php

          $listactivewinnersbyid = $this->mapi->listactivewinnersbyidgdate($winnerid_post);
          if(!empty($listactivewinnersbyid)) {
          foreach ($listactivewinnersbyid as $listactivewinnersbyidArray) {
            $startdate  = $listactivewinnersbyidArray->startdate;
            $enddate  = $listactivewinnersbyidArray->enddate;
            echo '(Start Date : '.$startdate.' - '.'To Date : '.$enddate.')';
          }
         }
        ?> </h4>
        <p>&nbsp;</p>





        <div class="row padd20">
          <!-- Card 1 -->
          <div class='card_p'>
            <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/gold.jpg)'>
              <!--<h2 class='card__name'>BASIC</h2>
              <p class='card__price' style='color: var(--color05)'>$19.99 <span class='card__priceSpan'>/month</span></p>-->
            </div>
            <div class='card__content'  >
              <div class='card__rows'>
                <p class=''>


                  <table class="table table-bordered table-responsive-sm">
                    <thead>
                    <tr><td>EmpID</td><td>Name</td><td>Domain & Department</td> </tr>
                    </thead>
                    <tbody>
                    <?php
                    $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Gold',$winnerid_post);
                   foreach ($listactivewinners as $listactivewinnersArray) {
                     $winnerid = $listactivewinnersArray->winnerid;
                     $g_catg = $listactivewinnersArray->g_catg;
                     $g_empid = $listactivewinnersArray->g_empid;
                     $g_name = $listactivewinnersArray->g_name;
                     $g_domain = $listactivewinnersArray->g_domain;
                     $g_depart = $listactivewinnersArray->g_depart;
                     if(empty($g_empid)) { $g_empid = '0'; }
                      ?>
                    <tr>
                      <td>
                        <a href="<?php echo site_url('admin/deletewinnerempid/'.$winnerid.'/'.$g_empid.''); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/>
                        </a>
                        <?php echo $g_empid; ?>

                      </td>
                      <td><?php echo $g_name; ?></td>
                      <td><b><?php echo $g_domain; ?></b><br/>
                             <?php echo $g_depart; ?></td>

                    </tr>
                    <?php } ?>
                  </tbody>
                  </table>

        				</p>

              </div>
             </div>
          </div>






          <!-- Card 2 -->
          <div class='card_p'>
            <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/silver.jpg)'>
              <!--<h2 class='card__name'>STANDARD</h2>
              <p class='card__price' style='color: var(--color06)'>$29.99 <span class='card__priceSpan'>/month</span></p>-->
            </div>
            <div class='card__content' style='border-color: var(--color06)'>
              <div class='card__rows'>
                <p class=''>


                  <table class="table table-bordered table-responsive-sm">
                    <thead>
                    <tr><td>EmpID</td><td>Name</td><td>Domain & Department</td></tr>
                    </thead>
                    <?php
                    $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Silver',$winnerid_post);
                   foreach ($listactivewinners as $listactivewinnersArray) {
                     $winnerid = $listactivewinnersArray->winnerid;
                     $g_catg = $listactivewinnersArray->g_catg;
                     $g_empid = $listactivewinnersArray->g_empid;
                     $g_name = $listactivewinnersArray->g_name;
                     $g_domain = $listactivewinnersArray->g_domain;
                     $g_depart = $listactivewinnersArray->g_depart;
                     if(empty($g_empid)) { $g_empid = '0'; }
                      ?>
                    <tr>
                      <td>
                        <a href="<?php echo site_url('admin/deletewinnerempid/'.$winnerid.'/'.$g_empid.''); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/>
                        </a>
                        <?php echo $g_empid; ?></td>
                      <td><?php echo $g_name; ?></td>
                      <td><b><?php echo $g_domain; ?></b><br/>
                          <?php echo $g_depart; ?></td>
                    </tr>
                    <?php } ?>
                  </table>

        				</p>

              </div>
             </div>
          </div>





          <!-- Card 3 -->
          <div class='card_p'>
            <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/bronze.jpg)'>
              <!--<h2 class='card__name'>PREMIUM</h2>
              <p class='card__price' style='color: var(--color12)'>$49.99 <span class='card__priceSpan'>/month</span></p>-->
            </div>
            <div class='card__content' style='border-color: var(--color07)'>
              <div class='card__rows'>
                <p class=''>


                  <table class="table table-bordered table-responsive-sm">
                    <thead>
                    <tr><td>EmpID</td><td>Name</td><td>Domain & Department</td></tr>
                    </thead>
                    <?php
                    $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Bronze',$winnerid_post);
                   foreach ($listactivewinners as $listactivewinnersArray) {
                     $winnerid = $listactivewinnersArray->winnerid;
                     $g_catg = $listactivewinnersArray->g_catg;
                     $g_empid = $listactivewinnersArray->g_empid;
                     $g_name = $listactivewinnersArray->g_name;
                     $g_domain = $listactivewinnersArray->g_domain;
                     $g_depart = $listactivewinnersArray->g_depart;
                     if(empty($g_empid)) { $g_empid = '0'; }
                      ?>
                    <tr>
                      <td>
                        <a href="<?php echo site_url('admin/deletewinnerempid/'.$winnerid.'/'.$g_empid.''); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/>
                        </a>
                        <?php echo $g_empid; ?></td>
                      <td><?php echo $g_name; ?></td>
                      <td><b><?php echo $g_domain; ?></b><br/>
                          <?php echo $g_depart; ?></td>
                    </tr>
                    <?php } ?>
                  </table>

        				</p>

              </div>
             </div>
          </div>

        </div>



    </div>
    </div>
  </div>
  </div>
  <!--END Row-->


</div>
</div>
