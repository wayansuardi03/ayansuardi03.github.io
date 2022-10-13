<?php
session_start();
include "../assets/conf/koneksi-pindai.php";
if (isset($_POST['btnSignIn'])) {
    $username = mysqli_escape_string($koneksi, trim($_POST['username']));
    $password = mysqli_escape_string($koneksi, trim($_POST['password']));
    $captcha = mysqli_escape_string($koneksi, trim($_POST['captcha']));
    $session_captcha = $_SESSION['CODE'];
    if ($session_captcha == $captcha) {
        // cek username apakah telah terdaftar
        $sqlCekLogin = "SELECT * FROM tbl_users WHERE username='$username'";
        $queryCekLogin = mysqli_query($koneksi, $sqlCekLogin);
        $verifikasiProsesLogin = mysqli_num_rows($queryCekLogin);
        if ($verifikasiProsesLogin > 0) {
            $data = mysqli_fetch_assoc($queryCekLogin);
            $passwordNow = $data['password'];
            // verifikasi password
            if (password_verify($password, $passwordNow)) { // verifikasi / pencocokan password yang diinput dengan yang ada di database    
                // jika passwordnya benar cek lagi level user yang login
                if ($data['level'] == "Administrator" && $data['status'] == 989898) {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Administrator";
                    $_SESSION['status'] = 989898;
                    header("location:./a/index.php");
                } elseif ($data['level'] == "Juragan" && $data['status'] == 989898) {
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "Juragan";
                    $_SESSION['status'] = 989898;
                    header("location:./j/index.php");
                }
            } else {
                $_SESSION['message'] = "Username and password is incorrect";
                $_SESSION['msg_type'] = "danger";
                echo '
                        <script>
                            alert("Username and password is incorrect");
                            window.location.href="?h=signIn&action=passwordFailed";
                        </script>       
                        ';
            }
        } else {
            $_SESSION['message'] = 'Username tidak terdaftar';
            $_SESSION['msg_type'] = "danger";
            echo '
                    <script>
                        window.location.href="index.php";
                    </script>       
                    ';
        }
    } else {
        $_SESSION['message'] = 'Kode captcha tidak valid';
        $_SESSION['msg_type'] = "danger";
        echo '
                    <script>
                        window.location.href="index.php";
                    </script>
                ';
    }
}

if (isset($_POST['btnSignUp'])) {
    $nama = mysqli_escape_string($koneksi, trim($_POST['nama']));
    $username = mysqli_escape_string($koneksi, trim($_POST['username']));
    $password = mysqli_escape_string($koneksi, trim($_POST['password']));
    $cPassword = mysqli_escape_string($koneksi, trim($_POST['cPassword']));
    /* cek user */
    $cekUser = "SELECT * FROM tbl_users WHERE username ='$username'";
    $queryCekUser = mysqli_query($koneksi, $cekUser);
    $hasilCekUser = mysqli_num_rows($queryCekUser);
    if ($hasilCekUser > 0) {
        $_SESSION['message'] = "Username sudah tersedia";
        $_SESSION['msg_type'] = "danger";
        echo '
                <script>
                    window.location.href="?h=signUp";
                </script>
            ';
    } elseif ($password != $cPassword) {
        $_SESSION['message'] = "Password tidak sama, ulangi lagi";
        $_SESSION['msg_type'] = "danger";
        echo '
                <script>
                    window.location.href="?h=signUp";
                </script>
            ';
    } else {
        $hashing = password_hash($password, PASSWORD_DEFAULT);
        $insert = "INSERT INTO tbl_users ('username', 'password', 'namaLengkap', 'level', 'status')
                    VALUES ('$username', '$hashing', '$nama', 'Administrator', 989898)";
        $queryUser = mysqli_query($koneksi, $insert);
        $_SESSION['message'] = "Berhasil, silahkan login";
        $_SESSION['msg_type'] = "success";
        echo '
                <script>
                    window.location.href="?h=signIn";
                </script>
            ';
    }
}