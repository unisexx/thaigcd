<div id="blog" >
	<img src="themes/gcdnew/images/topic_blog.jpg" style="margin: 0 0 10px 5px;" />
	<div class="newentry ">
		<h3>New Entry</h3>
		<ul>
			<?php foreach($blogposts as $blogpost): ?>
			<li <?php echo cycle() ?>>
				<a href="blogs/<?php echo $blogpost->blog->id ?>/<?php echo $blogpost->id ?>">
					<img class="avatar" src="<?php echo avatar($blogpost->blog->user->profile->avatar) ?>" />
					<div class="info">
						<p><?php echo $blogpost->title ?></p>
						<small><?php echo $blogpost->blog->title ?></small>
						<span class="counter"><?php echo $blogpost->blogcomment->count() ?> ความคิดเห็น <img src="media/images/person.gif" /> <?php echo  $blogpost->counter ?> ผู้เข้าชม</span>
					</div>
				</a>
				<div class="clear"></div>
			</li>
			<?php endforeach; ?>
		</ul>
		<a href="blogs/newentry" class="more-rb">more</a>
	</div>
	<div class="newblog ">
		<h3>New Blog</h3>
		<ul>
			<?php foreach($blogs as $blog): ?>
			<?php if($blog->blogpost->order_by('id','desc')->get()->title): ?>
			<li <?php echo cycle() ?>>
				<a href="blogs/<?php echo $blog->id ?>/<?php echo $blog->blogpost->id ?>">
				<img class="avatar" src="uploads/users/thumbs50x50/<?php echo $blog->user->profile->avatar ?>" />
				<div class="info">
					<p><?php echo $blog->blogpost->title ?></p>
					<small><?php echo $blog->title ?></small>
					<span class="counter"><?php echo $blog->blogpost->blogcomment->count() ?> ความคิดเห็น <img src="media/images/person.gif" /> <?php echo  $blog->blogpost->counter ?> ผู้เข้าชม</span>
				</div>
				</a>
				<div class="clear"></div>
			</li>
			<?php endif; ?>
			<?php endforeach; ?>
		</ul>
		<a href="blogs/newblog" class="more-rb">more</a>
	</div>
	<div class="clear"></div>
</div>