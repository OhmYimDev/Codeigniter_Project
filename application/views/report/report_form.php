<section id="position" class="container py-4">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow border-0 p-3">
                <h4>เรียกดูเอกสารตามช่วงเวลา</h4>
                <hr>
                <form action="<?php echo site_url('reportcontroller/get_data'); ?>" method="post">
                    <div class="mb-3">
                        <label for="date start" class="form-label">Date start</label>
                        <input type="date" class="form-control" name="date_start" reauired>
                    </div>
                    <div class="mb-3">
                        <label for="date end" class="form-label">Date end</label>
                        <input type="date" class="form-control" name="date_end" reauired>
                    </div>
                    <button type="submit" class="btn btn-success text-white me-1">
                        <i class="fas fa-clock me-1"></i>
                        Get Report
                    </button>
                    <button type="button" class="btn bg-danger">
                        <a href="<?php echo site_url('reportController') ?>" class="text-white">
                            <i class="fas fa-times-circle me-1"></i>
                            cancle
                        </a>
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>