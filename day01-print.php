<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>测试打印</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>
            * { margin: 0; padding: 0; }
            body { font: 12px/1.5 arail; }
            ul { list-style: none; }
        </style>
    </head>
    <body>
		<?php
		$a=array('a'=>'Dog','b'=>'Cat','c'=>'Horse','d'=>array('b'=>1));
		// print_r($a);
		// printf($a);//报错
		var_dump($a);
		// print($a);// 报错
        if(true){
            $a=123;
            
        }
        print_r($a);
		?>
    </body>
</html>