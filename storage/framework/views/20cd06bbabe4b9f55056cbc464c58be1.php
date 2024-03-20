<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>
    
            <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>PV</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->Name); ?></td>
                    <td><?php echo e($item->Surname); ?> บาท</td>
                    <td><?php echo e($item->pv); ?> point</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        </div>
    
</body>
</html><?php /**PATH /Users/kaivit/Desktop/Earth/SE/MLM/resources/views/Notification.blade.php ENDPATH**/ ?>