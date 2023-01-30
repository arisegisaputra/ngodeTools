
    <!--begin::Card-->
    <div class="card border-0 shadow-none h-lg-100 " style="background-color: #243763">
      <!--begin::Card body-->
      <div class="card-body d-flex flex-column   pb-0 pt-15">
        <!--begin::Wrapper-->
        <div class="px-10 mb-10 ">
          <!--begin::Heading-->
          <h3 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6"><?=$title_1?></h3>
          <!--end::Heading-->
          <!--begin::List-->
          <div class="mb-7 ">
            <!-- <form class="form-horizontal" name="form1" id="form1" method="post" action="<?php echo site_url(uri_string()) ?>"> -->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Gunakan generator ini untuk membuat hash MD5 dari sebuah string:</label>
                <textarea placeholder="Use next line (Enter) to add more string" class="form-control" id="exampleFormControlTextarea1" name="val" rows="6"></textarea>
              </div>

              <div class="form-actions right mt-4">
              <button type="button" name="button_submit" class="btn btn-sm btn-primary me-3" id="btn-on-process" onclick="process_generate()" class="far fa-save">Generate</button>
              <a href="" class="btn btn-sm btn-secondary">Reset</a>
              </div>
            <!-- </form> -->
          </div>
          <!--begin::List-->
          <div class="mb-7 mt-10 ">
          <div class="row" id="view_data"  style="display: none">
            <div class="col-md-12">
            <div id="alertTooltip" data-toggle="tooltip" title="Text berhasil dicopy!"></div>
              <div class="table-responsive text-center">
              <div class="fw-semibold" id="show_md5"></div>
              </div>
            </div>
          </div>
          </div>
          <h4 class="text-white"><?=ucwords($data_tools->tools_name);?></h4>
          <p class="text-white">
          <?=ucwords($data_tools->tools_description);?>
          </p>
        </div>
        
        
        <?=$feature_tools?>
      </div>

      
    </div>
    
  <script type="text/javascript">
    function myFunction(clicked_id) {
      var inputText = document.getElementById('' +clicked_id+'').value;
      var tempInput = document.createElement("input");
      document.body.appendChild(tempInput);
      tempInput.setAttribute("value", inputText);
      tempInput.select();
      document.execCommand("copy");
      document.body.removeChild(tempInput);
      $('#alertTooltip').tooltip('show');
      setTimeout(function() {
        $('#alertTooltip').tooltip('hide');
      }, 2000);


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

    if (list_awb_change_loc.length > 500) {
      alert('Gagal, Maximum 500 String..');
      return false;
    }


    var formData = {
      'val': list_awb_change_loc
    };

    console.log(formData);
    $.ajax({
      type: "POST",
      url: SITE_PATH + 'tools/show_list_data_md5/',
      data: formData,
      timeout: 10000, // 10 detik
      success: function(data) {
        // $('#loader-icon-process-awb').hide();
        // $('#btn-on-reset-awb').show();

        $("#btn-on-process").attr("disabled", false);
        $("#btn-on-process").html('Generate');

        $('#show_md5').html(data);
        document.getElementById('view_data').style.display = '';
        $('textarea[name=val]').val('');

      }
    });
  }
</script>
