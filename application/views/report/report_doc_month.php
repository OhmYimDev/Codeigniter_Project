<section id="position" class="container py-4">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 ">
            <div class="card shadow border-0 p-3">
                <h4>รายงานจำนวนเอกสารทั้งหมด - แยกตามเดือน</h4>
                <hr>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">เดือน / ปี</th>
                            <th scope="col" style="width: 10%">จำนวน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($doc_month as $item) { ?>
                            <tr>
                                <td scope="row"><?php echo $item->docsave; ?></td>
                                <td><?php echo $item->doc_date_total ?> ฉบับ</td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>