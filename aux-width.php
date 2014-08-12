<?php

if(isset($_GET['code']))
{
	header('content-type: text/plain; charset=utf-8');
	echo file_get_contents(__FILE__);
	exit;
}

if(!isset($_POST['width']) || !isset($_POST['height'])) {
echo '
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var height = $(window).height();
    var width = $(window).width();
    $.ajax({
        type: \'POST\',
        url: \'aux-width.php\',
        data: {
            "height": height,
            "width": width
        },
        success: function (data) {
            $("body").html(data);
        },
    });
});
</script>
';
}
echo "<h1>Screen Resolution:</h1>";
?>

<?php
echo "Width  : ".$_POST['width']."<br>";
echo "Height : ".$_POST['height']."<br>";
?>
<br/>
<a href="?code" target="_blank">php-code</a>