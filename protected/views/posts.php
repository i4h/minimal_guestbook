<?php
if (isset($_GET['success']))
	echo '<div class="guestbook-flash-message">New Post was saved!</div>';


$posts = Post::find('all', array('order' => 'created_at desc')); ?>


<h2>Previous Messages</h2>

<div class="guestbook-previous-posts">
<?php 
foreach($posts as $post) {
		
	//$dt = new DateTime($post->created_at);
	$date = $post->created_at->format("d.m.Y @ H:i");

?>	

<div class="guestbook-message">
<div class="guestbook-message-header">Written by <?= $post->author ?> on <?= $date ?></div>
<div class="guestbook-message-text"><?= $post->text ?></div>

</div>
<?php 
}
?>
</div>




