<?php
     $uri1 = $this->uri->segment(1);
     $uri2 = $this->uri->segment(2);
     $uri3 = $this->uri->segment(3);
     $uri4 = $this->uri->segment(4);

     if($uri2=='kaizenidea' && $uri3=='winners' && $uri4=='winnerslist') {
        $this->load->view('kaizenidea/winners/winnerslist');
     }
     if($uri2=='kaizenidea' && $uri3=='winners' && $uri4=='createwinner') {
        $this->load->view('kaizenidea/winners/createwinner');
     }

 ?>
