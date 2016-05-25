<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');

$options = array ('upload_dir' => 'F:/xampp5.6.21/htdocs/projectnew/assets/upload/ex_user1/other/',
                  'upload_url' => 'http://localhost:8020/projectnew/assets/upload/ex_user1/other/'
               );

$upload_handler = new UploadHandler($options);
