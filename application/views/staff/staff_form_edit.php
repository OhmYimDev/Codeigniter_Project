<section id="position" class="container py-4 ">
    <div class="card shadow border-0 p-4 ">

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h4>Edit Staff Profile</h4>
                <hr>
            </div>
        </div>

        <!-- Form input -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo site_url('staffcontroller/update_staff') ?>" method="post">
                    <!-- Position -->
                    <div class="mb-3">
                        <label for="prefix_name" class="form-label">Position</label>
                        <div class="col-sm-6">
                            <select name="p_id" class="form-select" aria-label="Default select example" required disabled>
                                <option selected value="<?php echo $member->p_id ?>" selected><?php echo $member->p_name ?></option>
                                <!-- <option value="">-- Select --</option>
                                <?php foreach ($position as $item) { ?>
                                    <option value="<?php echo $item->p_id ?>"><?php echo $item->p_name ?></option>
                                <?php } ?> -->
                            </select>

                        </div>
                    </div>
                    <!-- Username -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="m_username" value="<?php echo $member->m_username ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- Prefix name -->
                    <div class="mb-3">
                        <label for="prefix_name" class="form-label">Prefix name</label>
                        <div class="col-sm-2">
                            <select name="m_prefix" class="form-select" aria-label="Default select example" required>
                                <option selected value="<?php echo $member->m_prefix ?>"><?php echo $member->m_prefix ?></option>
                                <option>-- Select --</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                        </div>
                    </div>
                    <!-- First name -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="fname" class="form-label">First name</label>
                                <input type="text" class="form-control" name="m_fname" value="<?php echo $member->m_fname ?>" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- Last name -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="lname" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="m_lname" value="<?php echo $member->m_lname ?>" reauired>
                                <input type="hidden" value="<?php echo $member->m_id ?>" name="m_id">
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="btn btn-success text-white me-1">
                        <i class="fas fa-save me-1"></i>
                        Save
                    </button>

                    <button type="button" class="btn bg-danger">
                        <a href="<?php echo site_url('staffcontroller') ?>" class="text-white">
                            <i class="fas fa-times-circle me-1"></i>
                            Cancle
                        </a>
                    </button>

                </form>
            </div>
        </div>
    </div>
</section>