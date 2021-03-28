<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
        <link rel="stylesheet" href="buyagrade.css">
	</head>

	<body>

        <?php
        if (isset($_REQUEST["name"])&&
            isset($_REQUEST["section"])&&
            isset($_REQUEST["creditcard"])&&
            isset($_REQUEST["card"])){
                ?>
                <h1>Sorry</h1>
                <p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
                
                <?php
            }

            else{
                $file=glob("asdsa.txt");
                file_put_contents($file, $_REQUEST["name"] . ";" . 
                            $_REQUEST["section"] . ";" . 
                            $_REQUEST["creditcard"] . ";" . 
                            $_REQUEST["card"] . "\n");
                ?>
                <h1>Thanks, sucker!</h1>
                <p>Your information has been recorded.</p>

                <dl>
                    <dt>Name</dt>
                    <dd><?=$_REQUEST["name"]?></dd>

                    <dt>Section</dt>
                    <dd><?=$_REQUEST["section"]?></dd>

                    <dt>Credit Card</dt>
                    <dd>
                        <?=$_REQUEST["creditcard"]  ?>
                        <?=$_REQUEST["card"]  ?>
                    </dd>
                </dl>
                <?php
            }
        ?>
		
	</body>
</html>  