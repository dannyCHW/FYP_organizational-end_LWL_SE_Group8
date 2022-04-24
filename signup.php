<?php
  session_start();

  include('firebaseConfig.php');
  require 'vendor/autoload.php';

  use Google\Cloud\Storage\StorageClient;

  ///try upload document image

  $key = '{
      "type": "service_account",
      "project_id": "lwl-se-fyp-2122-grp8",
      "private_key_id": "d568f71fd09dce8f7324da9104c2a2d0fcf79878",
      "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDCYW5IbdGRA7J6\nPDZYMCeM34ggn1SIVFHxoO9A+FPXJwhHaBL18vsxGUWpHU2zlmyFKkIewYbLHHxB\nsQiU5UB+/DVaz3BnnhhzAdy3QiB/2/7lrCkHSu+79jRgbNZcqg8DYG/IGmyKqOI4\n+Nn9je7SxkGv4u1DaYiSRnVJWF/5sn7Sx3+68MRWHs9iOZwjh5PwkAwUtB6YYsdM\nj8v3BAuPYKUCNio7tYLDSHgXLLlpGAlNMPFUk6gHuFx9VuRrxiAG0ltbD7EomuOY\nFVkTgTwdCR3+JC01spri4x/SC9ZumVg07ULiapFeYou0wnIVmbOWA4UpP0ov3soR\nIEp6Bj0dAgMBAAECggEAYAHCeEixjRgP47rwto8WQci4UjCQDoPjM16jPWpJ8scn\nGinHz63TLrWGSBieo7iE4iL0pH8+pfxsTP/1NqGiwPWuHqu9n5ghCFDfpK4nIi/V\nTrhBTYZQMXzR8txe5kbigm7z1xhiCvyOO8iB1u/vCTD+CbMiMD0kROdDD9Z0FP4d\npeqwfpzMzQfn5y4Xsaqrtfd21X96Gjz7lKKCEGdVI8k1OfdLqe9wH+nDWdwOWk3V\nB7O4JPD1MXbf+IlcPyS524i/moFKVkc0B1JRTSmLtwOyTxY2EjwpfJwX2hDXjOED\n8PY2PEbjcCwcz8Y9ISr7Qccj6a2a2oi3YuL8/Oi8mwKBgQDkPnbfC+FSw6MZb0gF\nlvCg02hrhqwRLJBmMIwJWUXgK5E3yhwdEvOdpbxFFZMtybKcwVKeRDQuye4F2gxE\nTJhy4b+MfEvbR0SA97PfKZmc2hJKPMsl/JRkefycVj9VsthPFRhMsfKWtxKW1lFt\nHG6tHVTPG9eVFXuJZGoVdRwlYwKBgQDaBMEBupW71ABFyJGsMHFXRbOCcl9R6Jy3\nZ3BmcfcVfmeGuSfJqiqT5wGfC7Y2coBIf5KLcpcL/M7k84fE6bZGabhP2tLGtflN\nN63RVyD5DmZbVN5CsmJH4cCZhhkuOG0K/bBb1vUOoF8/ggo/NKX7a8Kv3H5lrdcs\nu2s+5NzbfwKBgQCczc0cryy9j2odrzXroSbvVk4GkR7lLZiGnBOY2JwIxeWeTlvC\nHaMASzxsucXDTy5GQwpfcLvo6RF9M6/5vCV/x1exTDNREkUd1Q7d4daGy8qE9f8a\nucu4u5WwUhBw781rhzKKfjYLFPrQZazLKR1gESaSoq4Y3glg+ntnAm2zwQKBgEjp\nABbw7DRFYNX1jmn0RWM3RyIf16rPzOE08Y0BHe2NOVf/wcOaaeTOg2dKBmTNBAO6\nzipeZw82O4arvsLmmfOQVXg3KPgVUUs2jKWOqtM/spFmn3HUsDNz1vJAu1kOu8DK\nOFluWMPMdC4L8htTIxMi5ZfkeEzOx0AJaYM+DHJHAoGAeJyWDuckC6qidDdidKFv\nZfYi4Q8oFyiEFNx3rbfPdyP7QJzpVniP3PjzZlWBrbrw1D4bowtceQqVvxX9h4Vn\n/CKnka3uWo9566NFc+8CPJQksI8PU2+LNqDuk5o15m5l2U5DCyLX07cXHyx/fKdE\njQXSTfzN9OvUjMRcVo7U3AE=\n-----END PRIVATE KEY-----\n",
      "client_email": "developer-sefyp@lwl-se-fyp-2122-grp8.iam.gserviceaccount.com",
      "client_id": "111320151457422917000",
      "auth_uri": "https://accounts.google.com/o/oauth2/auth",
      "token_uri": "https://oauth2.googleapis.com/token",
      "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
      "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/developer-sefyp%40lwl-se-fyp-2122-grp8.iam.gserviceaccount.com"
  }';

  date_default_timezone_set("Asia/Hong_Kong");

  $storage = $storage = new StorageClient(['keyFile' => json_decode($key, true)]);

  $bucket = $storage->bucket('lwl-se-fyp-2122-grp8.appspot.com');

    ///try upload document image

  $data = [
    'orgName' => $_POST['orgname'],
    'number' => $_POST['pnum'],
    'email' => $_POST['email'],
    'faxNumber' => $_POST['fnum'],
    'orgID' => $_POST['orgNum'],
    'address' => $_POST['address'],
    'password' => $_POST['pw'],
    'aboutOrganization' => $_POST['aboutOrganization'],
    'state' => 'nonVerify'
  ];
  $exist = false;
  $userRef = $db->collection('organization_user');
  $query = $userRef->where('orgID', '=', $_POST['orgNum']);
  $result = $query->documents();

  foreach ($result as $result) {
      if ($result->exists()) {
        $exist = true;
        break;
      }else{
      }
    }
  if($exist === TRUE){
    echo '<script>alert("The organizational or company number has been used.")</script>';
    echo "<script>
    window.location.href='homepageHTML.php';
    </script>";
  }else{

    $db->collection('organization_user')->add($data);
/////test
if ($_FILES['file']['error'] != 4) {

    $oldImgName = $_POST['currentImgName'];
    $serviceID = $_POST['serviceID'];
    $newfilename = $serviceID . '_' . date('Ymd') . '_' . date("H.i.s");

    $file_tmp = $_FILES['file']['tmp_name'];

    $path = $_FILES['file']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    $newNameWithType = $newfilename . '.' . $ext;

    //open your own upload dir in your XAMPP '~/xampp/htdocs/upload/'
    $localDir = 'C:/xampp/htdocs/upload/';

    move_uploaded_file($file_tmp, $localDir . $newNameWithType);


    $file = fopen($localDir . $newNameWithType, "r");

    //upload to firebase storage
    $bucket->upload(
        fopen($localDir . $newNameWithType, "r"),
        ['name' => 'document/' . $newNameWithType]
    );

    fclose($file);

    //delete the local file that tmp store in upload dir
    unlink($localDir . $newNameWithType);

    if($oldImgName != 'none'){
        //delete the old img
        $object = $bucket->object('posters/'.$oldImgName);
        $object->delete();
    }

    //Update the posterImg data of the service document in firestore
    $serviceRef = $db->collection('service')->document($serviceID);
    $serviceRef ->update([
        ['path' => 'posterImg', 'value' => $newNameWithType]
    ]);

}
/////test
    echo "<script>
    alert('Account created, please waiting verify.');
    window.location.href='homepageHTML.php';
    </script>";
  }
?>
