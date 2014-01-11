<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Usuario'][''], array('controller' => 'usuarios', 'action' => 'view', $usuario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sobrenome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['sobrenome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nivel_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Cadastro'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['data_cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Ultimo Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['data_ultimo_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativado'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ativado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($usuario['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Sobrenome'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th><?php echo __('Nivel Usuario'); ?></th>
		<th><?php echo __('Data Cadastro'); ?></th>
		<th><?php echo __('Data Ultimo Login'); ?></th>
		<th><?php echo __('Ativado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['usuario_id']; ?></td>
			<td><?php echo $usuario['nome']; ?></td>
			<td><?php echo $usuario['sobrenome']; ?></td>
			<td><?php echo $usuario['email']; ?></td>
			<td><?php echo $usuario['usuario']; ?></td>
			<td><?php echo $usuario['senha']; ?></td>
			<td><?php echo $usuario['info']; ?></td>
			<td><?php echo $usuario['nivel_usuario']; ?></td>
			<td><?php echo $usuario['data_cadastro']; ?></td>
			<td><?php echo $usuario['data_ultimo_login']; ?></td>
			<td><?php echo $usuario['ativado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
