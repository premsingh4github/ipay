<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/forex') ?>" id="list"><?php echo lang('forex_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Forex.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/forex/create') ?>" id="create_new"><?php echo lang('forex_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>