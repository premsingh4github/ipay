<ul class="nav nav-pills">
       
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/department') ?>" id="list"><?php echo lang('department_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Department.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/department/create') ?>" id="create_new"><?php echo lang('department_new'); ?></a>
	</li>
        
	<?php endif; ?>
</ul>