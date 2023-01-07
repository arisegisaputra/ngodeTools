<div class="col-xxl-7">
          <!--begin::Row-->
          <div class="row g-lg-7">
            <!--begin::Col-->
            <?php if(isset($data_tools)): ?>
            <?php foreach($data_tools as $value_data_tools):?>
              <div class="col-sm-6">
                <!--begin::Card-->
                <a href="<?=base_url('/tools/'.$value_data_tools->tools_slug);?>"  class="card border-0 shadow-none min-h-200px mb-7" style="background-color: <?=$value_data_tools->color?>">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-column flex-center text-center">
                    <!--begin::Illustrations-->
                    <img class="mw-100 h-100px mb-7 mx-auto" src="<?=base_url('/')?>theme/assets/media/misc/<?=$value_data_tools->tools_icon?>" />
                    <!--end::Illustrations-->
                    <!--begin::Heading-->
                    <h4 class="text-white fw-bolder text-uppercase"><?=$value_data_tools->tools_name?></h4>
                    <!--end::Heading-->
                  </div>
                  <!--end::Card body-->
                </a>
                <!--end::Card-->
              </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <!--end::Col-->
          </div>
          <!--end::Row-->
          
        </div>