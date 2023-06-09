<?php
    session_start();
    include "koneksi.php";
    if (!empty($_SESSION['id_user'])) {
        echo "<script>location='.'</script>";
    } else {
        if (@$_POST['login']) {
            $user = $_POST['txtuser'];
            $pass = md5($_POST['txtpassword']);

            $sql = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";
            $q = mysqli_query($koneksi,$sql);

            if (mysqli_num_rows($q) > 0 ) {
                $r = mysqli_fetch_assoc($q);
                $_SESSION['id_user'] = $r['id_user'];
                $_SESSION['nama_user'] = $r['nama_user'];
                echo "<script>location='.'</script>";
            } else {
                echo "<script>alert('Data yang di masukkan salah');location='login.php'</script>";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <div class="form-group pb-2">
                                                <label class="form-label" >Username</label>
                                                <input class="form-control py-2" type="text" placeholder="Masukkan Username" name="txtuser"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Password</label>
                                                <input class="form-control py-2" type="password" placeholder="Masukkan Password" name="txtpassword"/>
                                            </div>

                                            <div class="align-items-center justify-content-between mt-4 mb-0">
                                                <div class="d-grid">
                                                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="dist/js/scripts.js"></script>
    </body>
</html>
<?php } ?>
