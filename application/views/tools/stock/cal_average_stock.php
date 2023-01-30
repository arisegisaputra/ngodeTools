<!--begin::Card-->
<div class="card border-0 shadow-none h-lg-100 " style="background-color: #243763">
  <!--begin::Card body-->
  <div class="card-body d-flex flex-column   pb-0 pt-15">
    <!--begin::Wrapper-->
    <div class="px-10 mb-10 ">
      <!--begin::Heading-->
      <h1 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6"><?= strtoupper($title_1);?></h1>
      <!--end::Heading-->
      <!--begin::List-->
      <div class="mb-7 ">
      <form method="post" action="<?php echo site_url('tools/hitung_stock'); ?>" id="stockForm">
        <div class="mb-3">
          <table id="stockPrices" class="table table-striped text-center " style="background-color: #CFB997; ">
          <thead>
            <tr class="fw-bolder">
              <th>Qty: </th>
              <th>Price: </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <input class="form-control stockQty m-3" type="text" name="stock_qty[]">
              </td>
              <td>
                  <input class="form-control stockPrice m-3" type="text" name="stock_price[]">
              </td>
              <td>
                  <a class="btn btn-sm btn-danger m-3" href="javascript:;" onclick="deleteRow(this)"><i class="bi bi-dash-square"></i></a>
              </td>
            </tr>
          </tbody>
            
          </table>
          <div class="d-grid gap-2">
            <a class="btn btn-success"  href="javascript:;" onclick="addStockPrice()"><i class="bi bi-plus-circle"></i> Plus</a>
            <input type="submit" class="btn btn-sm btn-primary" value="Calculate Average">
            <a href="" class="btn btn-secondary">Reset</a>
          </div>
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
      <h2 class="text-white"><?=ucwords($data_tools->tools_name);?></h2>
      <p class="text-white">
        <?=ucwords($data_tools->tools_description);?>
      </p>
    </div>


    <?= $feature_tools ?>
  </div>


</div>

<script>
    var i = 2;
    function addStockPrice() {
        document.getElementById('view_data').style.display = 'none';
        var table = document.getElementById("stockPrices");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = "<input class='form-control stockQty  m-3' type='text' name='stock_qty[]'>";
        cell2.innerHTML = "<input class='form-control stockPrice  m-3' type='text' name='stock_price[]'>";
        cell3.innerHTML = "<a class='btn btn-sm btn-danger  m-3' href='javascript:;' onclick='deleteRow(this)'><i class='bi bi-dash-square'></i></a></div>";
        i++;
    }

    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        console.log(r.parentNode.parentNode.rowIndex);
        document.getElementById("stockPrices").deleteRow(i);
        document.getElementById('view_data').style.display = 'none';
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
