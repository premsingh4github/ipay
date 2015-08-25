<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/partner') ?>" id="list"><?php echo lang('partner_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Partner.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/partner/create') ?>" id="create_new"><?php echo lang('partner_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>