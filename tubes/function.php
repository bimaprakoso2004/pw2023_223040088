<?php 
    

  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'tubes_pw'
  );


function query($query)
{
global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function registrasi($data) {
  global $conn;

  $username = mysqli_real_escape_string($conn, $data['username']);
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);
  $error = "";

  if($username == ""){
      $error = "username tidak ada";
  }

  // cek keberadaan user
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
                  if(mysqli_fetch_assoc($result)) {
                      echo "<script>
                         alert('username sudah terdaftar');
                      </script>";
                      return false;
                  }
      if($username == "" or $password == ""){
          $error = "isi dulu username dan Password";
          }
  
  if($password !== $password2){
      echo "<script>
      alert('Password tidak sesuai');
      </script>";
      return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO user (username, password) 
                       VALUES ('$username', '$password')");

}
    
    ?>