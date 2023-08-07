<?php
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);

?>
<div class="content-body">
<div class="container-fluid">

<div class="row">
<div class="col-sm-5">

  <!-- Div-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
    <form action="<?php echo site_url('admin/addcatg'); ?>" role="form"    method="post" autocomplete="off" >
       <div class="form-row">


             <div class="form-group col-md-10">
              <label>Domain Name
                <span>
                  <?php
                  if($uri5=='dms1') {
                    echo '<g1>Added Successfully</g1>';
                  } elseif($uri5=='dmf1') {
                    echo '<r1>Sorry! Please Try Again</r1>';
                  } elseif($uri5=='dmae1') {
                    echo '<r1>Domain name already exist</r1>';
                  }
                  ?>
                </span>
              </label>
              <input type="text" class="form-control" placeholder="" name="domainname" />
             </div>


          <div class="form-group col-md-2">
            <label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
       </div>
     </form>
  </div>
  </div>
  <!--END Div-->





<div class="row">
   <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <div>

                <?php
                $count_listdomains = $this->mapi->count_listdomains();
                ?>

                <h4 class="card-title">Domain Names - <?php echo $count_listdomains; ?>
                </h4>

              <p class="responsemessage"></p>


              </div>


          </div>

          <div class="card-body">


              <div class="table-responsive ">


                  <table class="table table-bordered table-responsive-sm tablerefresh" >


                      <thead>

                          <tr class="tablesort">

                              <th class="text-center">#</th>
                            <!--  <th>ProfilePic</th>-->
                              <th class="text-center">Domain Name</th>
                              <th class="text-center">Total Emp</th>
                               <th class="text-center">Status</th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php
                        $listdomains = $this->mapi->listdomains();
                        $i=1;
                        $t_totalusersbydomain = 0;
                        foreach ($listdomains as $rowArray) {
                          $domainid = $rowArray->domainid;
                        ?>
                          <tr>
                              <td class="text-center"><?php echo $i; ?></td>

                               <td class="text-center"><?php $domainn = $rowArray->domain;
                               echo $domainn;
                               ?></td>
                               <td class="text-center">
                                 <a target="_blank" href="<?php echo site_url('admin/kaizenidea/useraccounts/listusers/'.$domainn.''); ?>">
                                 <?php
                                 $totalusersbydomain = $this->mapi->totalusersbydomain($domainn);
                                 echo $totalusersbydomain;

                                 $t_totalusersbydomain += $totalusersbydomain;
                                 ?>
                               </a>
                               </td>

                               <td class="text-center">
                                <?php $status = $rowArray->status;
                                if($status==1) { ?>
                                <a href="<?php echo site_url('admin/upddmstatus/'.$domainid.'/0'); ?>"><span class="badge-sm badge-success">Active</span></a>
                              <?php } else if($status==0) { ?>
                                <a href="<?php echo site_url('admin/upddmstatus/'.$domainid.'/1'); ?>"><span class="badge-sm badge-warning">Inactive</span></a>
                              <?php } ?>
                              </td>

                               <td>
                                  <div class="d-flex align-center84">
                                    <!--
                                  <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                -->

                                  <a  onclick="return confirm('Are you sure you want to delete this employee account?');" href="<?php echo site_url('admin/deletedomain/'.$domainid.''); ?>" dataid="" class="btn btn-danger shadow btn-xs sharp deleteuser"><i class="fa fa-trash"></i></a>
                                  </div>
                              </td>
                          </tr>

                        <?php $i++; } ?>

                        <tr>
                          <td colspan="2" align="right">Total Employees</td>
                           <td class="text-center"><?php echo $t_totalusersbydomain; ?></td>
                          <td colspan="2"></td>

                        </tr>


                      </tbody>
                  </table>




              </div>
          </div>
      </div>
  </div>
 </div>

</div><!--col-6-->




<div class="col-sm-7">

  <!-- Div-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
    <form action="<?php echo site_url('admin/adddepartment'); ?>" role="form"    method="post" autocomplete="off" >
       <div class="form-row">


             <div class="form-group col-md-5">
              <label>Domain Name
               </label>
              <select class="form-control" name="domainname"   >
                <option value="">Select</option>
                <?php
                $listdomains = $this->mapi->listdomains();
                 foreach ($listdomains as $rowArray) {
                   $selectdomainname = $rowArray->domain;
                ?>
                <option value="<?php echo $selectdomainname; ?>"><?php echo $selectdomainname; ?></option>
              <?php }   ?>
               </select>
             </div>

             <div class="form-group col-md-5">
              <label>Department Name
                <span>
                  <?php
                  if($uri5=='dps1') {
                    echo '<g1>Added Successfully</g1>';
                  } elseif($uri5=='dpf1') {
                    echo '<r1>Sorry! Please Try Again</r1>';
                  } elseif($uri5=='dpae1') {
                    echo '<r1>Department name already exist</r1>';
                  }
                  ?>
                </span>
              </label>
              <input type="text" class="form-control" placeholder="" name="departmentname" />
             </div>


          <div class="form-group col-md-2">
            <label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
       </div>
     </form>
  </div>
  </div>
  <!--END Div-->





<div class="row">
   <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <div>



                <h4 class="card-title">Department Names - <?php
                $count_listdepartment = $this->mapi->count_listdepartment();
                echo $count_listdepartment;
                ?> </h4>

              <p class="responsemessage"></p>


              </div>


          </div>

          <div class="card-body">


              <div class="table-responsive ">
                   <table class="table table-bordered table-responsive-sm tablerefresh" >
                       <thead>
                           <tr class="tablesort">
                              <th class="text-center">#</th>
                            <!--  <th>ProfilePic</th>-->
                              <th class="text-center">Domain Name</th>
                              <th class="text-center">Department Name</th>
                              <th class="text-center">Total Emp</th>
                               <th class="text-center">Status</th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php
                        $listdepartment = $this->mapi->listdepartment();
                        $j=1;
                        $t_totalusersbydomaindepart = 0;
                        foreach ($listdepartment as $listdepartmentrowArray) {
                          $dep_deptid = $listdepartmentrowArray->deptid;
                          $dep_domainname = $listdepartmentrowArray->domain;
                          $dep_departmentname = $listdepartmentrowArray->department;
                          $dep_status = $listdepartmentrowArray->status;
                        ?>

                          <tr>
                              <td class="text-center"><?php echo $j; ?></td>

                               <td class="text-center"><?php echo $dep_domainname; ?></td>
                               <td class="text-center"><?php echo $dep_departmentname; ?></td>

                               <td class="text-center">
                                 <a target="_blank" href="<?php echo site_url('admin/kaizenidea/useraccounts/listusers/'.$dep_domainname.'/'.$dep_departmentname.''); ?>">
                               <?php
                               $totalusersbydomaindepart = $this->mapi->totalusersbydomaindepart($dep_domainname,$dep_departmentname);
                               echo $totalusersbydomaindepart;

                               $t_totalusersbydomaindepart += $totalusersbydomaindepart;
                               ?>
                             </a>
                             </td>


                             <td class="text-center">
                              <?php
                              if($dep_status==1) { ?>
                              <a href="<?php echo site_url('admin/upddpstatus/'.$dep_deptid.'/0'); ?>"><span class="badge-sm badge-success">Active</span></a>
                            <?php } else if($dep_status==0) { ?>
                              <a href="<?php echo site_url('admin/upddpstatus/'.$dep_deptid.'/1'); ?>"><span class="badge-sm badge-warning">Inactive</span></a>
                            <?php } ?>
                            </td>






                              <td>
                                  <div class="d-flex align-center84">
                                    <!--
                                  <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                -->

                                  <a onclick="return confirm('Are you sure you want to delete this employee account?');" href="<?php echo site_url('admin/deletedepart/'.$dep_deptid.''); ?>" class="btn btn-danger shadow btn-xs sharp deleteuser"><i class="fa fa-trash"></i></a>
                                  </div>
                              </td>
                          </tr>

                        <?php $j++;  } ?>

                        <tr>
                          <td colspan="3" align="right">Total Employees</td>
                           <td class="text-center"><?php echo $t_totalusersbydomaindepart; ?></td>
                          <td colspan="2"></td>
                        </tr>

                      </tbody>
                  </table>




              </div>
          </div>
      </div>
  </div>
 </div>

</div><!--col-6-->

</div>

</div>
</div>
