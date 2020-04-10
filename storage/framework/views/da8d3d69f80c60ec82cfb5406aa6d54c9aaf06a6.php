

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add a new Student</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action=" <?php echo e(route('storeStudent')); ?> ">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <label for="full_name">Full Name</label>
                          <input type="text" class="form-control"  name="full_name">
                          <small class="form-text text-muted">Please enter your full name</small>
                        </div>
                        <div class="form-group">
                          <label for="date_of_birth">Date of Birth</label>
                          <input type="date" class="form-control"  name="date_of_birth">
                          <small class="form-text text-muted">Please enter your Date of Birth</small>
                        </div>
                        <div class="form-group">
                          <label for="address">Physical Address</label>
                          <textarea name="address" class="form-control"></textarea>
                          <small class="form-text text-muted">Please enter your physical Address</small>
                        </div>


                        <button type="submit" class="btn btn-primary">Add new Student</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('111865.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111865\resources\views/111865/student.blade.php ENDPATH**/ ?>