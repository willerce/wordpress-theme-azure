<div class="wrap">
	<div id="icon-themes" class="icon32"></div>
	<h2>Theme Setting</h2>

	<form method="POST" action="">

		<h3>Theme Settings</h3>
		<table class="form-table">

			<tr valign="top">
				<th scope="row">
					<label for="feed_url">Feed URL</label>
				</th>
				<td>
					<input id="feed_url" name="Azure[feed]" class="regular-text" type="text" value="<?php print get_option('azure_theme_feed'); ?>" />
					<span class="description">Leave empty to display default rss feed</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="ga_id">Google Analytics ID</label>
				</th>
				<td>
					<input id="ga_id" name="Azure[ga]" class="regular-text" type="text" value="<?php print get_option('azure_theme_ga'); ?>" />
				</td>
			</tr>
		</table>

		<h3>SNS Contact Settings</h3>
		<p class="description">Leave empty to hide that icon in the theme</p>

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

			</tbody>
		</table>

		<p class="submit">
			<input id="submit" type="submit" class="button-primary" value="Save Everyting Above" />
		</p>

	</form>

</div>
