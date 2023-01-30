<style>
    
    .dz-message{
      text-align: center;
      font-size: 28px;
    }

    .dropzone {
        background: white;
        border-radius: 5px;
        border: 2px dashed rgb(0, 135, 247);
        border-image: none;
        max-width: 500px;
        min-height: 200px;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
    <script>
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
    // Add restrictions
    Dropzone.options.fileupload = {
      acceptedFiles: 'image/*',
      maxFilesize: 5, // MB
      clickable: true,
      init: function () {
        this.on("complete", function (file) {
          console.log(file.status)
          if(file.status == 'success'){
            // $('#show_base64').html(file.xhr.response);
            $('#show_base64').html(
              '<div class="input-group mb-3">'
              +'<input type="text" class="form-control"  aria-describedby="button-addon2" value="'+ file.xhr.response +'" id="copy">'
              +'<button class="btn btn-sm btn-primary" type="button" onclick="myFunction(\'copy\')" id="button-addon2">Copy</button>'
              +'</div>'
              +'<img src="'+ file.xhr.response +'" class="img-thumbnail rounded">'
            );
            document.getElementById('view_data').style.display = '';
          }
          // console.log('---');
          // console.log(file.xhr.response );
        });
      }
      

    };
    </script>
    
    <!--begin::Card-->
    <div class="card border-0 shadow-none h-lg-100 " style="background-color: #243763">
      <!--begin::Card body-->
      <div class="card-body d-flex flex-column   pb-0 pt-15">
        <!--begin::Wrapper-->
        <div class="px-10 mb-10">
          <!--begin::Heading-->
          <h3 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6"><?=$title_1?></h3>
          
          <!--end::Heading-->
          <!--begin::List-->
          <div class="mb-7 ">
            <!-- <form class="form-horizontal" name="form1" id="form1" method="post" action="<?php echo site_url(uri_string()) ?>"> -->
              <div class="mb-3">
                <div class='content'>
                
                  <!-- Dropzone -->
                  <form action="<?= base_url('tools/fileUpload') ?>" class="dropzone" id="fileupload">
                  </form> 
                </div> 
              </div>

              <div class="mb-7 mt-10 ">
              <div class="row" id="view_data"  style="display: none">
                <div class="col-md-12">
                  <div class="table-responsive text-center">
                  <div id="alertTooltip" data-toggle="tooltip" title="Text berhasil dicopy!"></div>
                  <div class="fw-semibold" id="show_base64"></div>
                  </div>
                </div>
              </div>
              </div>

              <h4 class="text-white"><b>Format File</b></h4>
              <p class="text-white">
              Anda dapat mengunggah hanya 1 gambar (maks. 5 MB) sebagai JPG, PNG, GIF, WebP, SVG, atau BMP.
              Perlu diketahui bahwa Internet Explorer 8 memiliki batas 32 KB untuk URI data. Versi di bawah tidak memiliki dukungan.
              </p>

              <h4 class="text-white"><b>Browser Support</b></h4>
              <p class="text-white">
              Hasil yang disandikan kompatibel dengan semua browser dan versi berikut. Tolong kirimkan saya catatan jika ada masalah.
              </p>
              <div>
                <div class="row text-white">
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/chrome_24x24-a7ca66e6b4.png')?>" class="me-2 mb-5 img"> Chrome 4+
                  </div>
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/safari_24x24-4b9304e7c1.png')?>" class="me-2 mb-5 img"> Safari 3.1+
                  </div>
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/firefox_24x24-9cb479bf41.png')?>" class="me-2 mb-5 img"> Firefox 2+
                  </div>
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/opera_24x24-1e135b7c74.png')?>" class="me-2 mb-5 img"> Opera 9+
                  </div>
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/edge_24x24-11efc6ad6b.png')?>" class="me-2 mb-5 img"> Edge
                  </div>
                  <div class="col-md-6">
                    <img src="<?=base_url('theme/assets/media/icons/ie9-10_24x24-4a2e4800a5.png')?>" class="me-2 mb-5 img"> IE 8+
                  </div>
                  
                </div>
              
              </div>
              
          </div>
          <!--begin::List-->
          
        </div>
        
        
        <?=$feature_tools?>
      </div>

      
    </div>