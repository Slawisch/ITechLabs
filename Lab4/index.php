<body>

    <?php
	$fileOnPage = 'Text4page.txt';

	if (isset($_POST['submitedit']))
	{
		file_put_contents($fileOnPage, $_POST['texteditor']);
	}

	if (isset($_POST['submitadd']) && !empty($_POST['submitadd']))
	{
		$fp = fopen($_POST['addfilename'] . ".txt", 'w+');
		fwrite($fp, $_POST['texteditor']);
		fclose($fp);
	}

	$text = file_get_contents($fileOnPage);
	
	echo(file_get_contents($fileOnPage));
	?>
	
	
  <!-- HTML form -->
<form action="" method="post">
    <textarea name="texteditor" style = "width:30%; height:200px">
		<?php 
		if(!empty($text)){
		echo($text);} 
		?>
	</textarea>
	<input type="submit" name = "submitedit" value = "Submit edit"/>
	<input type="reset" />
	<br>
	<input type="submit" name = "submitadd" value = "Add new file"/>
	<input type="text" name = "addfilename">
	</form>
	
</body>