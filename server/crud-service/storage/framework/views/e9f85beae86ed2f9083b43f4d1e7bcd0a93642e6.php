<?php $__env->startSection('custom-styles'); ?>
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?php echo e(asset("assets/vendors/custom/datatables/datatables.bundle.css")); ?>" rel="stylesheet"
          type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>

    <div class="kt-subheader kt-grid__item">
        <div class="kt-subheader__main">
            <div class="kt-subheader__title">Societies</div>
            <div class="kt-subheader__separator kt-hidden"></div>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="<?php echo e(route('society.index')); ?>" class="kt-subheader__breadcrumbs-link"> Batch </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="<?php echo e(route('society.index')); ?>" class="kt-subheader__breadcrumbs-link"> Manage Societies </a>
            </div>
        </div>
    </div>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Manage Societies</h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <table id="society" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php $__env->startComponent('includes.confirm-modal', [
        "id" => "deleteModal",
        "title" => "Delete Batch",
        "message" => "Are you sure you want to delete the society ? ",
        "path" => '/society',
    ]); ?>
        <?php $__env->slot('method'); ?>
            <?php echo method_field('DELETE'); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-scripts'); ?>
    <!--begin::Page Vendors(used by this page) -->
    <script src="<?php echo e(asset("assets/vendors/custom/datatables/datatables.bundle.js")); ?>" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset("assets/js/demo1/pages/crud/datatables/basic/paginations.js")); ?>"
            type="text/javascript"></script>
    <?php echo $__env->make('includes.show-toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset("js/society/manage.js")); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/karunakukreja/Desktop/Smart Society/chowkidar-server/server/crud-service/resources/views/society/index.blade.php ENDPATH**/ ?>