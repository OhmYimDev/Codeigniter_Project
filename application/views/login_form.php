<section class="container d-flex flex-column justify-content-center">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow border-0 p-5">
                <h4>Login</h4>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <form action="<?php echo site_url('UserController/check') ?>" method="post">
                            <div class="mb-3">
                                <label for="position name" class="form-label">Username</label>
                                <input type="text" class="form-control" name="m_username" placeholder="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="position name" class="form-label">Password</label>
                                <input type="password" class="form-control" name="m_password" placeholder="password" required>
                            </div>
                            <?php if (!empty($_SESSION['login_fail'])) { ?>
                                <p class="text-danger"><?php echo $_SESSION['login_fail']; ?></p>
                            <?php } ?>
                            <button type="submit" class="btn btn-success text-white me-1">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>