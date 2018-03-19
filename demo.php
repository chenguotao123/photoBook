<?php
function getfilecounts($ff){
	$dir = './'.$ff;
	$handle = opendir($dir);
	$i = 0;
	while(false !== $file=(readdir($handle))){
		if($file !== '.' && $file != '..')
		{
			$i++;
		}
	}
	closedir($handle);
	return $i;
}

$res = getfilecounts('files/mobile');
echo json_encode($res);
// echo $res;
exit();