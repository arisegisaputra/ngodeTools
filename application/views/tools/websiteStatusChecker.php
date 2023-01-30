<!--begin::Card-->
<div class="card border-0 shadow-none h-lg-100 " style="background-color: #243763">
  <!--begin::Card body-->
  <div class="card-body d-flex flex-column   pb-0 pt-15">
    <!--begin::Wrapper-->
    <div class="px-10 mb-10 ">
      <!--begin::Heading-->
      <h1 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6"><?= $title_1 ?></h1>
      <!--end::Heading-->
      <!--begin::List-->
      <div class="mb-7 ">
        <!-- <form class="form-horizontal" name="form1" id="form1" method="post" action="<?php echo site_url(uri_string()) ?>"> -->
        <div class="mb-3">
          <label for="websiteStatusChecker" class="form-label text-white">Website https:// or http://:</label>
          <textarea placeholder="Use next line (Enter) to add more URL" class="form-control" id="exampleFormControlTextarea1" name="val" rows="6"></textarea>
        </div>

        <div class="form-actions right mt-4">
          <button type="button" name="button_submit" class="btn btn-sm btn-primary me-3" id="btn-on-process" onclick="process_generate()" class="far fa-save">Generate</button>
          <a href="" class="btn btn-sm btn-secondary">Reset</a>
        </div>
        <!-- </form> -->
      </div>
      <!--begin::List-->
      <div class="mb-7 mt-10 ">
        <div class="row" id="view_data" style="display: none">
          <div class="col-md-12">
            <div class="table-responsive ">
              <div class="fw-semibold" id="show_status"></div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-white">Website Status Checker</h2>
      <p class="text-white">
        Website Status Checker is a useful tool that helps you check whether any website is up and running or not. You can use it to check the up-status of your own website or any other website.
      </p>
    </div>


    <?= $feature_tools ?>
  </div>


</div>

<script type="text/javascript">
  function myFunction(clicked_id) {
    // Get the text field

    var copyText = document.getElementById('' + clicked_id + '');

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
    var websiteStatusChecker = $('textarea[name=val]').val();
    // console.log(websiteStatusChecker);
    if (websiteStatusChecker == '') {
      alert('error, Please insert your website..');
      $("#btn-on-process").attr("disabled", false);
      $("#btn-on-process").html('Generate');
      return false;
    }
    // return false;

    // split by enter (\n) in textarea
    var split_textarea = websiteStatusChecker.split("\n");
    var list_awb_change_loc = [];
    var error = [];
    var n = 0;
    $.each(split_textarea, function(i, v) {
      var awb_no = v.trim();
      if (awb_no != '') {
        if (awb_no != '0') {
          if (list_awb_change_loc.indexOf(awb_no) == -1) {
            list_awb_change_loc[n] = awb_no;
            var pattern = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
            if (!pattern.test(list_awb_change_loc[n])) {
              error = list_awb_change_loc[n];
            }
            n++;
          }
        }

      }
    });

    if (list_awb_change_loc.length > 5) {
      alert('Error, Maximum 5 URl..');
      $("#btn-on-process").attr("disabled", false);
      $("#btn-on-process").html('Generate');
      return false;
    }

    if (error.length > 0) {
      alert('Error, Invalid URl ' + error + '..');
      $("#btn-on-process").attr("disabled", false);
      $("#btn-on-process").html('Generate');
      return false;
    }

    // return false;
    var formData = {
      'val': list_awb_change_loc
    };

    $.ajax({
      type: "POST",
      url: SITE_PATH + 'tools/show_websiteStatusChecker/',
      data: formData,
      timeout: 50000, // 50 detik
      success: function(data) {
        // console.log(data);
        // $('#loader-icon-process-awb').hide();
        // $('#btn-on-reset-awb').show();

        $("#btn-on-process").attr("disabled", false);
        $("#btn-on-process").html('Generate');

        $('#show_status').html(data);
        document.getElementById('view_data').style.display = '';
        $('input[name=website]').val('');

      },
      error: function(xhr, status, error) {
        $("#btn-on-process").attr("disabled", false);
        $("#btn-on-process").html('Generate');
        if (status === "timeout") {
          alert('Error, The request timed out...');

          // console.error("The request timed out.");
        } else {
          alert("An error occurred: " + error);
          // console.error("An error occurred: " + error);
        }
      }
    });
  }
</script>