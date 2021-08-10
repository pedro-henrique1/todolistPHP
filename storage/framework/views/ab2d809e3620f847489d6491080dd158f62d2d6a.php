<?php $__env->startSection('title'); ?>
    Edit task
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modalEdit'); ?>
<form action="<?php echo e(route('edit', ['id' => $taskUniq->id])); ?>" method="POST">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="<?php echo e($taskUniq->title); ?>" class="form-control"
            placeholder="Digite o Titulo">
    </div>
    <div class="form-group">
        <label for="Difficulty">Dificuldade</label>
        <select class="form-control" name="dificuldade" id="Difficulty">
            <option>Selecionar</option>
            <?php if($taskUniq->difficulty == 'easy'|| $taskUniq->difficulty == 'medium' || $taskUniq->difficulty ==
            'difficult'): ?>
            <option value="easy">Fácil</option>
            <option value="medium">Médio</option>
            <option value="difficult">Difícil</option>
            <?php endif; ?>
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
    <div class="">
        <button type="submit" class="btn btn-primary create col-md-2">Editar</button>
    </div>
</form>
















<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pedro/dev/projetos/todolist/resources/views/edit.blade.php ENDPATH**/ ?>