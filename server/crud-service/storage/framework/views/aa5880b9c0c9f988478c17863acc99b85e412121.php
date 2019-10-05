<!-- CANCEL ORDER MODAL -->
<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e($title); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo e($message); ?></p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo e($path); ?>" id="delete_form" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo e($method); ?>

                    <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="confirm" class="btn btn-brand">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>





































<?php /**PATH /Users/karunakukreja/Desktop/Smart Society/chowkidar-server/server/crud-service/resources/views/includes/confirm-modal.blade.php ENDPATH**/ ?>