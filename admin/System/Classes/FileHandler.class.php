<?php


class FileHandler
{
	public function __construct()
	{
	}

	public static function listFiles($folder)
	{
		$files = array();

		foreach(glob($folder.'*.{mp3,aac,flac,opus,vorbis,wav,mp4}', GLOB_BRACE) as $filename)
		{
			$files[] = array(
				"name" => str_replace($folder, "", $filename),
				"size" => HumanReadable::GetFileSize(filesize($filename))
			);
		}

		return $files;
	}


	public static function ListFilesWithdbNames()
	{

		$db = new BasicDB();
$files = array();
    $get_settings = $db->from('Settings')
        ->where('ID', "1")
        ->first();

			$rawFiles =	FileHandler::listFiles($get_settings["DOWNLOADPATH"]);

		foreach($rawFiles as $filename)
			{

				$filenameparts = explode('.', $filename["name"]);

				$get_files = $db->from('PublicContentLogs')
		        ->where('CONTENT_ID', $filenameparts[0])
						->where('CONTENTEXT', $filenameparts[1])
		        ->first();

				$files[] = array(
					"name" => $get_files["TITLE"],
					"size" => $filename["size"],
					"ext" => $get_files["CONTENTEXT"],
					"type" => $get_files["CONTENTTYPE"],
					"hash" => $get_files["CONTENTHASH"]
				);
			}

return $files;
	}



}

?>
