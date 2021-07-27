
<?php
$head_page_js_script = "
function b64_to_utf8(str) {
	return decodeURIComponent(escape(window.atob(str)));
}
function load_page(){
	var str = document.getElementById('page') ;
	var txt = str.textContent || str.innerText;
	var str = b64_to_utf8(txt);
	document.getElementById('page').innerHTML = str ;
}
";
$head_page = '<!DOCTYPE html>
<html>
	<head>
		<script language="javascript">
			'.$head_page_js_script.'
		</script>
	</head>
	<body>
		<div id="page">
';
$body_page = 'Привіт світ.';
$footer_page = '
		</div>
		<script>window.onload = load_page();</script>
	</body>
</html>	
';
$body_page = base64_encode($body_page);
echo $head_page;
echo $body_page;
echo $footer_page;
?>
