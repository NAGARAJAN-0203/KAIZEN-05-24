<?php
     $uri1 = $this->uri->segment(1);
     $uri2 = $this->uri->segment(2);
     $uri3 = $this->uri->segment(3);
     $uri4 = $this->uri->segment(4);

     if($uri2=='tremmeandous' && $uri3=='notifications' && $uri4=='adminnotifications') {
        $this->load->view('tremmeandous/notifications/adminnotifications');
     }

     if($uri2=='tremmeandous' && $uri3=='notifications' && $uri4=='empnotifications') {
       //$this->load->view('tremmeandous/dashboard/dashboard');
        $this->load->view('tremmeandous/notifications/empnotifications');
     }
 ?>
