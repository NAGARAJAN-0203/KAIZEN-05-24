<?php
  $uri1 = $this->uri->segment(1);
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);


if($uri3=='smt' && $uri4=='addsmt') {
   $this->load->view('kaizenidea/smt/addsmt');
}

else if($uri3=='smt' && $uri4=='viewsmt') {
   $this->load->view('kaizenidea/smt/listsmt');
}



//Edited Info



?>
