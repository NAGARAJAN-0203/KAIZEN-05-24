<?php
     $uri1 = $this->uri->segment(1);
     $uri2 = $this->uri->segment(2);
     $uri3 = $this->uri->segment(3);
     $uri4 = $this->uri->segment(4);

     if($uri2=='kaizenidea' && $uri3=='domaindepartment' && $uri4=='viewdomaindepartment') {
        $this->load->view('kaizenidea/domaindepartment/viewdomaindepartment');
     }


 ?>
