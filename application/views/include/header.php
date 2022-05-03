<?php
$viv_profile_id = $this->session->userdata('viv_profile_id');
$viv_empid = $this->session->userdata('viv_empid');
$viv_profile_pic = $this->session->userdata('viv_profile_pic');
$viv_fname = $this->session->userdata('viv_fname');
$viv_designation = $this->session->userdata('viv_designation');
$viv_domain = $this->session->userdata('viv_domain');
$viv_email = $this->session->userdata('viv_email');

?>
<!--Header-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>

                <ul class="navbar-nav header-right">
      <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen" href="#">
                            <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
                        </a>
      </li>








    <li class="nav-item dropdown header-profile">


      <?php
      /*
      $url = site_url('api/viewmyprofile_id/'.$viv_profile_id.'');
      $json= file_get_contents($url);
      $data = json_decode($json);
        $i=1;
      foreach($data as $rowArray) {
      $empid = $rowArray->empid;
      */

       ?>
        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
          <?php
            $profile_pic = $viv_profile_pic;
            $filepath = 'assets/images/profile/'.$profile_pic;

						if(file_exists($filepath)) {
                $returnprofilepic = base_url().$filepath;
            } else {
                $default = 'assets/images/defaultimg.jpg';
                $returnprofilepic = base_url().$default;;
            }

          ?>
          <img src="<?php echo $returnprofilepic; ?>" width="20" alt=""/>
          <div class="header-info">
            <span>Hi, <strong><?php echo $viv_fname; ?></strong></span>
            <small><?php echo $this->mapi->finddeptbyemail($viv_email); ?></small>
           </div>
        </a>


                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?php echo site_url('admin/kaizenidea/myprofile/editprofile'); ?>" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>

                            <a href="<?php echo site_url('admin/logout'); ?>" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!--End Header-->
