<?php
define( "NL", "\n" );

$hello = "Hello World!";

function tagWrite( $tag, $string )
{
	echo "<" . $tag . ">" . $string . "</" . $tag . ">" . NL;
}

function write_paragraph($string)
{
	tagWrite( "p", $string );
}


?>
<html>
<head>
<?php
tagWrite( "title", $hello );
?>
</head>
<body>
<?php

write_paragraph( $hello );

if ( true )
{
	write_paragraph( "Bob" );
}
?>
</body>
</html>
