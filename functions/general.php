<?php
function print_errors($errors) {
	return  implode('</div>', $errors);
	//return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	//return'<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Password didnot match !!!</div>';
	//return print_r($errors);
	//return '<pre>'. print_r( $errors ).'</pre>';
}


?>