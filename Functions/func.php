<?php

//connection to database
$conn = mysqli_connect("localhost", "root", "", "indekosdb");


//FUNCTIONS QUERY//
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//func admin
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username sudah ada belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'"); 

    if( mysqli_fetch_assoc($result) ) {
        echo "<script> 
                alert('Your Username Already Use , Please Use Another Username!');
                </script>";
        return false;
    }

    // cek konfirmasi passwordnya
    if ( $password !== $password2 ) {
        echo "<script> 
            alert('Password Not Match!');
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
  
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

        

}
//func user
function registuser($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username sudah ada belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'"); 

    if( mysqli_fetch_assoc($result) ) {
        echo "<script> 
                alert('Your Username Already Use , Please Use Another Username!');
                </script>";
        return false;
    }

    // cek konfirmasi passwordnya
    if ( $password !== $password2 ) {
        echo "<script> 
            alert('Password Not Match!');
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
  
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

        

}
            
?>