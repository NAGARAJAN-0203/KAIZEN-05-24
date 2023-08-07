<?php
  $uri1 = $this->uri->segment(1);
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);




if($uri3=='ideagen' && $uri4=='postideaauto') {
    $this->mapi->createidea_ideagen();

}

 elseif($uri3=='ideagen' && $uri4=='postidea') {
   $this->load->view('kaizenidea/ideagen/postidea-new');
   //$this->load->view('kaizenidea/idea/postidea');
}

elseif($uri3=='ideagen' && $uri4=='postidea_mangedit') {
  $this->load->view('kaizenidea/ideagen/postidea-new-mangedit');
  //$this->load->view('kaizenidea/idea/postidea');
}

elseif($uri3=='ideagen' && $uri4=='myidea') {
   $this->load->view('kaizenidea/ideagen/myidea');
}

elseif($uri3=='ideagen' && $uri4=='ideaverification') {
   $this->load->view('kaizenidea/ideagen/ideaverification');
}

else if($uri3=='ideagen' && $uri4=='myidea_imgapproval') {
   $this->load->view('kaizenidea/ideagen/myidea_imgapproval');
}



//Edited Info



?>
