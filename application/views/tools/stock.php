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
      <form method="post" action="<?php echo site_url('tools/hitung_stock'); ?>" id="stockForm">
        <div class="mb-3">
        <table id="stockPrices" class="table table-striped" style="background-color: white;">
          <tr>
            <th style="background-color:#749F82; font-weight:bolder; padding:5px; font-size:18px">Qty: </th>
            <th style="background-color:#749F82; font-weight:bolder; padding:5px; font-size:18px">Price: </th>
            <th style="background-color:#749F82; font-weight:bolder; padding:5px; font-size:18px"></th>
          </tr>
          <tr>
            <td><input class="form-control stockQty" type="text" name="stock_qty[]"></td>
            <td><input class="form-control stockPrice" type="text" name="stock_price[]"></td>
            <td><a class="btn btn-sm btn-danger" href="javascript:;" onclick="deleteRow(this)"><i class="bi bi-dash-square"></i></a>
              <!-- <input type="button" class="btn btn-sm btn-danger" value="Delete" onclick="deleteRow(this)"> -->
            </td>
          </tr>
          
      </table>
      <a class="btn btn-sm btn-success" style="float: right; margin-right:10px"   href="javascript:;" onclick="addStockPrice()"><i class="bi bi-plus-circle"></i></a>
        </div>

        <div class="form-actions right mt-4">
          <!-- <button type="button" name="button_submit" class="btn btn-sm btn-primary me-3" id="btn-on-process" onclick="process_generate()" class="far fa-save">Generate</button> -->
          <input type="submit" class="btn btn-sm btn-primary me-3" value="Calculate Average">
          <a href="" class="btn btn-sm btn-secondary">Reset</a>
        </div>
        </form>
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
      <h2 class="text-white">Stock Average Calculator</h2>
      <p class="text-white">
      Stock average calculator calculates the average cost of your stocks when you purchase the same stock multiple times. Average down calculator will give you the average cost for average down or average up. If you purchase the same stock multiple times, enter each transaction separately. The average stock formula below shows you how to calculate average price.
      </p>
    </div>


    <?= $feature_tools ?>
  </div>


</div>

<script>
    var i = 2;
    function addStockPrice() {
        var table = document.getElementById("stockPrices");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = "<input class='form-control stockQty' type='text' name='stock_qty[]'>";
        cell2.innerHTML = "<input class='form-control stockPrice' type='text' name='stock_price[]'>";
        cell3.innerHTML = "<a class='btn btn-sm btn-danger' href='javascript:;' onclick='deleteRow(this)'><i class='bi bi-dash-square'></i></a>";
        i++;
    }

    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("stockPrices").deleteRow(i);
    }

    $(document).ready(function () {
        $("#stockForm").submit(function (e) {
          $("#btn-on-process").attr("disabled", true);
          $("#btn-on-process").html('Loading..');
                  
            e.preventDefault();
            var formData = $(this).serialize();

            $(".stockQty").each(function () {
                if (!$.isNumeric($(this).val())) {
                    alert("Quantity must be a number.");
                    return false;
                }
            });

            $(".stockPrice").each(function () {
                if (!$.isNumeric($(this).val())) {
                    alert("Price must be a number.");
                    return false;
                }
            });
            $.ajax({
                type: "post",
                url: "<?php echo site_url('tools/hitung_stock'); ?>",
                data: formData,
                success: function (response) {
                  $("#btn-on-process").attr("disabled", false);
                  $("#btn-on-process").html('Generate');
                  $('#show_status').html(response);
                  document.getElementById('view_data').style.display = '';
                    // alert("Average stock market price: " + response);
                }
            });
        });
    });
</script>

</script>
