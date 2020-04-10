

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Student Fee Details</h1>
                </div><br>
                <div class="col-md-8">
                    <form ation="<?php echo e(URL::to('/search')); ?>" method="get" role="search">
                        <?php echo e(csrf_field()); ?>

                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search Student">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                                      </svg>
                                </button>
                            </div>
                    </form>
                    <?php if(isset($details)): ?>
                    <p> The Search results  for your query <b> <?php echo e($query); ?> </b> are :</p>
                    <h1>Student Details: </h1>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th> Student Name</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($student->student_number); ?> </td>
                            <td> <?php echo e($student->full_name); ?> </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                    <?php endif; ?>
                </div>
                <div class="card-body m-auto">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <table class="table table-responsive table-center">
                                <thead>
                                    <tr>
                                        <th>Student Number</th>
                                        <th> Student Name</th>
                                        <th>Date of Payment</th>
                                        <th>Amount Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                        $total = 0;
                                    ?>
                                   
                                    <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($fee->student_number); ?> </td>
                                        <td> <?php echo e($fee->students->full_name); ?> </td>
                                        <td> <?php echo e($fee->date_of_payment); ?> </td>
                                        <td> <?php echo e($fee->amount); ?> </td>
                                    </tr>
                                    <?php
                                        $total += $fee->amount;
                                    ?>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </tbody>
                                
                            </table>
                            <h2>Total Fees Paid:</h2> <h3><?php echo e($total); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('111865.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111865\resources\views/111865/feestable.blade.php ENDPATH**/ ?>