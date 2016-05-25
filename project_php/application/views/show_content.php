<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/bootstrap-3.3.6-dist/css/bootstrap.min.css")?>" >
        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css")?>" >
        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload.css")?>" >
        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload-ui.css")?>" >


        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/lightGallery-master/dist/css/lightgallery.min.css")?>" >
        <!-- <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet"> -->


        <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css")?>" >

        <noscript><link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload-noscript.css")?>"></noscript>
        <noscript><link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload-ui-noscript.css")?>"></noscript>
        <style>
          h1{
            text-align: center;
          }
          .container-editor{
            border: 1px solid rgba(0,0,0,0.1);
            padding: 20px;
          }
        </style>
    </head>

    <body>
        <div class="container-main">
          <h1>VIEW</h1>
          <div class="container-editor">
              <?php echo $editor;?>

          </div>







          <div class="container-gallery">

              <div class="wapper-gallery">

                <div class="container-fixed">

                     <div id="lightgallery">
                        <!-- begin redder image -->

                        <?php foreach ($image_path as $item):?>

                          <a href="<?php echo $item;?>">
                            <div class="col">
                              <div class="wrapper-img">
                                <img class="img-responsive img-rounded" src="<?php echo $item;?>"  />
                              </div>

                            </div>
                           </a>

                        <?php endforeach;?>
                        <!-- end redder image -->


                      </div>
                      <div class="clearboth"></div>


                    <div class="hidden-video">
                      <!-- Hidden video div -->
                      <?php $j = 0;?>
                      <?php foreach ($video_path as $item):?>
                      <?php $j++; ?>
                      <div style="display:none;" id="video<?php echo $j;?>">
                          <video class="lg-video-object lg-html5" controls preload="none">
                              <source src="<?php echo $item;?>" type="video/mp4">
                              <source src="<?php echo $item;?>" type="video/ogg">
                                <source src="<?php echo $item;?>" type="video/WebM">
                               Your browser does not support HTML5 video.
                          </video>
                      </div>
                      <?php endforeach;?>

                      <input class="hidden_count" type="hidden" name="count" value="<?php echo $j;?>">

                    </div>
                    <div id="lightvideo">
                      <!-- begin video -->
                      <?php $i = 0;?>
                      <?php foreach ($video_path as $item):?>
                      <?php $i++; ?>
                      <div class="col" data-poster="<?php echo base_url("assets/images/video/default.jpg")?>" data-sub-html="video caption<?php echo $i;?>" data-html="#video<?php echo $i;?>">
                        <div class="wrapper-video">

                              <img class="img-responsive" src="<?php echo base_url("assets/images/video/default.jpg")?>" />

                        </div>
                      </div>

                      <?php endforeach;?>

                    </div>
                    <!-- begin redder video -->
                    <!-- <?php //$i = 1;?>
                    <?php //foreach ($video_path as $item):?>

                    <div data-poster="video-poster<?php //echo $i;?>.jpg" data-sub-html="video caption<?php echo $i;?>" data-html="#video<?php echo $i;?>" >
                       <div class="col warp-video" id="video<?php //echo $i;?>">
                          <video  id="vdo" class="lg-video-object lg-html5" width="180" height="180" controls>
                            <source src="<?php //echo $item;?>" type="video/mp4">
                            <source src="<?php //echo $item;?>" type="video/ogg">
                            Your browser does not support HTML5 video.
                          </video>
                      </div>

                    </div>

                    <?php //$i++; ?>
                  <?php //endforeach;?> -->
                  <!-- end redder video -->
                    <div class="clearboth"></div>



                </div>
              </div>

              <!-- <div class="wapper-video">
                <div class="container-fixed">

                  <div class="row">

                    <?php //foreach ($video_path as $item):?>
                      <div class="col">
                        <div id="video1">
                          <video id="video" class="lg-video-object lg-html5" width="180" height="180" controls>
                            <source src="<?php //echo $item;?>" type="video/mp4">
                            <source src="<?php //echo $item;?>" type="video/ogg">
                            Your browser does not support HTML5 video.
                          </video>
                        </div>


                      </div>
                    <?php //endforeach;?>



                  </div>

                  <div id="output"></div>
                </div>

              </div> -->
          </div>



















        <!-- SCRIPT CKEDITOR -->
        <script src="<?php echo base_url("assets/js/lib/ckeditor_4.5.9_standard/ckeditor/ckeditor.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/ckeditor_4.5.9_standard/ckfinder/ckfinder.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/myscript/myckeditor.js") ?>"></script>

        <!-- jQuery -->
        <script src="<?php echo base_url("assets/js/lib/jQuery_2.2.4/jquery-2.2.4.min.js") ?>"></script>



        <!-- bootstrap -->
        <script src="<?php echo base_url("assets/js/lib/bootstrap-3.3.6-dist/js/bootstrap.min.js") ?>"></script>

        <!-- lightgallery -->
        <script src="<?php echo base_url("assets/js/lib/lightGallery-master/dist/js/lightgallery.min.js") ?>"></script>


         <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script> -->

        <!-- lightgallery plugin -->
        <script src="<?php echo base_url("assets/js/lib/lightGallery-master/dist/js/lg-thumbnail.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/lightGallery-master/dist/js/lg-fullscreen.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/lightGallery-master/dist/js/lg-video.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/video.js-master/src/js/video.js") ?>"></script>
         <!-- <script src="http://vjs.zencdn.net/4.12/video.js"></script> -->

        <!-- fileupload -->
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/vendor/jquery.ui.widget.js") ?>"></script>

        <!-- The Templates plugin is included to render the upload/download listings -->
        <script src="<?php echo base_url("assets/js/lib/JavaScript-Templates-3.4.0/js/tmpl.min.js") ?>"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src="<?php echo base_url("assets/js/lib/JavaScript-Load-Image-master/js/load-image.all.min.js") ?>"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src="<?php echo base_url("assets/js/lib/JavaScript-Canvas-to-Blob-master/js/canvas-to-blob.min.js") ?>"></script>
        <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
        <!-- <script src="<?php //echo base_url("assets/js/lib/bootstrap-3.3.6-dist/js/bootstrap.min.js") ?>"></script>  -->
        <!-- blueimp Gallery script -->

        <script src="<?php echo base_url("assets/js/lib/Gallery-master/js/blueimp-gallery.js") ?>"></script>
        <!-- <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script> -->
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->



        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.iframe-transport.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-process.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-image.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-audio.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-video.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-validate.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/jquery.fileupload-ui.js") ?>"></script>

        <!-- my script -->
        <script src="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/js/main.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/myscript/mylightgallery.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/myscript/myscript.js") ?>"></script>


          <div id="loadscript"></div>
    </body>
</html>
