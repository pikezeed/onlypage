var editor = CKEDITOR.replace( 'editor1', {

  language : 'th',

  //extraPlugins : 'image',
  //filebrowserUploadUrl : 'http://localhost:8020/projectnew/UploadFilesProcess/ckeditor_do_upload?command=QuickUpload&type=Files',
//  image_previewText : CKEDITOR.tools.repeat( 'ตัวอย่างรูปภาพ ', 100 ),
  extraPlugins : 'uploadimage,image2',
  height: 200,
  width: 1020,

  //height: 450,

  /* #### Management File */
  filebrowserBrowseUrl: 'http://localhost:8020/projectnew/assets/js/lib/ckeditor_4.5.9_standard/ckfinder/ckfinder.html',

  filebrowserUploadUrl: 'http://localhost:8020/projectnew/UploadFilesProcess/ckeditor_do_upload?command=QuickUpload&type=Files',
  /* #### Drag and Drop Upload Image */


  imageUploadUrl : 'http://localhost:8020/projectnew/UploadFilesProcess/ckeditor_do_upload?command=QuickUpload&type=Files',




} );
CKFinder.setupCKEditor( editor );
