<div class="wrap">
	<div id="icon-themes" class="icon32"></div>
	<h2>SNS Setting</h2>

	<form method="POST" action="">
		<table class="form-table">
			<tbody>

				<tr valign="top">
					<th scope="row">
						<label for="fb_id">Facebook ID</label>
					</th>
					<td>
						<input type="text" id="fb_id" name="Azure[facebook]" class="regular-text" value="<?php print get_option('azure_sns_facebook'); ?>" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="tw_id">Twitter ID</label>
					</th>
					<td>
						<input type="text" id="tw_id" name="Azure[twitter]" class="regular-text" value="<?php print get_option('azure_sns_twitter'); ?>" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="email">Email</label>
					</th>
					<td>
						<input type="text" id="email" name="Azure[email]" class="regular-text" value="<?php print get_option('azure_sns_email'); ?>" />
					</td>
				</tr>

				<tr>
					<th scope="row"></th>
					<td>
						<span class="description">Leave empty to hide that icon in the theme</span>
					</td>
				</tr>

			</tbody>
		</table>

		<p class="submit">
			<input id="submit" type="submit" class="button-primary" value="Save" />
		</p>

	</form>

</div>
