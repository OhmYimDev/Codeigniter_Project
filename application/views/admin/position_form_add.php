<section id="position" class="container py-4 ">
    <div class="card shadow border-0 p-3 ">
        <div class="row">
            <div class="col-lg-12">
                <h4>Add Position</h4>
                <hr>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo site_url('PositionController/insert') ?>" method="post">
                    <div class="mb-3">
                        <label for="position name" class="form-label">Position name</label>
                        <input type="text" class="form-control" name="position_name" reauired>
                    </div>
                    <button type="submit" class="btn btn-success text-white me-1">
                        <i class="fas fa-save me-1"></i>
                        save
                    </button>
                    <button type="button" class="btn bg-danger">
                        <a href="<?php echo site_url('PositionController') ?>" class="text-white">
                            <i class="fas fa-times-circle me-1"></i>
                            cancle
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>