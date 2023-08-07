
     <?php
       $uri1 = $this->uri->segment(1);
       $uri2 = $this->uri->segment(2);
       $uri3 = $this->uri->segment(3);
       $uri4 = $this->uri->segment(4);
      $this->load->view('include/html-top');
      $this->load->view('include/inline-header');
    ?>

		<style>


		</style>
   </head>
  <body>
   <div id="app">

     <?php
       $this->load->view('include/preloader');
     ?>


    <div id="main-wrapper">


      <?php
        $this->load->view('include/logo-header');
        $this->load->view('include/right-chatbox');
        $this->load->view('include/kaizen-left-navi');
        $this->load->view('include/header');
        $this->load->view('include/main-navi');

        $viv_user_type = $this->session->userdata('viv_user_type');

       if($uri2=='kaizenidea' && $uri3=='ideamang') {
          //if($viv_user_type=='TRMMADMIN' || $viv_user_type=='TRMMEMP') {
            $this->load->view('kaizenidea/idea/ideamang');
          //} else { redirect('admin/logout'); }

       } elseif($uri2=='kaizenidea' && $uri3=='ideagen') {
            $this->load->view('kaizenidea/ideagen/ideamang');
       } elseif($uri2=='kaizenidea' && $uri3=='smt') {
            $this->load->view('kaizenidea/smt/smtmang');
       } elseif($uri2=='kaizenidea' && $uri3=='dashboard') {
            $this->load->view('kaizenidea/dashboard');
       } elseif($uri2=='kaizenidea' && $uri3=='dashboardcadre') {
            $this->load->view('kaizenidea/dashboardcadre');
       } elseif($uri2=='kaizenidea' && $uri3=='useraccounts') {
            $this->load->view('kaizenidea/useraccounts/usermang');
       } elseif($uri2=='kaizenidea' && $uri3=='myprofile') {
            $this->load->view('kaizenidea/myprofile/profilemang');
       } elseif($uri2=='kaizenidea' && $uri3=='reportdownload') {
            $this->load->view('kaizenidea/reportdownload');
       } elseif($uri2=='kaizenidea' && $uri3=='userdownload') {
            $this->load->view('kaizenidea/userdownload');
       } elseif($uri2=='kaizenidea' && $uri3=='ideagen_dashboard') {
            $this->load->view('kaizenidea/ideagen_dashboard');
       } elseif($uri2=='kaizenidea' && $uri3=='domaindepartment') {
            $this->load->view('kaizenidea/domaindepartment/domaindepartmentmang');
       } elseif($uri2=='kaizenidea' && $uri3=='winners') {
            $this->load->view('kaizenidea/winners/winnersmang');
       } elseif($uri2=='kaizenidea' && $uri3=='driremainder') {
            $this->load->view('kaizenidea/driremainder');
       } elseif($uri2=='kaizenidea' && $uri3=='evaluationcriteriakaizen') {
            $this->load->view('kaizenidea/evaluation/evaluationmang');
       } elseif($uri2=='kaizenidea' && $uri3=='evaluationcriteriabreakthrough') {
            $this->load->view('kaizenidea/evaluation/evaluationmang');
       }







        $this->load->view('include/footer');
     ?>

    </div><!--main-wrapper-->



	 </div><!--App-->
     <?php
      //$this->load->view('include/app');
      $this->load->view('include/master-js');
      $this->load->view('include/html-bottom');



   ?>




  </body>
</html>
