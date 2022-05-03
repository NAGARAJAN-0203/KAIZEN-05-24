<?php
$uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);
?>

<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/font-awesome-old/css/font-awesome.min.css" rel="stylesheet">


<link href="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist.min.css">

<link href="<?php echo base_url(); ?>assets/css/LineIcons.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/icons/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!--<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">-->


<link href="<?php echo base_url(); ?>assets/icons/material-design-iconic-font/css/materialdesignicons.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/themify-icons/css/themify-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/line-awesome/css/line-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/avasta/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/flaticon/flaticon.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/icons/icomoon/icomoon.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/aos/css/aos.min.css" rel="stylesheet">



<link href="<?php echo base_url(); ?>assets/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet">
<!--Notice-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/notice/css/notice.css" />
<!--END Notice-->

<!--Validation Engine-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/validation-engine/validationEngine.jquery.css" type="text/css"/>
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/validation-engine/template.css" type="text/css"/>-->
<!--END Validation Engine-->


 <!-- Fixed Column Table-->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/lib/freezetable/narrow-jumbotron.css" rel="stylesheet">-->
  <style>
.clone-head-table-wrap { top: 80px !important; /* width: 77%;*/ width:74%;  }
  </style>
<!--END Fixed Column Table-->


  <!-- Select Combo Box-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/selectbox/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  <!-- END Select Combo Box-->

  <?php
    if($uri3=='dashboard' || ($uri3=='dashboard' && $uri4=='index')) {
  ?>
  <link href="<?php echo base_url(); ?>assets/lib/bargraph1/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/lib/bargraph1/main.css" rel="stylesheet" type="text/css">

<?php } ?>

<?php
  if($uri3=='ideagen_dashboard' || ($uri3=='ideagen_dashboard' && $uri4=='index')) {
?>
<link href="<?php echo base_url(); ?>assets/lib/bargraph1/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/lib/bargraph1/main.css" rel="stylesheet" type="text/css">

<?php } ?>
