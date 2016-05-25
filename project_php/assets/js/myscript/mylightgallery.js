
    $(document).ready(function() {


        $("#lightgallery").lightGallery({


        });
        $("#lightvideo").lightGallery({
          videojs: true,
          loadYoutubeThumbnail: true,
          youtubeThumbSize: 'default',
          loadVimeoThumbnail: true,
          vimeoThumbSize: 'thumbnail_medium',

        });

    });


    // $(window).on("load", function() {
    //   var video, $output;
    //   var scale = 0.25;
    //   var initialize = function() {
    //       $output = $("#output");
    //       video = $("#video").get(0);
    //
    //
    //       var canvas = document.createElement("canvas");
    //       canvas.width = video.videoWidth * scale;
    //       canvas.height = video.videoHeight * scale;
    //       canvas.getContext('2d')
    //             .drawImage(video, 0, 0, canvas.width, canvas.height);
    //
    //       var img = document.createElement("img");
    //       img.src = canvas.toDataURL();
    //       $output.prepend(img);
    //
    //       // $("#capture").click(captureImage);
    //       // $('#capture').trigger('click');
    //   };
    //   //alert(window.location.protocol+window.location.host+'/projectnew/ManagementContent');
    //
    //  //setTimeout(function(){ initialize(); }, 1000);
    //
    //
    // });


//     (function() {
//     "use strict";
//
//     var video, $output;
//     var scale = 0.25;
//     $(window).bind('load', function()
//     {
//       var initialize = function() {
//           $output = $("#output");
//           video = $("#video").get(0);
//
//
//           var canvas = document.createElement("canvas");
//           canvas.width = video.videoWidth * scale;
//           canvas.height = video.videoHeight * scale;
//           canvas.getContext('2d')
//                 .drawImage(video, 0, 0, canvas.width, canvas.height);
//
//           var img = document.createElement("img");
//           img.src = canvas.toDataURL();
//           $output.prepend(img);
//
//           // $("#capture").click(captureImage);
//           // $('#capture').trigger('click');
//       };
//
//     }
//
//
//     var captureImage = function() {
//         var canvas = document.createElement("canvas");
//         canvas.width = video.videoWidth * scale;
//         canvas.height = video.videoHeight * scale;
//         canvas.getContext('2d')
//               .drawImage(video, 0, 0, canvas.width, canvas.height);
//
//         var img = document.createElement("img");
//         img.src = canvas.toDataURL();
//         $output.prepend(img);
//     };
//
//     $(initialize);
//
// }());
