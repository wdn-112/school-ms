<?= $this->include('layout/header');?>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="row">
        <div class="cards">

            <div class="card-header" >
                <img src="assets/img/logo.png" class="logo">  
                <div class="head">
                    <h5>SMK Fajar Utama</h5>
                    <h6>LMS System</h6>
                </div>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">NIS/Kode Guru</label>
                        <input type="text" class="form-control" placeholder="Nis/Kode Guru" id="user">
                        <span id="user-err"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="pass">
                        <span id="pass-err"></span>
                    </div>
                    <input type="checkbox" id="check-pass"><label for="check-pass">Show Password</label>
                    <div class="form-group">
                        <button type="submit" id="login-btn" name="login_btn" class="btn btn--bordered btn--arrow btn-submit">Login</button>
                        <button class="btn cancel-btn" id="hapus">Hapus</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- <script src=../../unpkg.com/%40lottiefiles/lottie-player%402.0.2/dist/lottie-player.js></script> -->
    <!-- <script src=js/common.min.js></script> -->
    <!-- <script src=js/demo.js></script> -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-J2SRB925J5"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async src="js/main.js"></script>
    
  </body>
</html>