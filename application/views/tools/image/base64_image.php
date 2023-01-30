   
    <!--begin::Card-->
    <div class="card border-0 shadow-none h-lg-100 " style="background-color: #243763">
      <!--begin::Card body-->
      <div class="card-body d-flex flex-column   pb-0 pt-15">
        <!--begin::Wrapper-->
        <div class="px-10 mb-10">
          <!--begin::Heading-->
          <h1 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6"><?=$title_1?></h1>
          
          <!--end::Heading-->
          <!--begin::List-->
          <div class="mb-7 ">
            <!-- <form class="form-horizontal" name="form1" id="form1" method="post" action="<?php echo site_url(uri_string()) ?>"> -->
              <div class="mb-3">
                <div class='content'>
                  <!-- <form class="form-horizontal" name="form1" id="form1" method="post" action="<?php echo site_url(uri_string()) ?>"> -->
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label text-white">Masukkan String Base64:</label>
                      <textarea placeholder="Masukkan String Base64" class="form-control" id="exampleFormControlTextarea1" name="val" rows="6"></textarea>
                    </div>

                    <div class="form-actions right mt-4">
                    <button type="button" name="button_submit" class="btn btn-sm btn-primary me-3" id="btn-on-process" onclick="process_generate()" class="far fa-save">Generate</button>
                    <a href="" class="btn btn-sm btn-secondary">Reset</a>
                    </div>
                  <!-- </form> -->
                </div> 
              </div>

              <div class="mb-7 mt-10 ">
                <div class="row" id="view_data"  style="display: none">
                  <div class="col-md-12">
                    <div class="table-responsive text-center">
                    <div class="fw-semibold" id="show_base64image"></div>
                    </div>
                  </div>
                </div>
                </div>

              <h2 class="text-white"><b>Ubah Base64 Anda menjadi Gambar</b></h2>
              <p class="text-white">
              Base64 ke Image encoder Online membantu mengonversi String Base64 ke gambar. 
              Copy script base64 kamu lalu silahkan download Gambarnya.

              Dengan tools ini memungkinkan siapapun tanpa menginstal di PC atau perangkat mereka untuk mengonversi data Base64 menjadi file gambar. Alfabet Base64 mencakup semua 26 karakter alfabet huruf besar dari A-Z dan 26 huruf kecil yang sesuai dari a-z
              </p>

             
              
          </div>
          <!--begin::List-->
          
        </div>
        
        
        <?=$feature_tools?>
      </div>

      
    </div>

    <script type="text/javascript">
    function myFunction(clicked_id) {
      // Get the text field
      var copyText = document.getElementById('' +clicked_id+'');

      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices

       // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
      
      // Alert the copied text
      alert("Copied the text: " + copyText.value);
    }

  function process_generate() {
    $("#btn-on-process").attr("disabled", true);
    $("#btn-on-process").html('Loading..');
    var textarea_change_location_massal = $('textarea[name=val]').val();
    console.log(textarea_change_location_massal);
    if (textarea_change_location_massal == '') {
      // alert('Insert Minimum 1 AWB');
      alert('error, Please insert String..');
      $("#btn-on-process").attr("disabled", false);
      $("#btn-on-process").html('Generate');
      return false;
    }
    // return false;

    // split by enter (\n) in textarea
    var split_textarea = textarea_change_location_massal.split("\n");
    var list_awb_change_loc = [];
    var n = 0;
    $.each(split_textarea, function(i, v) {
      var awb_no = v.trim();
      if (awb_no != '') {
        if (awb_no != '0') {
          if (list_awb_change_loc.indexOf(awb_no) == -1) {
            list_awb_change_loc[n] = awb_no;
            n++;
          }
        }

      }
    });

    if (list_awb_change_loc.length > 1) {
      alert('Gagal, Maximum 1 String..');
      return false;
    }


    var formData = {
      'val': list_awb_change_loc
    };

    console.log(formData);
    $.ajax({
      type: "POST",
      url: SITE_PATH + 'tools/show_base64ToImage/',
      data: formData,
      timeout: 10000, // 10 detik
      success: function(data) {
        // $('#loader-icon-process-awb').hide();
        // $('#btn-on-reset-awb').show();

        $("#btn-on-process").attr("disabled", false);
        $("#btn-on-process").html('Generate');

        $('#show_base64image').html(data);
        document.getElementById('view_data').style.display = '';
        // $('textarea[name=val]').val('');

      }
    });
  }
</script>

    
    
  