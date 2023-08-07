<?php
  $uri1 = $this->uri->segment(1);
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);


if($uri3=='ideamang' && $uri4=='postideaauto') {
    $this->mapi->createidea();
}
else if($uri3=='ideamang' && $uri4=='postidea') {
   $this->load->view('kaizenidea/idea/postidea-new');
   //$this->load->view('kaizenidea/idea/postidea');
}

else if($uri3=='ideamang' && $uri4=='postidea_mangedit') {
   $this->load->view('kaizenidea/idea/postidea-new-mangedit');
   //$this->load->view('kaizenidea/idea/postidea');
}

else if($uri3=='ideamang' && $uri4=='myidea') {
   $this->load->view('kaizenidea/idea/myidea');
}

else if($uri3=='ideamang' && $uri4=='myidea_imgapproval') {
   $this->load->view('kaizenidea/idea/myidea_imgapproval');
}

else if($uri3=='ideamang' && $uri4=='myidea_monthfilter') {
   $this->load->view('kaizenidea/idea/myidea_monthfilter');
}

else if($uri3=='ideamang' && $uri4=='myidea_half_monthfilter') {
   $this->load->view('kaizenidea/idea/myidea_half_monthfilter');
}



else if($uri3=='ideamang' && $uri4=='ideaverification') {
   $this->load->view('kaizenidea/idea/ideaverification');
}




//Edited Info



?>
