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

        <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url("assets/js/lib/lightGallery-master/dist/css/lightgallery.min.css")?>" >



        <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css")?>" >

        <noscript><link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload-noscript.css")?>"></noscript>
        <noscript><link rel="stylesheet" href="<?php echo base_url("assets/js/lib/jQuery-File-Upload-9.12.3/css/jquery.fileupload-ui-noscript.css")?>"></noscript>

    </head>
    <body>
        <div class="container-main">

          <div class="container-editor">
            <form action="viewtext" method="post" action="viewtext">
            <textarea name="editor1"></textarea>
              <input class="edsubmit" style="text-align:center;" type="submit" value="ส่งข้อความ">
            </form>

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




        <div id="loadscript"></div>





          <div class="container-file">
          <!-- <input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple> -->

          <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
              <!-- Redirect browsers with JavaScript disabled to the origin page -->
              <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
              <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
              <div class="row fileupload-buttonbar">
                  <div class="col-lg-7">
                      <!-- The fileinput-button span is used to style the file input field as button -->
                      <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span>Add files...</span>
                          <input type="file" name="files[]" multiple>
                      </span>
                      <button type="submit" class="btn btn-primary start">
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel upload</span>
                      </button>
                      <button type="button" class="btn btn-danger delete">
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" class="toggle">
                      <!-- The global file processing state -->
                      <span class="fileupload-process"></span>
                  </div>
                  <!-- The global progress state -->
                  <div class="col-lg-5 fileupload-progress fade">
                      <!-- The global progress bar -->
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                      <!-- The extended global progress state -->
                      <div class="progress-extended">&nbsp;</div>
                  </div>
              </div>
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
          </form>

          </div>

        </div>

        <div id="loadscript"></div>
        <!-- The template to display files available for upload -->
        <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <!-- video -->
        <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}

                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>




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



    </body>
</html>
