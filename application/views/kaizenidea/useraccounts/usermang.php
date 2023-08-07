<?php
  $uri1 = $this->uri->segment(1);
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);


if($uri3=='useraccounts' && $uri4=='addusers') {
   $this->load->view('kaizenidea/useraccounts/addusers');
}

else if($uri3=='useraccounts' && $uri4=='listusers') {
   $this->load->view('kaizenidea/useraccounts/listusers');
}

else if($uri3=='useraccounts' && $uri4=='editusers') {
   $this->load->view('kaizenidea/useraccounts/editusers');
}

else if($uri3=='useraccounts' && $uri4=='viewusersdetail') {
   $this->load->view('kaizenidea/useraccounts/viewusersdetail');
}


else if($uri3=='useraccounts' && $uri4=='listusersbykaizen') {
   $this->load->view('kaizenidea/useraccounts/listusersbykaizen');
}


else if($uri3=='useraccounts' && $uri4=='listkaizensbyuser') {
   $this->load->view('kaizenidea/useraccounts/listkaizensbyuser');
}


//Edited Info



?>
