<nav class="navbar navbar-expand-lg bg-dark mb-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Employee</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('EmployeeController') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo site_url('EmployeeController/profile') ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo site_url('EmployeeController/password') ?>">Update Password</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('EmployeeController') ?>">Document</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-danger btn-sm" href="<?php echo site_url('usercontroller/logout') ?>" onclick="return confirm('ต้องการออกจากระบบใช่หรือไม่?')">Logout</a>

    </div>
</nav>