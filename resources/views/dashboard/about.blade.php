<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
  <link rel="icon" type="image/x-icon" href="{{asset("/assets/img/Artboard12.svg")}}" />
  <link href="{{asset("/dash/assets/css/loader.css")}}" rel="stylesheet" type="text/css" />
  <script src="{{asset("/dash/assets/js/loader.js")}}"></script>

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link href="{{asset("/dash/assets/css/plugins.css")}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->


  <!-- BEGIN PAGE LEVEL STYLES -->
  <link href="{{asset("/dash/assets/css/scrollspyNav.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{asset("/dash/plugins/file-upload/file-upload-with-preview.min.css")}}" rel="stylesheet"
    type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
  <link href="{{asset("/dash/assets/css/dashboard/dash_1.css")}}" rel="stylesheet" type="text/css" />



</head>

<body class="alt-menu sidebar-noneoverflow">
  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  @include('dashboard.navbar')

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container sidebar-closed sbar-open" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    @include('dashboard.slider-menu')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class=" mt-5 layout-spacing">
          <form action="" class="row">
            <div class=" offset-md-3 col-md-6 widget widget-one">
              <div class="form-row">
                <div class="widget-heading col-12">
                  <p class="font-weight-bold">
                    About company
                  </p>
                </div>

                <div class="form-group mb-3 col-md-12">
                  <input type="text" class="form-control"
                    placeholder="Title [company name]">
                </div>

                <div class="form-group mb-3 col-md-6">
                  <input type="text" class="form-control"
                    placeholder="Phone">
                </div>
                <div class="form-group mb-4 col-md-6">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-3 col-md-6">
                  <input type="text" class="form-control"
                    placeholder="Whatsapp">
                </div>
                <div class="form-group mb-4 col-md-6">
                  <input type="text" class="form-control" placeholder="Facebook URL">
                </div>

                <div class="custom-file-container col-md-12" data-upload-id="mythirdImage">
                  <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                  <label class="custom-file-container__custom-file" >
                      <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                      <span class="custom-file-container__custom-file__custom-file-control"></span>
                  </label>
                  <div class="custom-file-container__image-preview"></div>
                </div>
              </div>
              <button class="btn btn-block btn-primary">Submit</button>
            </div>

          </form>

        </div>
      </div>
    </div>
    <!--  END CONTENT AREA  -->

  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

  <script src="{{asset("/dash/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
  <script src="{{asset("/dash/plugins/blockui/jquery.blockUI.min.js")}}"></script>
  <script src="{{asset("/dash/assets/js/app.js")}}"></script>
  <script>
    $(document).ready(function () {
      App.init();
    });
  </script>

  <script src="{{asset("/dash/plugins/highlight/highlight.pack.js")}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset("/dash/assets/js/custom.js")}}"></script>

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script src="{{asset("/dash/assets/js/scrollspyNav.js")}}"></script>
  <script src="{{asset("/dash/plugins/file-upload/file-upload-with-preview.min.js")}}"></script>

  <script>
    //First upload
    var firstUpload = new FileUploadWithPreview('mythirdImage')
    //Second upload
  </script>
  <!-- END PAGE LEVEL PLUGINS -->

</body>

</html>