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
              </div>

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

            <p>&nbsp;</p>

            <div class="row">

             <div class="col-md-2">
              <label>Start Date </label>
              <input type="date" class="form-control" placeholder="" name="startdate" />
             </div>

             <div class="col-md-2">
              <label>End Date </label>
              <input type="date" class="form-control" placeholder="" name="enddate" />
             </div>
           </div>

          <div class="form-group col-md-1">
            <label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
       </div>
     </form>




  </div>
  </div>
  <!--END Div-->








</div>

</div>
</div>
