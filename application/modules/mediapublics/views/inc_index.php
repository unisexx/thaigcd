<div class="corner left" id="boxnotice">
	<a class="moreright2" href="mediapublics/index/<?php echo $group_id?>">more</a>
	<div class="topic"><img src="themes/gcdnew/images/topic_media.png"></div>		
	<div id="medialist">
		<ul>
		<?php foreach($media as $mediapublic):?>
			<li>
				<a href="mediapublics/download/<?php echo $mediapublic->id?>"><?php echo lang_decode($mediapublic->title)?></a>
				<span class="date"><?php echo mysql_to_th($mediapublic->created,'S',TRUE)?></span>
			</li>
		<?php endforeach;?>
		</ul>
	</div>
</div>