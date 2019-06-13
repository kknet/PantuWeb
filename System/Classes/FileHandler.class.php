<?php


class FileHandler
{
	public function __construct()
	{
	}

	public static function listFiles($folder)
	{
		$files = array();

		foreach(glob($folder.'*.*', GLOB_BRACE) as $filename)
		{
			$files[] = array(
				"name" => str_replace($folder, "", $filename),
				"size" => HumanReadable::GetFileSize(filesize($filename))
			);
		}

		return $files;
	}




}

?>
