<?php
require_once('protected/bootstrap.php'); 

$newPost = new Post();

if (isset($_POST)) {
	if (isset($_POST['Post'])) {
		$newPost->update_attributes([
			'author'=>$_POST['Post']['author'],	
			'author_email'=>$_POST['Post']['author_email'],				
			'text'=>$_POST['Post']['text'],							
		]);
		
		if ($newPost->is_valid()) {
			$newPost->save();
			header('Location: '.$_SERVER['PHP_SELF']."?success=1");
		}
	}
}

include('protected/views/head.php');


include('protected/views/posts.php');

include('protected/views/form.php');


include('protected/views/footer.php')
?>



