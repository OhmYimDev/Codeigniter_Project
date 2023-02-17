<section id="position" class="container py-4">
    <div class="card shadow border-0 p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>Document</h4>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-12">
                <button type="button" class="btn bg-secondary">
                    <a href="<?php site_url('BossController') ?>" class="text-white">
                        <i class="fas fa-recycle"></i>
                        Refresh Data
                    </a>
                </button>
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
                        <?php foreach ($document as $item) { ?>
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