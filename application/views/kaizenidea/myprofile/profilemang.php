<?php
  $uri1 = $this->uri->segment(1);
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);


if($uri3=='myprofile' && $uri4=='editprofile') {
   $this->load->view('kaizenidea/myprofile/editprofile');
}
 



//Edited Info



?>
