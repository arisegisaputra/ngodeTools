<div class="row g-7 w-xxl-850px">
  <!--begin::Col-->
  <div class="col-xxl-5">
    <!--begin::Card-->
    <div class="card border-0 shadow-none h-lg-100" style="background-color: #243763">
      <!--begin::Card body-->
      <div class="card-body d-flex flex-column flex-center pb-0 pt-15">
        <!--begin::Wrapper-->
        <div class="px-10 mb-10">
          <!--begin::Heading-->
          <h3 class="text-white mb-2 fw-boldest ttext-center text-uppercase mb-6">Ngode Tools</h3>
          <!--end::Heading-->
          <!--begin::List-->
          <div class="mb-7">
            <!--begin::Item-->
            <?php foreach($data_tools as $value_data_tools):?>
            <div class="d-flex align-items-center mb-2">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
              <span class="svg-icon svg-icon-4 svg-icon-white opacity-75 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                  <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <span class="text-white opacity-75"><?=$value_data_tools->tools_name?></span>
            </div>
            <?php endforeach; ?>
            <!--end::Item-->
            
          </div>
          <!--end::List-->
          <!--begin::Link-->
          <a href="https://ngodeid.com/" class="btn btn-hover-rise text-white bg-white bg-opacity-10 text-uppercase fs-7 fw-bolder">Go To Ngodeid</a>
          <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Illustrations-->
        <img class="mw-100 h-225px mx-auto mb-lg-n18" src="<?=base_url('/')?>theme/assets/media/misc/1.png" />
        <!--end::Illustrations-->
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Card-->
  </div>
  <!--end::Col-->
  <!--begin::Col-->
  <div class="col-xxl-7">
    <!--begin::Row-->
    <div class="row g-lg-7">
      <!--begin::Col-->
      <?php foreach($data_tools as $value_data_tools):?>
        <div class="col-sm-6">
          <!--begin::Card-->
          <a target="_BLANK" href="<?=base_url($value_data_tools->tools_slug);?>"  class="card border-0 shadow-none min-h-200px mb-7" style="background-color: <?=$value_data_tools->color?>">
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
      <!--end::Col-->
    </div>
    <!--end::Row-->
    
  </div>
  <!--end::Col-->
</div>