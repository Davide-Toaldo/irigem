<?php
$file = 'somefile.txt';
$remote_file = 'readme.txt';

$ftp_server = 'ftp.aquabox3.com';
$ftp_user_name = 'aquabox3';
$ftp_user_pass = 'vislotha';

$ftp_server = 'ftp.robertoperuzzo.com';
$ftp_user_name = 'robertoperuzzo.com';
$ftp_user_pass = 'ojoidoov';


// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

ftp_pasv($conn_id, true) or die("Cannot switch to passive mode");

// upload a file
if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
 echo "successfully uploaded $file\n";
} else {
 echo "There was a problem while uploading $file\n";
}

// close the connection
ftp_close($conn_id);
?>
