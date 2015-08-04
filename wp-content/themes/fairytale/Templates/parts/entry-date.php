
	<div class="date">
		<span class="icon-round"></span>
		<a href="{dayLink $post->date}" title="{$post->date|date:$site->dateFormat}" rel="bookmark">
			<span class="icon-date">
				<div class="date-day">{$post->date|date:"d"}</div>
				<div class="month-year">
					<p class="date-month"><?php echo date_i18n('M',strtotime($post->date)); ?></p>
					<p class="date-year">{$post->date|date:"Y"}</p>
				</div>
			</span>
		</a>
	</div>
