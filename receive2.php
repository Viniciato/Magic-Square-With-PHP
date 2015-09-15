<?php
if (isset($_POST['field'])) 
{

	if (isset($_POST['new'])) 
	{
		unset($_POST['field']);
	}

	if(isset($_POST['field']))
	{
		$field[0] = $_POST['field'][0];
		$field[1] = $_POST['field'][1];
		$field[2] = $_POST['field'][2];
		$field[3] = $_POST['field'][3];
		$field[4] = $_POST['field'][4];
		$field[5] = $_POST['field'][5];
		$field[6] = $_POST['field'][6];
		$field[7] = $_POST['field'][7];
		$field[8] = $_POST['field'][8];
	}

	if (isset($_POST['field'])) {
		if ($field[0] + $field[1] + $field[2] == 15 & $field[3] + $field[4] + $field[5] == 15 & $field[6] + $field[7] + $field[8] == 15 & 
			$field[0] + $field[3] + $field[6] == 15 & $field[1] + $field[4] + $field[7] == 15 & $field[2] + $field[5] + $field[8] == 15 & 
			$field[0] + $field[4] + $field[8] == 15 & $field[2] + $field[4] + $field[6] == 15 )
		{
			for ($i=0; $i < 8; $i++) { 
				for ($k=0; $k < 8; $k++) { 
					if($i == $k)
					{
					}
					else
					{
						if ($field[$k] == $field[$i]) 
						{
							$repetido = 1;
							$ganhador = 2;
						}
					}
				}
			}
			if (isset($repetido) == 1) 
			{
			}
			else
			{
				$ganhador = 1;
			}
		}
	}
}
?>