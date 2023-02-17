<section id="position" class="container py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow border-0 p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Manage member</h4>
                        <hr>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success text-white me-1">
                            <a href="<?php echo site_url('membercontroller/add') ?>" class="text-white">
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col" style="width: 10%">Password</th>
                                    <th scope="col" style="width: 10%">edit</th>
                                    <th scope="col" style="width: 10%">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($member as $item) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $item->m_id ?></th>
                                        <td><?php echo $item->m_prefix . ' ' . $item->m_fname . ' ' . $item->m_lname ?></td>
                                        <td><?php echo $item->p_name ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info ">
                                                <a href="<?php echo site_url('membercontroller/password/') . $item->m_id ?>" class="text-white d-flex flex-row align-items-center gap-2"><i class="fas fa-pen me-1"></i>password</a>
                                            </button>

                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="<?php echo site_url('membercontroller/edit/') . $item->m_id ?>" class="text-white"><i class="fas fa-pen me-1"></i>edit</a>
                                            </button>

                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger">
                                                <a href="<?php echo site_url('membercontroller/delete/') . $item->m_id ?>" onclick="return confirm('Do you want to delete the position?')" class="text-white"><i class="fas fa-trash me-1"></i>delete</a>
                                            </button>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>