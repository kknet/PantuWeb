<?php


class ThemeFunctions
{

  public function createDownloadForm($result,$contentUrl)
  {


$formats = $result["formats"];

$echoformats = '<select name="formats" id="formats">
<option value="best">Best Quality(Audio&Video)</option>';
foreach ($formats as $d) {

$echoformats .= '<option value="'.$d["format_id"].'">'.$d["format"]." | ".$d["ext"].'</option>';

}
$echoformats .= '</select>';


    $html = '
    <section id="one" class="main style1">
				<div class="container">
					<div class="row gtr-150">
						<div class="col-6 col-12-medium">
							<header class="major">
								<h2>'.$result["title"].'</h2>
							</header>
							<p>'.substr((!$result["description"]) ? '' : $result["description"], 0, 500).'</p>
						</div>
						<div class="col-6 col-12-medium imp-medium">
							<span class="image fit"><img src="'.$result["thumbnail"].'" alt="" /></span>
						</div>
					</div>
          <button type="button" class="button primary" data-toggle="modal" data-target="#getAudioModal">Download Audio </button>
          <button type="button" class="button primary" data-toggle="modal" data-target="#getVideoModal">Download Video </button>
				</div>
		</section>


    <div class="modal fade" id="getAudioModal" tabindex="-1" role="dialog" aria-labelledby="getAudioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="getAudioModalLabel">Download Audio </h5>
      </div>
      <div class="modal-body">
      <div class="container" id="getAudioModalcontainer">
<div id="getAudioModalalertBox">

</div>


      <form  action="javascript:void(0);" id="getAudioForm" name="getMusic" onsubmit="downloadAudio(); return false;">
            <div class="row gtr-uniform ">
              <div class="col-12 col-12-xsmall">
                <input type="text" name="title" id="title" value="'.$result["title"].'"  disabled/>
                <input type="hidden" name="contentUrl" value="'.$contentUrl.'" >
              </div>
              <div class="col-12">
              <label for="quality">Audio Quality</label>
                <select name="quality" id="quality">
                  <option value="0">- Quality -</option>
                  <option value="5">- Default -</option>
                  <option value="0">- Best -</option>
                  <option value="3">- Normal -</option>
                  <option value="9">- Eco -</option>
                </select>
              </div>
              <div class="col-12">
              <label for="extension">Audio Extension</label>
                <select name="extension" id="extension">
                  <option value="mp3">- Extension -</option>
                  <option value="aac">- aac -</option>
                  <option value="flac">- flac -</option>
                  <option value="mp3">- mp3 -</option>
                  <option value="opus">- opus -</option>
                  <option value="vorbis">- vorbis -</option>
                  <option value="wav">- wav -</option>
                </select>
              </div>
              <div class="col-6 col-12-small">
                <input type="checkbox" id="embedThumbnail" name="embedThumbnail" checked>
                <label for="demo-copy">Embed Thumbnail</label>
              </div>
              <div class="col-6 col-12-small">
                <input type="checkbox" id="addMetadata" name="addMetadata" checked>
                <label for="demo-human">Add Metadata</label>
              </div>
              <div class="col-12">
                <ul class="actions">
                  <li><input type="submit" value="Download" class="primary" /></li>
                  <li><input type="reset" value="Reset" /></li>
                </ul>
              </div>
            </div>
          </form>

  </div>
      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="getVideoModal" tabindex="-1" role="dialog" aria-labelledby="getVideoModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="getVideoModalLabel">Download Video</h5>
  </div>
  <div class="modal-body">
  <div class="container" id="getVideoModalcontainer">
<div id="getVideoModalalertBox">

</div>


  <form action="javascript:void(0);" id="getVideoForm" name="getVideo" onsubmit="downloadVideo(); return false;"">
        <div class="row gtr-uniform ">
          <div class="col-12 col-12-xsmall">
            <input type="text" name="title" id="title" value="'.$result["title"].'"  disabled/>
            <input type="hidden" name="contentUrl" value="'.$contentUrl.'" >
          </div>
          <div class="col-12">
          <label for="formats">Video Format</label>
            '.$echoformats.'
          </div>
          <div class="col-12">
            <ul class="actions">
              <li><input type="submit" value="Download" class="primary" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </div>
        </div>
      </form>

</div>
  </div>

</div>
</div>
</div>
';

    return $html;


  }



  public function createDownloadLink($fileHashKey)
  {
    $html = '<section id="WaitAnimation" class="main style1" >

  		<div class="alert alert-success" role="alert">Download and Convert Completed. File Ready to Download Your Computer...</div>
      <a href="download/'.$fileHashKey.'" class="button fit">Download !</a>

  </section>';
  return $html;
  }

  public function getSocialLinks()
  {
    $db = new BasicDB();
    $get_settings = $db->from('Settings')
        ->select('INSTAGRAMADRESS, TWITTERADRESS, FACEBOOKADRESS, MAILADRESS')
        ->where('ID', "1")
        ->first();

        return $get_settings;
  }



}



?>
