<?php
     $uri1 = $this->uri->segment(1);
     $uri2 = $this->uri->segment(2);
     $uri3 = $this->uri->segment(3);
     $uri4 = $this->uri->segment(4);

     if($uri2=='kaizenidea' && $uri3=='evaluationcriteriakaizen') {
        $this->load->view('kaizenidea/evaluation/evaluationcriteriakaizen');
     }
     if($uri2=='kaizenidea' && $uri3=='evaluationcriteriabreakthrough') {
        $this->load->view('kaizenidea/evaluation/evaluationcriteriabreakthrough');
     }



 ?>
