<h2>Write a message</h2>
<div class="guestbook-form">
<form action="index.php" method="post">
<div class="guestbook-form-field">
Your Name:<br>
<input type="text" name="Post[author]"><br />
<div class="guestbook-form-error"><?= (is_object($newPost->errors) ? $newPost->errors->on('author') : "") ?></div>
</div>

<div class="guestbook-form-field">
Your E-Mail:<br>
<input type="text" name="Post[author_email]" ><br />
<div class="guestbook-form-error"><?= (is_object($newPost->errors) ? $newPost->errors->on('author_email') : "") ?></div>
</div>

<div class="guestbook-form-field">
Your Message:<br>
<textarea name="Post[text]">
</textarea><br />
<div class="guestbook-form-error"><?= (is_object($newPost->errors) ? $newPost->errors->on('text') : "") ?></div>
</div>

<div class="guestbook-form-controls">
<input type="submit" value="Submit">
</div>
</form>
</div>
