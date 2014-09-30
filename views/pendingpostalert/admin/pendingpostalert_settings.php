<table style="width: 630px;" class="my_table">
	<tr>
		<td style="width:60px;">
			<span class="big_blue_span"><?php echo Kohana::lang('ui_main.step');?> 1:</span>
		</td>
		<td>
			<h4 class="fix">Setup Instructions</h4>
			<div>In order for this plugin to work properly, you will need to do a few things outside of your Ushahidi deployment. Follow the steps outlined below.</div>
			<ol>
				<li>Set a comma separated list of email addresses to be notified of pending posts. For example x@y.com, z@w.com</li>
				<li>Drink a celebratory beverage.</li>
			</ol>
		</td>
	</tr>
	<tr>
		<td>
			<span class="big_blue_span"><?php echo Kohana::lang('ui_main.step');?> 2:</span>
		</td>
		<td>
			<h4 class="fix">Pending Post Alert Details</h4>
			<div class="row">
				<h4>E-mail address list:</h4>
				<?php print form::input('pendingpostalert_emails', $form['pendingpostalert_emails'], ' class="text title"'); ?>
			</div>
		</td>
	</tr>
</table>
