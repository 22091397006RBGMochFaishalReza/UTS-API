

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Contact</h1>
    <hr />
    <form action="<?php echo e(route('contacts.update', $contact->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo e($contact->first_name); ?>">
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo e($contact->last_name); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e($contact->email); ?>">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e($contact->phone); ?>">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ainur Rofik\Documents\#KuliahS4\PPL\tugas-ppl\tugas-ppl\resources\views/contacts/edit.blade.php ENDPATH**/ ?>