<section id="position" class="container py-4">
    <div class="card shadow border-0 p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>เรียกดูเอกสารตามช่วงเวลา</h4>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-6">
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
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%">Date</th>
                            <th scope="col" style="width: 5%">Doc no.</th>
                            <th scope="col" style="width: 50%">Document name</th>
                            <th scope="col" style="width: 15%">From</th>
                            <th scope="col" style="width: 15%">To</th>
                            <th scope="col" style="width: 15%">Read</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($report as $item) { ?>
                            <tr>
                                <td scope="row"><?php echo date('d-m-Y', strtotime($item->doc_save)) ?></td>
                                <td scope="row"><?php echo $item->doc_num ?></td>
                                <td><?php echo '<b class="text-primary">' . 'ประเภท ' . $item->d_name . '</b><br>'
                                        . $item->doc_name . ' (ลว. ' . date('d-m-Y', strtotime($item->doc_date)) . ')' ?>
                                </td>
                                <td><?php echo $item->doc_from ?></td>
                                <td><?php echo $item->doc_to ?></td>
                                <td><?php
                                    $old_file = $item->doc_file;
                                    if ($old_file != '') {
                                    ?>
                                        <a href="<?php echo base_url('docs/' . $old_file); ?>" target="_blank" class="btn btn-info text-white"><i class="fas fa-eye"></i></a>

                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>