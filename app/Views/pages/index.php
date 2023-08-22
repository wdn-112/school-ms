<?= $this->include('layout/header');?>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="row">
        <div class="cards">

            <div class="card-header" >
                <img src="assets/img/logo.png" class="logo">  
                <div class="head">
                    <h3>SMK Fajar Utama</h3>
                    <h4>LMS System</h4>
                </div>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">NIS/Kode Guru</label>
                        <input type="text" class="form-control" placeholder="Nis/Kode Guru">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login_btn" class="btn btn--bordered btn--arrow btn-submit">Login</button>
                        <button class="btn cancel-btn">Hapus</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src=../../unpkg.com/%40lottiefiles/lottie-player%402.0.2/dist/lottie-player.js></script>
    <!-- <script src=js/common.min.js></script> -->
    <!-- <script src=js/demo.js></script> -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-J2SRB925J5"></script> -->
    <script async src="js/main.js"></script>
    
  </body>
</html>