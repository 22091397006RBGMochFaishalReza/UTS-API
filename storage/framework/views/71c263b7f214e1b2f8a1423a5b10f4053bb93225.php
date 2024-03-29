<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Profile</h1>
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
        <?php endif; ?>
        <form action="<?php echo e(route('profile.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo e($user->name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo e($user->email); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>

    </div>
</body>
</html>
<?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/profile.blade.php ENDPATH**/ ?>