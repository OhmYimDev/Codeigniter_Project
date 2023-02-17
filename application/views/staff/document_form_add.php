<section id="position" class="container py-4 ">
    <div class="card shadow border-0 p-4 ">

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h4>Add Document</h4>
                <hr>
            </div>
        </div>

        <!-- Form input -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo site_url('staffcontroller/insert') ?>" method="post" enctype="multipart/form-data">
                    <!-- Document type -->
                    <div class="mb-3">
                        <label for="prefix_name" class="form-label">Permissions</label>
                        <div class="col-sm-6">
                            <select name="doc_status" class="form-select" aria-label="Default select example" required>
                                <option selected>-- Select --</option>
                                <option value="1">Everyone</option>
                                <option value="2">Executive only</option>
                            </select>

                        </div>
                    </div>
                    <!-- Document type -->
                    <div class="mb-3">
                        <label for="prefix_name" class="form-label">Document type</label>
                        <div class="col-sm-6">
                            <select name="d_id" class="form-select" aria-label="Default select example" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($doctype as $item) { ?>
                                    <option value="<?php echo $item->d_id ?>"><?php echo $item->d_name ?></option>
                                <?php } ?>
                            </select>

                        </div>
                    </div>
                    <!-- Document number -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="username" class="form-label">Document number</label>
                                <input type="text" class="form-control" name="doc_num" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- Document name -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="Document name" class="form-label">Document name</label>
                                <input type="text" class="form-control" name="doc_name" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="From" class="form-label">From</label>
                                <input type="text" class="form-control" name="doc_from" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="lname" class="form-label">Date</label>
                                <input type="date" class="form-control" name="doc_date" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- To -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="To" class="form-label">To</label>
                                <input type="text" class="form-control" name="doc_to" reauired>
                            </div>
                        </div>
                    </div>
                    <!-- To -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <label for="document file" class="form-label">Document file</label>
                                <input type="file" class="form-control" name="doc_file" accept="application/pdf" reauired>
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