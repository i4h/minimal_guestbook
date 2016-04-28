<?php
require_once('protected/bootstrap.php'); 
//$user = Post::create(array('author' => 'Tito', 'text' => 'VA'));

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
			header('Location: '.BASE_URL."index.php?success=1");
		}
	}
}

include('protected/views/head.php');


include('protected/views/posts.php');

include('protected/views/form.php');


include('protected/views/footer.php')
?>



