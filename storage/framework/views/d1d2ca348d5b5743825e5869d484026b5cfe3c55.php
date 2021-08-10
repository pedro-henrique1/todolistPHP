<?php $__env->startSection('title'); ?>
Task List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-7" style="margin-left: 6px">
        <span class='colum flex-column'>Talk</span>
    </div>
    <div class='col-2'>
        <span class='colum flex-column'>Dificuldade</span>
    </div>
    <div class='col-1'>
        <span class='colum flex-column'>Importancia</span>
    </div>
    <div class='col-1'>
        <div class="icone">
            <svg style="width:40%; cursor:pointer;" xmlns="http://www.w3.org/2000/svg" class=" h-6
                w-6 adicionar" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
        </div>
    </div>
</div>
<hr />

<div class="position-relative">
    <div class="list">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="form-check  col-lg-7" style="margin-left: 22px">
                <?php if($item->status == 'checked'): ?>
                <input class="form-check-input" type="checkbox" id="check" checked />
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="check" />
                <?php endif; ?>
                <label class="form-check-label" for="check"><?php echo e($item->title); ?></label>
            </div>
            <div class="col-2 align-self-end">
                <span><?php echo e($item->difficulty); ?></span>
            </div>
            <div class="col-1 align-self-end">
                <span><?php echo e($item->important); ?></span>
            </div>
            <div class="col align-self-end">
                <a href="<?php echo e(route('tasks.edit.show', ['id' => $item->id])); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="width: 50%; color: #212529"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
            </div>
            <div class="col align-self-end">
                <a href="<?php echo e(route('tasks.delete', ['id' => $item->id])); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        style="width: 50%; color: #212529" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Tasklist</h5>
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 8%;cursor:pointer" class="  closeModal"
                    className="h-6 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('tasks.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Digite o Titulo">
                    </div>
                    <div class="form-group">
                        <label for="Difficulty">Dificuldade</label>
                        <select class="form-control" name="dificuldade" id="Difficulty">
                            <option>Selecionar</option>
                            <option value="easy">Fácil</option>
                            <option value="medium">Médio</option>
                            <option value="difficult">Difícil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Importancia">Importancia</label>
                        <select class="form-control" name="importancia" id="Importancia">
                            <option>Selecionar</option>
                            <option value="easy">Fácil</option>
                            <option value="medium">Médio</option>
                            <option value="difficult">Difícil</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary create">Criar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $('.adicionar').click(function (e) {
            $('.modal').show();
            $('.container-fluid').css(
                {
                    'filter': 'blur(2px)',
                    '-webkit-filter': 'blur(8px)',
                });
        });
        $('.closeModal').click(function (e) {
            $('.modal').toggle();
            $('.container-fluid').removeAttr('style')
        });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pedro/dev/projetos/todolist/resources/views/home.blade.php ENDPATH**/ ?>