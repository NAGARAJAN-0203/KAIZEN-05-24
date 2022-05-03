<?php
$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$uri5 = $this->uri->segment(5);
?>



<?php
$viv_user_type = $this->session->userdata('viv_user_type');
$viv_profile_id = $this->session->userdata('viv_profile_id');
$viv_email = $this->session->userdata('viv_email');
 ?>


<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
-->



<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>



<script type="text/javascript">
<?php
if(($uri1=='admin' && $uri2=='') || ($uri1=='admin' && $uri2=='index') || empty($uri1)) {
?>

/**********************************
LOGIN
***********************************/
  $(document).on('submit', '#loginformsubmit', function(e) {
  //$('#loginformsubmit').on('submit', function (e) {

   e.preventDefault();
   $.ajax({
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    url: '<?php echo site_url('api/login'); ?>',
    //data: $('form').serialize(),
    data: new FormData(this),
    beforeSend: function(){
      $("#preloader").show();
    },
    complete: function(){
      $("#preloader").hide();
    },
    error: function(xhr, status, error) {
      //alert(error);
      //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
      $(".responsemessage").html(error);

    },
    success: function (response) {
      var objData = JSON.parse(response);
      //alert(objData);
      if(objData.mstatus=='0') {
        //alert(objData.message);
        $(".responsemessage").html("<r1>"+objData.message+"</r1>");
        $.notice({
          text: "Sorry! Invalid Details",
          type: "error"
        });
      } else if(objData.mstatus=='1') {
        //alert(objData.message);
        $(".responsemessage").html("<g1>"+"Login Successfully, Please Wait..."+"</g1>");
        $(".semail").val(objData.email);
        $(".susertype").val(objData.usertype);
        $(".sprofileid").val(objData.profileid);
        $(".sempid").val(objData.empid);
        $(".sprofile_pic").val(objData.profile_pic);
        $(".sfname").val(objData.fname);
        $(".sdesignation").val(objData.designation);
        $(".sdomain").val(objData.domain);
        $(".spassword").val(objData.password);
        $('#addsession').submit();
        $.notice({
          text: "Login Successfully, Please Wait...",
          type: "success"
        });
      }
      //$(".listallcountryaj").load().fadeIn('slow');
      //$(".ssdataresponse").html(response);
      //$('#ignismyModal').modal({backdrop: 'static', keyboard: false});
      //location.reload(true);
    }
  });
 });





<?php } ?>


<?php
if($uri1=='admin' && $uri2=='register') {
?>

/**********************************
LOGIN
***********************************/
  $(document).on('submit', '#registerformsubmit', function(e) {
  //$('#loginformsubmit').on('submit', function (e) {

   e.preventDefault();
   $.ajax({
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    url: '<?php echo site_url('api/register'); ?>',
    //data: $('form').serialize(),
    data: new FormData(this),
    beforeSend: function(){
      $("#preloader").show();
    },
    complete: function(){
      $("#preloader").hide();
    },
    error: function(xhr, status, error) {
      //alert(error);
      //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
      $(".responsemessage").html(error);

    },
    success: function (response) {
      var objData = JSON.parse(response);
      //alert(objData);
      if(objData.mstatus=='0') {
        //alert(objData.message);
        $(".responsemessage").html("<r1>"+objData.message+"</r1>");
        $.notice({
          text: "Sorry! Please Try Again",
          type: "error"
        });
      } else if(objData.mstatus=='1') {
        //alert(objData.message);
        window.location.replace("<?php echo site_url('admin/index/mgs'); ?>");

        $(".responsemessage").html("<g1>"+"Registered Successfully, Please Login..."+"</g1>");

        $.notice({
          text: "Registered Successfully, Please Login...",
          type: "success"
        });
      }
      //$(".listallcountryaj").load().fadeIn('slow');
      //$(".ssdataresponse").html(response);
      //$('#ignismyModal').modal({backdrop: 'static', keyboard: false});
      //location.reload(true);
    }
  });
 });





<?php } ?>



<?php
if($uri2=='kaizenidea' && $uri3=='useraccounts' && $uri4=='listusers')  {
?>

/**********************************
ADD TEAM
***********************************/

  $(document).on('click', '.deleteuser', function(){
  //$('.deleteemp').on('click', function (e) {
    var dataid = $(this).attr('dataid');
    //alert(dataid);
    $.ajax({
       url:"<?php echo site_url('api/deleteuser') ?>",
       type: "post",
       //data: serializedData,
       data: {dataid:dataid},
       success:function(response){
         var objData = JSON.parse(response);
         //alert(objData);
         if(objData.mstatus=='0') {
           //alert(objData.message);
           $(".responsemessage").html("<r1>"+objData.message+"</r1>");
           $.notice({
             text: ""+objData.message+"",
             type: "error"
           });
         } else if(objData.mstatus=='1') {
           //alert(objData.message);
           $(".responsemessage").html("<g1>"+objData.message+"</g1>");
           $(".tablerefresh").load(" .tablerefresh");
           $.notice({
             text: ""+objData.message+"",
             type: "success"
           });
          }

       }});

 });

<?php } ?>




<?php
if($uri3=='ideamang' && $uri4=='postidea') {
?>


  $(document).on("click", ".addattachfile", function() {
        //alert('asdsad');
        //$("input[id='attach_file']").click();
  });


  //$("#attach_file").change(function() {
  $(document).on('change', '#attach_file', function(e) {
  var attached_file= $('#attach_file').val();
  //var hiddchallengeid = $('.hiddchallengeid').val();
  //var hidduniqueurlid = $('.hidduniqueurlid').val();

  //
  if(attached_file!=""){


            var name = document.getElementById("attach_file").files[0].name;

            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
            if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

            {
             alert("Invalid File Format");
             return false;
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("attach_file").files[0]);
            var f = document.getElementById("attach_file").files[0];
            var fsize = f.size||f.fileSize;
            //alert(fsize);
            if(fsize > 10526268)  {
             alert("File too Big, please select a file less than 10mb");
            } else {

                   form_data.append("files", document.getElementById('attach_file').files[0]);
                   form_data.append('postid','<?php echo $uri5; ?>');
                   form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                     $.ajax({
                      url:"<?php echo site_url('api/ajaxaddimagebefore'); ?>",
                      method:"POST",
                      data: form_data,
                      contentType: false,
                      cache: false,
                      processData: false,
                      beforeSend:function(){
                       $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                      },
                      error: function(xhr, status, error) {
                        //alert(error);
                        //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                        $(".responsemessage_img_before").html("<r1>"+error+"</r1>");

                      },
                      success:function(data)
                      {

                          $('#uploaded_image').html('');
                          $('#attach_file').val("");
                          //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                          //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                          $(".referesh_att_before_image").load(" .referesh_att_before_image");
                          if(data==2){
                           alert("Something went wrong !!");
                          }

                      }
                   });
              }

            } else {
              alert("Attachment is missed !!");
              return false;
            }

  });
  /**disable for view page**/



  //$("#attach_file_after").change(function() {
  $(document).on('change', '#attach_file_after', function(e) {
  var attached_file= $('#attach_file_after').val();
  //var hiddchallengeid = $('.hiddchallengeid').val();
  //var hidduniqueurlid = $('.hidduniqueurlid').val();

  //
  if(attached_file!=""){


            var name = document.getElementById("attach_file_after").files[0].name;

            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
            if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

            {
             alert("Invalid File Format");
             return false;
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("attach_file_after").files[0]);
            var f = document.getElementById("attach_file_after").files[0];
            var fsize = f.size||f.fileSize;
            //alert(fsize);
            if(fsize > 10526268)  {
             alert("File too Big, please select a file less than 10mb");
            } else {

                   form_data.append("files_a", document.getElementById('attach_file_after').files[0]);
                   form_data.append('postid','<?php echo $uri5; ?>');
                   form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                     $.ajax({
                      url:"<?php echo site_url('api/ajaxaddimageafter'); ?>",
                      method:"POST",
                      data: form_data,
                      contentType: false,
                      cache: false,
                      processData: false,
                      beforeSend:function(){
                       $('#uploaded_image_after').html("<label class='text-success'>Image Uploading...</label>");
                      },
                      error: function(xhr, status, error) {
                        //alert(error);
                        //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                        $(".responsemessage_img_after").html("<r1>"+error+"</r1>");

                      },
                      success:function(data)
                      {
                          //alert(data);
                          $('#uploaded_image_after').html('');
                          $('#attach_file_after').val("");
                          //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                          //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                          $(".referesh_att_after_image").load(" .referesh_att_after_image");
                          if(data==2){
                           alert("Something went wrong !!");
                          }

                      }
                   });
              }

            } else {
              alert("Attachment is missed !!");
              return false;
            }

  });
  /**disable for view page**/



    //$("#attach_file_after").change(function() {
    $(document).on('change', '#attach_file_rootcause', function(e) {
    var attached_file= $('#attach_file_rootcause').val();
    //var hiddchallengeid = $('.hiddchallengeid').val();
    //var hidduniqueurlid = $('.hidduniqueurlid').val();

    //
    if(attached_file!=""){


              var name = document.getElementById("attach_file_rootcause").files[0].name;

              var form_data = new FormData();
              var ext = name.split('.').pop().toLowerCase();
              //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
              if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

              {
               alert("Invalid File Format");
               return false;
              }
              var oFReader = new FileReader();
              oFReader.readAsDataURL(document.getElementById("attach_file_rootcause").files[0]);
              var f = document.getElementById("attach_file_rootcause").files[0];
              var fsize = f.size||f.fileSize;
              //alert(fsize);
              if(fsize > 10526268)  {
               alert("File too Big, please select a file less than 10mb");
              } else {

                     form_data.append("files_a", document.getElementById('attach_file_rootcause').files[0]);
                     form_data.append('postid','<?php echo $uri5; ?>');
                     form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                       $.ajax({
                        url:"<?php echo site_url('api/ajaxaddimagerootcause'); ?>",
                        method:"POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend:function(){
                         $('#uploaded_image_rootcause').html("<label class='text-success'>Image Uploading...</label>");
                        },
                        error: function(xhr, status, error) {
                          //alert(error);
                          //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                          $(".responsemessage_img_rootcause").html("<r1>"+error+"</r1>");

                        },
                        success:function(data)
                        {
                            //alert(data);
                            $('#uploaded_image_rootcause').html('');
                            $('#attach_file_after').val("");
                            //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                            //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                            $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");
                            if(data==2){
                             alert("Something went wrong !!");
                            }

                        }
                     });
                }

              } else {
                alert("Attachment is missed !!");
                return false;
              }

    });
    /**disable for view page**/


  /**********************************
  Delete Image
  ***********************************/

  $(document).on('click', '.deletekaizenimg', function(e) {
    //$('.deleteemp').on('click', function (e) {
      var dataiid = $(this).attr('data-iid');
      var dataitype = $(this).attr('data-itype');
      //alert(dataid);
      $.ajax({
         url:"<?php echo site_url('api/deletekaizenimg') ?>",
         type: "post",
         //data: serializedData,
         data: {dataiid:dataiid,dataitype:dataitype},
         success:function(response){
           //alert(response);

           var objData = JSON.parse(response);

           if(objData.mstatus=='0') {
             //alert(objData.message);
             $(".responsemessage").html("<r1>"+objData.message+"</r1>");
             //$(".fun_reload_div").load(location.href + " .fun_reload_div");
             $(".referesh_att_before_image").load(" .referesh_att_before_image");
             $(".referesh_att_after_image").load(" .referesh_att_after_image");
             $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");

             $.notice({
               text: ""+objData.message+"",
               type: "error"
             });
           } else if(objData.mstatus=='1') {
             //alert(objData.message);
             if(objData.msgid=='before') {
                $(".responsemessage_img_before").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_before_image").load(" .referesh_att_before_image");
             } else if(objData.msgid=='after') {
                $(".responsemessage_img_after").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_after_image").load(" .referesh_att_after_image");
             } else if(objData.msgid=='rootcause') {
                $(".responsemessage_img_rootcause").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");
             }

             //$(".tablerefresh").load(" .tablerefresh");
             //$(".fun_reload_div").load(location.href + " .fun_reload_div");

             $.notice({
               text: ""+objData.message+"",
               type: "success"
             });
            }


         }});

   });




  /**********************************
  ADD TEAM
  ***********************************/

  $(document).on('click', '.addteammembnames', function(e) {
    //$('.deleteemp').on('click', function (e) {
      var eteamname = $('.eteamname').val();
      var efunction = $('.efunction').val();
      var eempid = $('.eempid').val();
      var eideaid = $('.eideaid').val();
      //alert(eteamname);

      $.ajax({
         url:"<?php echo site_url('api/ajaxaddteammembnames') ?>",
         type: "post",
         //data: serializedData,
         data: {eteamname:eteamname,efunction:efunction,eempid:eempid,eideaid:eideaid},
         success:function(response){
           var objData = JSON.parse(response);
           //alert(objData);
           //alert(objData.msgid);
           if(objData.mstatus=='0') {
             //alert(objData.message);
             $('.eteamname').val('');
             $('.efunction').val('');
             $('.eempid').val('');
             $('.eideaid').val('');
             //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
             //$(".tablerefresh_teammemb").html(objData.msgid);
             $.notice({
               text: ""+objData.message+"",
               type: "error"
             });
           } else if(objData.mstatus=='1') {

             $('.eteamname').val('');
             $('.efunction').val('');
             $('.eempid').val('');
             $('.eideaid').val('');

             //$(".responsemessage").html("<g1>"+objData.message+"</g1>");
             //$(".tablerefresh").load(" .tablerefresh");

              $.notice({
               text: ""+objData.message+"",
               type: "success"
             });

             //$(".tablerefresh_teammemb").load(location.href + " .tablerefresh_teammemb");
             $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");

            }

         }});


   });


   /**********************************
   Delete Image
   ***********************************/

   $(document).on('click', '.deleteteammember', function(e) {
     //$('.deleteemp').on('click', function (e) {
       var dataiid = $(this).attr('data-iid');
       var datamid = $(this).attr('data-mid');
       //alert(dataid);
       $.ajax({
          url:"<?php echo site_url('api/deleteteammember') ?>",
          type: "post",
          //data: serializedData,
          data: {dataiid:dataiid,datamid:datamid},
          success:function(response){



            var objData = JSON.parse(response);

            if(objData.mstatus=='0') {
              //alert(objData.message);
              //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
              //$(".fun_reload_div").load(location.href + " .fun_reload_div");
              $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");
              $.notice({
                text: ""+objData.message+"",
                type: "error"
              });
            } else if(objData.mstatus=='1') {

              //$(".tablerefresh").load(" .tablerefresh");
              //$(".fun_reload_div").load(location.href + " .fun_reload_div");
              $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");
              $.notice({
                text: ""+objData.message+"",
                type: "success"
              });
             }


          }});

    });




    /**********************************
    ADD TEAM
    ***********************************/

    $(document).on('click', '.addsustenance', function(e) {
      //$('.deleteemp').on('click', function (e) {
        var esn = $('.esn').val();
        var emc = $('.emc').val();
        var etargetdate = $('.etargetdate').val();
        var eresponsi = $('.eresponsi').val();
        var estatus = $('.estatus').val();
        var eideaid_s = $('.eideaid_s').val();



        $.ajax({
           url:"<?php echo site_url('api/addsustenance') ?>",
           type: "post",
           //data: serializedData,
           data: {esn:esn,emc:emc,etargetdate:etargetdate,eresponsi:eresponsi,estatus:estatus,eideaid_s:eideaid_s},
           success:function(response){
             //alert(response);
             var objData = JSON.parse(response);

             //alert(objData.msgid);
             if(objData.mstatus=='0') {
               //alert(objData.message);
               $('.esn').val('');
               $('.emc').val('');
               $('.etargetdate').val('');
               $('.eresponsi').val('');
               $('.estatus').val('');
               $('.eideaid_s').val('');
               //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
               //$(".tablerefresh_teammemb").html(objData.msgid);
               $.notice({
                 text: ""+objData.message+"",
                 type: "error"
               });
             } else if(objData.mstatus=='1') {

               $('.esn').val('');
               $('.emc').val('');
               $('.etargetdate').val('');
               $('.eresponsi').val('');
               $('.estatus').val('');
               $('.eideaid_s').val('');

               //$(".responsemessage").html("<g1>"+objData.message+"</g1>");
               //$(".tablerefresh").load(" .tablerefresh");

                $.notice({
                 text: ""+objData.message+"",
                 type: "success"
               });

               //$(".fun_reload_div").load(location.href + " .fun_reload_div");
               $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
              }

           }});


     });




     /**********************************
     Delete Image
     ***********************************/

     $(document).on('click', '.deletesustenance', function(e) {
       //$('.deleteemp').on('click', function (e) {
         var dataiid = $(this).attr('data-iid');
         var datasid = $(this).attr('data-sid');
         //alert(dataid);
         $.ajax({
            url:"<?php echo site_url('api/deletesustenance') ?>",
            type: "post",
            //data: serializedData,
            data: {dataiid:dataiid,datasid:datasid},
            success:function(response){



              var objData = JSON.parse(response);

              if(objData.mstatus=='0') {
                //alert(objData.message);
                //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
                //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
                $.notice({
                  text: ""+objData.message+"",
                  type: "error"
                });
              } else if(objData.mstatus=='1') {

                //$(".tablerefresh").load(" .tablerefresh");
                //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
                $.notice({
                  text: ""+objData.message+"",
                  type: "success"
                });
               }


            }});

      });






      /**********************
      INSTALLER INFO
      **********************/
      $(document).on('change', '.typeempid', function(e) {
        //var installercompname = $(".fil_installercompname option:selected").text();
        var typeempid = $(".typeempid").val();
           //alert(installercompname);
          /**** AJax*******/
          $.ajax({
          type: "POST",
          url: "<?php echo site_url('api/getempinfobyempid'); ?>",
          data: {typeempid:typeempid},
          success: function(response){
            //alert(response);
                var objData = JSON.parse(response);
                //var instid = objData.instid;


              //let pack_cst = (data.result[i].packingcost!='')?data.result[i].packingcost:0;
              var fname = objData.fname;
              var depart = objData.depart;


              $(".etypefname").val(fname);
              $(".etypedepart").val(depart);




           }

        });
      });






<?php } ?>




/*****************************
IDEA_GENERATION
******************************/

<?php
if($uri3=='ideagen' && $uri4=='postidea') {
?>


  $(document).on("click", ".addattachfile", function() {
        //alert('asdsad');
        //$("input[id='attach_file']").click();
  });


  //$("#attach_file").change(function() {
  $(document).on('change', '#attach_file', function(e) {
  var attached_file= $('#attach_file').val();
  //var hiddchallengeid = $('.hiddchallengeid').val();
  //var hidduniqueurlid = $('.hidduniqueurlid').val();

  //
  if(attached_file!=""){


            var name = document.getElementById("attach_file").files[0].name;

            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
            if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

            {
             alert("Invalid File Format");
             return false;
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("attach_file").files[0]);
            var f = document.getElementById("attach_file").files[0];
            var fsize = f.size||f.fileSize;
            //alert(fsize);
            if(fsize > 10526268)  {
             alert("File too Big, please select a file less than 10mb");
            } else {

                   form_data.append("files", document.getElementById('attach_file').files[0]);
                   form_data.append('postid','<?php echo $uri5; ?>');
                   form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                     $.ajax({
                      url:"<?php echo site_url('api/ajaxaddimagebefore_ideagen'); ?>",
                      method:"POST",
                      data: form_data,
                      contentType: false,
                      cache: false,
                      processData: false,
                      beforeSend:function(){
                       $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                      },
                      error: function(xhr, status, error) {
                        //alert(error);
                        //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                        $(".responsemessage_img_before").html("<r1>"+error+"</r1>");

                      },
                      success:function(data)
                      {

                          $('#uploaded_image').html('');
                          $('#attach_file').val("");
                          //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                          //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                          $(".referesh_att_before_image").load(" .referesh_att_before_image");
                          if(data==2){
                           alert("Something went wrong !!");
                          }

                      }
                   });
              }

            } else {
              alert("Attachment is missed !!");
              return false;
            }

  });
  /**disable for view page**/



  //$("#attach_file_after").change(function() {
  $(document).on('change', '#attach_file_after', function(e) {
  var attached_file= $('#attach_file_after').val();
  //var hiddchallengeid = $('.hiddchallengeid').val();
  //var hidduniqueurlid = $('.hidduniqueurlid').val();

  //
  if(attached_file!=""){


            var name = document.getElementById("attach_file_after").files[0].name;

            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
            if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

            {
             alert("Invalid File Format");
             return false;
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("attach_file_after").files[0]);
            var f = document.getElementById("attach_file_after").files[0];
            var fsize = f.size||f.fileSize;
            //alert(fsize);
            if(fsize > 10526268)  {
             alert("File too Big, please select a file less than 10mb");
            } else {

                   form_data.append("files_a", document.getElementById('attach_file_after').files[0]);
                   form_data.append('postid','<?php echo $uri5; ?>');
                   form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                     $.ajax({
                      url:"<?php echo site_url('api/ajaxaddimageafter_ideagen'); ?>",
                      method:"POST",
                      data: form_data,
                      contentType: false,
                      cache: false,
                      processData: false,
                      beforeSend:function(){
                       $('#uploaded_image_after').html("<label class='text-success'>Image Uploading...</label>");
                      },
                      error: function(xhr, status, error) {
                        //alert(error);
                        //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                        $(".responsemessage_img_after").html("<r1>"+error+"</r1>");

                      },
                      success:function(data)
                      {
                          //alert(data);
                          $('#uploaded_image_after').html('');
                          $('#attach_file_after').val("");
                          //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                          //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                          $(".referesh_att_after_image").load(" .referesh_att_after_image");
                          if(data==2){
                           alert("Something went wrong !!");
                          }

                      }
                   });
              }

            } else {
              alert("Attachment is missed !!");
              return false;
            }

  });
  /**disable for view page**/



    //$("#attach_file_after").change(function() {
    $(document).on('change', '#attach_file_rootcause', function(e) {
    var attached_file= $('#attach_file_rootcause').val();
    //var hiddchallengeid = $('.hiddchallengeid').val();
    //var hidduniqueurlid = $('.hidduniqueurlid').val();

    //
    if(attached_file!=""){


              var name = document.getElementById("attach_file_rootcause").files[0].name;

              var form_data = new FormData();
              var ext = name.split('.').pop().toLowerCase();
              //if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','pdf','ppt','docx','pptx','xlsx','xls','doc']) == -1)
              if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)

              {
               alert("Invalid File Format");
               return false;
              }
              var oFReader = new FileReader();
              oFReader.readAsDataURL(document.getElementById("attach_file_rootcause").files[0]);
              var f = document.getElementById("attach_file_rootcause").files[0];
              var fsize = f.size||f.fileSize;
              //alert(fsize);
              if(fsize > 10526268)  {
               alert("File too Big, please select a file less than 10mb");
              } else {

                     form_data.append("files_a", document.getElementById('attach_file_rootcause').files[0]);
                     form_data.append('postid','<?php echo $uri5; ?>');
                     form_data.append('profileid','<?php echo $viv_profile_id; ?>');

                       $.ajax({
                        url:"<?php echo site_url('api/ajaxaddimagerootcause_ideagen'); ?>",
                        method:"POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend:function(){
                         $('#uploaded_image_rootcause').html("<label class='text-success'>Image Uploading...</label>");
                        },
                        error: function(xhr, status, error) {
                          //alert(error);
                          //$('#ignismyModalfailure').modal({backdrop: 'static', keyboard: false});
                          $(".responsemessage_img_rootcause").html("<r1>"+error+"</r1>");

                        },
                        success:function(data)
                        {
                            //alert(data);
                            $('#uploaded_image_rootcause').html('');
                            $('#attach_file_after').val("");
                            //$(".fun_reloadattachdiv").load(location.href + " .fun_reloadattachdiv");
                            //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                            $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");
                            if(data==2){
                             alert("Something went wrong !!");
                            }

                        }
                     });
                }

              } else {
                alert("Attachment is missed !!");
                return false;
              }

    });
    /**disable for view page**/


  /**********************************
  Delete Image
  ***********************************/

  $(document).on('click', '.deletekaizenimg', function(e) {
    //$('.deleteemp').on('click', function (e) {
      var dataiid = $(this).attr('data-iid');
      var dataitype = $(this).attr('data-itype');
      //alert(dataid);
      $.ajax({
         url:"<?php echo site_url('api/deletekaizenimg_ideagen') ?>",
         type: "post",
         //data: serializedData,
         data: {dataiid:dataiid,dataitype:dataitype},
         success:function(response){
           //alert(response);

           var objData = JSON.parse(response);

           if(objData.mstatus=='0') {
             //alert(objData.message);
             $(".responsemessage").html("<r1>"+objData.message+"</r1>");
             //$(".fun_reload_div").load(location.href + " .fun_reload_div");
             $(".referesh_att_before_image").load(" .referesh_att_before_image");
             $(".referesh_att_after_image").load(" .referesh_att_after_image");
             $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");

             $.notice({
               text: ""+objData.message+"",
               type: "error"
             });
           } else if(objData.mstatus=='1') {
             //alert(objData.message);
             if(objData.msgid=='before') {
                $(".responsemessage_img_before").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_before_image").load(" .referesh_att_before_image");
             } else if(objData.msgid=='after') {
                $(".responsemessage_img_after").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_after_image").load(" .referesh_att_after_image");
             } else if(objData.msgid=='rootcause') {
                $(".responsemessage_img_rootcause").html("<g1>"+objData.message+"</g1>");
                $(".referesh_att_rootcause_image").load(" .referesh_att_rootcause_image");
             }

             //$(".tablerefresh").load(" .tablerefresh");
             //$(".fun_reload_div").load(location.href + " .fun_reload_div");

             $.notice({
               text: ""+objData.message+"",
               type: "success"
             });
            }


         }});

   });




  /**********************************
  ADD TEAM
  ***********************************/

  $(document).on('click', '.addteammembnames', function(e) {
    //$('.deleteemp').on('click', function (e) {
      var eteamname = $('.eteamname').val();
      var efunction = $('.efunction').val();
      var eempid = $('.eempid').val();
      var eideaid = $('.eideaid').val();
      //alert(eteamname);

      $.ajax({
         url:"<?php echo site_url('api/ajaxaddteammembnames_ideagen') ?>",
         type: "post",
         //data: serializedData,
         data: {eteamname:eteamname,efunction:efunction,eempid:eempid,eideaid:eideaid},
         success:function(response){
           var objData = JSON.parse(response);
           //alert(objData);
           //alert(objData.msgid);
           if(objData.mstatus=='0') {
             //alert(objData.message);
             $('.eteamname').val('');
             $('.efunction').val('');
             $('.eempid').val('');
             $('.eideaid').val('');
             //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
             //$(".tablerefresh_teammemb").html(objData.msgid);
             $.notice({
               text: ""+objData.message+"",
               type: "error"
             });
           } else if(objData.mstatus=='1') {

             $('.eteamname').val('');
             $('.efunction').val('');
             $('.eempid').val('');
             $('.eideaid').val('');

             //$(".responsemessage").html("<g1>"+objData.message+"</g1>");
             //$(".tablerefresh").load(" .tablerefresh");

              $.notice({
               text: ""+objData.message+"",
               type: "success"
             });

             //$(".tablerefresh_teammemb").load(location.href + " .tablerefresh_teammemb");
             $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");

            }

         }});


   });


   /**********************************
   Delete Image
   ***********************************/

   $(document).on('click', '.deleteteammember', function(e) {
     //$('.deleteemp').on('click', function (e) {
       var dataiid = $(this).attr('data-iid');
       var datamid = $(this).attr('data-mid');
       //alert(dataid);
       $.ajax({
          url:"<?php echo site_url('api/deleteteammember_ideagen') ?>",
          type: "post",
          //data: serializedData,
          data: {dataiid:dataiid,datamid:datamid},
          success:function(response){



            var objData = JSON.parse(response);

            if(objData.mstatus=='0') {
              //alert(objData.message);
              //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
              //$(".fun_reload_div").load(location.href + " .fun_reload_div");
              $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");
              $.notice({
                text: ""+objData.message+"",
                type: "error"
              });
            } else if(objData.mstatus=='1') {

              //$(".tablerefresh").load(" .tablerefresh");
              //$(".fun_reload_div").load(location.href + " .fun_reload_div");
              $(".tablerefresh_teammemb").load( " .tablerefresh_teammemb");
              $.notice({
                text: ""+objData.message+"",
                type: "success"
              });
             }


          }});

    });




    /**********************************
    ADD TEAM
    ***********************************/

    $(document).on('click', '.addsustenance', function(e) {
      //$('.deleteemp').on('click', function (e) {
        var esn = $('.esn').val();
        var emc = $('.emc').val();
        var etargetdate = $('.etargetdate').val();
        var eresponsi = $('.eresponsi').val();
        var estatus = $('.estatus').val();
        var eideaid_s = $('.eideaid_s').val();



        $.ajax({
           url:"<?php echo site_url('api/addsustenance_ideagen') ?>",
           type: "post",
           //data: serializedData,
           data: {esn:esn,emc:emc,etargetdate:etargetdate,eresponsi:eresponsi,estatus:estatus,eideaid_s:eideaid_s},
           success:function(response){
             //alert(response);
             var objData = JSON.parse(response);

             //alert(objData.msgid);
             if(objData.mstatus=='0') {
               //alert(objData.message);
               $('.esn').val('');
               $('.emc').val('');
               $('.etargetdate').val('');
               $('.eresponsi').val('');
               $('.estatus').val('');
               $('.eideaid_s').val('');
               //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
               //$(".tablerefresh_teammemb").html(objData.msgid);
               $.notice({
                 text: ""+objData.message+"",
                 type: "error"
               });
             } else if(objData.mstatus=='1') {

               $('.esn').val('');
               $('.emc').val('');
               $('.etargetdate').val('');
               $('.eresponsi').val('');
               $('.estatus').val('');
               $('.eideaid_s').val('');

               //$(".responsemessage").html("<g1>"+objData.message+"</g1>");
               //$(".tablerefresh").load(" .tablerefresh");

                $.notice({
                 text: ""+objData.message+"",
                 type: "success"
               });

               //$(".fun_reload_div").load(location.href + " .fun_reload_div");
               $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
              }

           }});


     });




     /**********************************
     Delete Image
     ***********************************/

     $(document).on('click', '.deletesustenance', function(e) {
       //$('.deleteemp').on('click', function (e) {
         var dataiid = $(this).attr('data-iid');
         var datasid = $(this).attr('data-sid');
         //alert(dataid);
         $.ajax({
            url:"<?php echo site_url('api/deletesustenance_ideagen') ?>",
            type: "post",
            //data: serializedData,
            data: {dataiid:dataiid,datasid:datasid},
            success:function(response){



              var objData = JSON.parse(response);

              if(objData.mstatus=='0') {
                //alert(objData.message);
                //$(".responsemessage").html("<r1>"+objData.message+"</r1>");
                //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
                $.notice({
                  text: ""+objData.message+"",
                  type: "error"
                });
              } else if(objData.mstatus=='1') {

                //$(".tablerefresh").load(" .tablerefresh");
                //$(".fun_reload_div").load(location.href + " .fun_reload_div");
                $(".tablerefresh_sustenance").load( " .tablerefresh_sustenance");
                $.notice({
                  text: ""+objData.message+"",
                  type: "success"
                });
               }


            }});

      });






      /**********************
      INSTALLER INFO
      **********************/
      $(document).on('change', '.typeempid', function(e) {
        //var installercompname = $(".fil_installercompname option:selected").text();
        var typeempid = $(".typeempid").val();
           //alert(installercompname);
          /**** AJax*******/
          $.ajax({
          type: "POST",
          url: "<?php echo site_url('api/getempinfobyempid'); ?>",
          data: {typeempid:typeempid},
          success: function(response){
            //alert(response);
                var objData = JSON.parse(response);
                //var instid = objData.instid;


              //let pack_cst = (data.result[i].packingcost!='')?data.result[i].packingcost:0;
              var fname = objData.fname;
              var depart = objData.depart;


              $(".etypefname").val(fname);
              $(".etypedepart").val(depart);




           }

        });
      });






<?php } ?>




</script>



<script>

$(document).ready(function() {


  /**********************
  PANEL
  **********************/
  $(document).on('change', '.fil_approv_name', function(e) {
    var email = $(".fil_approv_name option:selected").text();
    //var myArrayemail = email.split(" - ");
    var str_email = email.split(" - ")[0];
    //alert(str_email);
      /**** AJax*******/
      $.ajax({
      type: "POST",
      url: "<?php echo site_url('api/ajaxgetdeptnamebyempid'); ?>",
      data: {email:str_email},
      dataType:"json",
      success: function(data){
          //alert(data);

          var select=' <select class="form-control validate[required] mb-10 " name="approv_dept" id="approv_dept" >';

          $.each(data.result, function(i, item) {
          //let pack_cst = (data.result[i].packingcost!='')?data.result[i].packingcost:0;
          //let ut_prc = (data.result[i].price!='')?data.result[i].price:0;
           //select+='<option product_id="'+data.result[i].product_id+'" unit_price="'+ut_prc+'" packingcost="'+pack_cst+'" value="'+data.result[i].product_title+'">'+data.result[i].product_title+'</option>'
           select+='<option value="'+data.result[i].depart+'">'+data.result[i].depart+'</option>';
          });
             select+="</select>";

          $(".sel_fil_approv_name").html(select);
      }
      });
      /**** AJax*******/

  });
});
</script>



<script>

$(document).ready(function() {


  /**********************
  PANEL
  **********************/
  $(document).on('change', '.fil_domain', function(e) {
    var fil_domain = $(".fil_domain option:selected").text();
       //alert(fil_domain);
      /**** AJax*******/
      $.ajax({
      type: "POST",
      url: "<?php echo site_url('api/ajaxgetdeptbydomain'); ?>",
      data: {fil_domain:fil_domain},
      dataType:"json",
      success: function(data){
          //alert(data);

          var select='<select class="form-control" name="dept" id="dept">';
              select+="<option value=''>select</option>";
          $.each(data.result, function(i, item) {
          //let pack_cst = (data.result[i].packingcost!='')?data.result[i].packingcost:0;
          //let ut_prc = (data.result[i].price!='')?data.result[i].price:0;
           //select+='<option product_id="'+data.result[i].product_id+'" unit_price="'+ut_prc+'" packingcost="'+pack_cst+'" value="'+data.result[i].product_title+'">'+data.result[i].product_title+'</option>'
           select+='<option value="'+data.result[i].depart+'">'+data.result[i].depart+'</option>';
          });
             select+="</select>";

          $(".sel_fil_dept").html(select);
      }
      });
      /**** AJax*******/

  });



 });
</script>
