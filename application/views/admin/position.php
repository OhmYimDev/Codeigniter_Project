<section id="position" class="container py-4">
    <div class="card shadow border-0 p-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>Manage Position</h4>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success text-white me-1">
                    <a href="<?php echo site_url('PositionController/add') ?>" class="text-white">
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
                            <th scope="col">Position name</th>
                            <th scope="col" style="width: 10%">edit</th>
                            <th scope="col" style="width: 10%">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($positions as $item) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->p_id ?></th>
                                <td><?php echo $item->p_name ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning">
                                        <a href="<?php echo site_url('positioncontroller/edit/') . $item->p_id ?>" class="text-white"><i class="fas fa-pen me-1"></i>edit</a>
                                    </button>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <a href="<?php echo site_url('positioncontroller/delete/') . $item->p_id ?>" onclick="return confirm('Do you want to delete the position?')" class="text-white"><i class="fas fa-trash me-1"></i>delete</a>
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