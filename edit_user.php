<?php
include("../header.php");
?>
<style>
    body, html {
        background-color: #303030;
        color: white;
    }
</style>
<div class='container-fluid mt-2 table-responsive'>
    <h1>จัดการผู้ใช้งาน</h1>
    <table class='table table table-striped table-dark table-bordered'>
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อผู้ใช้</th>
                <th>ชื่อจริง</th>
                <th>ประเภทผู้ใช้งาน</th>
                <th>ที่อยู่</th>
                <th>อีเมล</th>
                <th>โทร</th>
                <th>เลขทะเบียน</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from user";
            $query = $mysqli -> query($sql);
            $int = 0;
            while ($obj = $query -> fetch_object()) {
                $int++;
            ?>
            <tr>
                <td><?php echo $int; ?></td>
                <td><?php echo $obj -> username; ?></td>
                <td><?php echo $obj -> fullname; ?></td>
                <td><?php echo $obj -> user_type; ?></td>
                <td><?php echo $obj -> address; ?></td>
                <td><?php echo $obj -> email; ?></td>
                <td><?php echo $obj -> tel; ?></td>
                <td><?php echo $obj -> car_no; ?></td>
                <td>
                    <?php if ($obj -> status == 1) { ?>
                        <span class='text-success'>อนุมัติ</span>
                    <?php } ?>
                    <?php if ($obj -> status == 0) { ?>
                        <span class='text-danger'>ไม่อนุมัติ</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($obj -> status == 1) { ?>
                        <a href="user_status.php?user_id=<?php echo $obj -> user_id; ?>&status=<?php echo $obj -> status; ?>" class='btn btn-warning py-1 px-4'>ไม่อนุมัติ</a>
                    <?php } ?>
                    <?php if ($obj -> status == 0) { ?>
                        <a href="user_status.php?user_id=<?php echo $obj -> user_id; ?>&status=<?php echo $obj -> status; ?>" class='btn btn-success py-1 px-4'>อนุมัติ</a>
                    <?php } ?>
                    <a href="user_delete.php?user_id=<?php echo $obj -> user_id; ?>" class='btn btn-danger py-1 px-4'>ยกเลิก</a>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <th colspan='10'>ผู้ใช้งานทั้งหมด: <?php echo $int; ?> คน</th>
            </tr>
        </tbody>
    </table>
</div>