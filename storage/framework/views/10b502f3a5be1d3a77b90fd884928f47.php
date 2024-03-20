<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Histiry</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <table>
        <section class="py-5">
            <div class="text-center">
                <h4>ประวัติการสั่งซื้อ</h4>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 justify-content-start">
                    <div class="col-md-6">
                        <div class="card-body p-4">
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <p>หมายเลขคำสั่งซื้อ</p>
                                            </div>
                                            <div class="col-6">
                                                <p><?php echo e($orderID); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>วันที่</p>
                                            </div>
                                            <div class="col-6">
                                                <p><?php echo e($historyhead->date); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>ที่อยู่</p>
                                            </div>
                                            <div class="col-6">
                                                <p><?php echo e($historyhead->Address); ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <H4>รายการสินค้า</H4>
                                        <?php $__currentLoopData = $historybody; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $his): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p><?php echo e($his->name); ?>*<?php echo e($his->Quantity); ?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p><?php echo e($his->price); ?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p><?php echo e($his->SUM); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-2">
                                            <p><?php echo e($historybottom->SUM); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
        </section>
</body>

</html>
<?php /**PATH /Users/kaivit/Desktop/Earth/SE/MLM/resources/views/Historyinfo.blade.php ENDPATH**/ ?>