<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/tab') ?>" id="list"><?php echo lang('tab_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('TAB.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/tab/create') ?>" id="create_new"><?php echo lang('tab_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>