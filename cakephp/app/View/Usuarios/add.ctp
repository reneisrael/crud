<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('sobrenome');
		echo $this->Form->input('email');
		echo $this->Form->input('usuario');
		echo $this->Form->input('senha');
		echo $this->Form->input('info');
		echo $this->Form->input('nivel_usuario');
		echo $this->Form->input('data_cadastro');
		echo $this->Form->input('data_ultimo_login');
		echo $this->Form->input('ativado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
