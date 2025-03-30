<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?= $this->Form->control('name', ['label' => 'Name']) ?>
    <?= $this->Form->control('email', ['label' => 'Email']) ?>
    <?= $this->Form->control('password', ['label' => 'Password', 'type' => 'password']) ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>