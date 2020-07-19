<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
 */
?>
<div class="books index content">
    <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Books') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('call_number') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('media_type_id') ?></th>
                    <th><?= $this->Paginator->sort('pages') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('acquired') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= h($book->id) ?></td>
                    <td><?= h($book->call_number) ?></td>
                    <td><?= $book->has('subject') ? $this->Html->link($book->subject->name, ['controller' => 'Subjects', 'action' => 'view', $book->subject->id]) : '' ?></td>
                    <td><?= $book->has('media_type') ? $this->Html->link($book->media_type->name, ['controller' => 'MediaTypes', 'action' => 'view', $book->media_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($book->pages) ?></td>
                    <td><?= h($book->created) ?></td>
                    <td><?= h($book->modified) ?></td>
                    <td><?= h($book->acquired) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
<?= $this->Element('common/paginator')?>