<?php
	$shk_corporate_actions = $this->recommended_actions;
	$shk_corporate_actions_todo = get_option( 'recommending_actions', false );
?>
<div id="recommended_actions" class="shk-corporate-tab-pane panel-close">
	<div class="action-list">
		<?php if($shk_corporate_actions): foreach ($shk_corporate_actions as $key => $shk_corporate_actionValue): ?>
		<div class="action" id="<?php echo esc_attr($shk_corporate_actionValue['id']); ?>">
			<div class="recommended_box col-md-6 col-sm-6 col-xs-12">
				<img width="772" height="180" src="<?php echo esc_url(SHK_CORPORATE_TEMPLATE_DIR_URI.'/images/'.str_replace(' ', '-', strtolower($shk_corporate_actionValue['title'])).'.png');?>">
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($shk_corporate_actionValue['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($shk_corporate_actionValue['desc']); ?></div>
					<?php echo wp_kses_post($shk_corporate_actionValue['link']); ?>
					<div class="action-watch">
						<?php if(!$shk_corporate_actionValue['is_done']): ?>
							<?php if(!isset($shk_corporate_actions_todo[$shk_corporate_actionValue['id']]) || !$shk_corporate_actions_todo[$shk_corporate_actionValue['id']]): ?>
								<span class="dashicons dashicons-visibility"></span>
							<?php else: ?>
								<span class="dashicons dashicons-hidden"></span>
							<?php endif; ?>
						<?php else: ?>
							<span class="dashicons dashicons-yes"></span>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>
