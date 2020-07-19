<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Books'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="books view content">
            <h3><?= h($book->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($book->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Call Number') ?></th>
                    <td><?= h($book->call_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $book->has('subject') ? $this->Html->link($book->subject->name, ['controller' => 'Subjects', 'action' => 'view', $book->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Media Type') ?></th>
                    <td><?= $book->has('media_type') ? $this->Html->link($book->media_type->name, ['controller' => 'MediaTypes', 'action' => 'view', $book->media_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pages') ?></th>
                    <td><?= $this->Number->format($book->pages) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($book->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($book->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Acquired') ?></th>
                    <td><?= h($book->acquired) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($book->title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Publisher') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($book->publisher)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($book->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
