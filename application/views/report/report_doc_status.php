<section id="position" class="container py-4">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 ">
            <div class="card shadow border-0 p-3">
                <h4>รายงานจำนวนเอกสารทั้งหมด - แยกตามสิทธิ์</h4>
                <hr>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">สิทธ์การใช้งาน</th>
                            <th scope="col" style="width: 10%">จำนวน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($doc_status as $item) { ?>
                            <tr>
                                <td scope="row"><?php echo $item->doc_status == '1' ? 'อ่านได้ทุกคน' : 'เฉพาะผู้บริหาร' ?></td>
                                <td><?php echo $item->doc_status_total ?> ฉบับ</td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>