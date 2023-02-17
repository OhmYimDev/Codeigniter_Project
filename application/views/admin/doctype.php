<section id="position" class="container py-4">
    <div class="card shadow border-0 p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>Manage Type of Document</h4>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success text-white me-1">
                    <a href="<?php echo site_url('doctypecontroller/add') ?>" class="text-white">
                        <i class="fa-solid fa-circle-plus me-1"></i>
                        เพิ่มข้อมูล
                    </a>
                </button>
                <button type="button" class="btn bg-secondary">
                    <a href="" class="text-white">
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
                            <th scope="col" style="width: 5%">ID</th>
                            <th scope="col">Document type name</th>
                            <th scope="col" style="width: 10%">edit</th>
                            <th scope="col" style="width: 10%">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($doctype as $item) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->d_id ?></th>
                                <td><?php echo $item->d_name ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning">
                                        <a href="<?php echo site_url('doctypecontroller/edit/') . $item->d_id ?>" class="text-white"><i class="fas fa-pen me-1"></i>edit</a>
                                    </button>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <a href="<?php echo site_url('doctypecontroller/delete/') . $item->d_id ?>" onclick="return confirm('Do you want to delete the position?')" class="text-white"><i class="fas fa-trash me-1"></i>delete</a>
                                    </button>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>