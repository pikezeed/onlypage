/*
 * jQuery File Upload Plugin JS Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global $, window */

$(function () {
    'use strict';
    var pathArray1 = window.location.pathname.split( '/' );

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        //url: 'server/php/'
        //url:'/projectnew/assets/js/lib/jQuery-File-Upload-9.12.3/server/php/'
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|mp4|mp3)$/i,
        maxFileSize: 100048576,
        url: '/'+pathArray1[1]+'/UploadFilesProcess/blueimp_multiupload',
        previewCrop: true,

    }).on('fileuploaddone', function (e, data) {
      jQuery.each(data.result.files, function (index, file) {
        var pathArray = window.location.pathname.split( '/' );
        if (file.url) {

        if( (file.type).search("image/jpeg") != -1 ||
            (file.type).search("image/png") != -1 ||
            (file.type).search("image/gif") != -1  ||
            (file.type).search("image/bmp") != -1 ){
            $('#lightgallery').append("<a href='"+file.url+"'> "+
                                        "<div class='col'>"+
                                        "<div class='wrapper-img'>"+
                                        "<img class='img-responsive img-rounded' src="+file.url+">"+
                                        "</div>"+
                                        "</div>"+

                                        "</a>");


             $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/css/lightgallery.min.css');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/jQuery_2.2.4/jquery-2.2.4.min.js');
              $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lightgallery.min.js');
              $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-thumbnail.min.js');
              $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-fullscreen.min.js');
              $.getScript( '/'+pathArray[1]+'/assets/js/lib/video.js-master/src/js/video.js');
              //$.getScript( 'http://vjs.zencdn.net/4.12/video-js.css');
              $.getScript( '/'+pathArray[1]+'/assets/js/myscript/mylightgallery.js');

        }else if((file.type).search("video/mp4") != -1 ||
                 (file.type).search("video/webm") != -1 ||
                 (file.type).search("video/ogg") != -1 ){
            var count_start =  $('.hidden_count').val();
            count_start++;
            var content_hidden = "<div style='display:none;' id='video"+count_start+"'>"+
                                        "<video class='lg-video-object lg-html5' controls preload='none'>"+
                                          "<source src='"+file.url+"' type='video/mp4'>"+
                                          "<source src='"+file.url+"' type='video/ogg'>"+
                                          "<source src='"+file.url+"' type='video/WebM'>"+
                                          "Your browser does not support HTML5 video."+
                                        "</video>"+
                                        "</div>";

            var content_light_video = "<div class='col' data-poster='/"+pathArray[1]+"/assets/images/video/default.jpg' data-sub-html='video caption"+count_start+"' data-html='#video"+count_start+"'>"+
                                        "<div class='wrapper-video'>"+
                                           "<img class='img-responsive' src='/"+pathArray[1]+"/assets/images/video/default.jpg' />"+
                                        "</div>"+
                                      "</div>";

            $('.hidden-video').append(content_hidden);

            $('#lightvideo').append(content_light_video);


            $('.hidden_count').val(count_start);
            var pathArray = window.location.pathname.split( '/' );
            $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/css/lightgallery.min.css');
            $.getScript( '/'+pathArray[1]+'/assets/js/lib/jQuery_2.2.4/jquery-2.2.4.min.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lightgallery.min.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-thumbnail.min.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-fullscreen.min.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-video.min.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/lib/video.js-master/src/js/video.js');
             //$.getScript( 'http://vjs.zencdn.net/4.12/video.js');
             $.getScript( '/'+pathArray[1]+'/assets/js/myscript/mylightgallery.js');

        }
          /*
          <a href="http://localhost:8020/projectnew/assets/upload/ex_user1/image_gallery/41.jpg">
                            <div class="col">
                              <img class="img-responsive img-rounded" src="http://localhost:8020/projectnew/assets/upload/ex_user1/image_gallery/41.jpg">
                            </div>
                           </a>
          */







        // $.getScript( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-video.min.js' , function( data, textStatus, jqxhr ) {
        //     console.log( data ); // Data returned
        //     console.log( textStatus ); // Success
        //     console.log( jqxhr.status ); // 200
        //     console.log( "Load was performed." );
        // });

         //$( "#loadscript" ).load( '/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-thumbnail.min.js' );
         //$( "#loadscript" ).load( window.location.protocol+window.location.host+'/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-fullscreen.min.js' );
        // $( "#loadscript" ).load( window.location.protocol+window.location.host+'/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-video.min.js' );

        }else if(file.error){
          //console.log("error");
        }

      });


    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.io') {
        // Demo settings:
        $('#fileupload').fileupload('option', {
            url: '//jquery-file-upload.appspot.com/',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 999000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '//jquery-file-upload.appspot.com/',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#fileupload').addClass('fileupload-processing');

        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload').fileupload('option', 'url'),
            dataType: 'json',
            context: $('#fileupload')[0]
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {
          //var pathArray = window.location.pathname.split( '/' );

            //console.log(window.location.protocol+window.location.host+'/'+pathArray[1]+'/assets/js/lib/lightGallery-master/dist/js/lg-thumbnail.min.js');
            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });
    }

});
