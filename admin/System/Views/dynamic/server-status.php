
            <div class="container-fluid dashboard-content">

                <div class="row">




							<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title ">Server Status</h3>
                                        <p class="card-text">
										<?php

										$data1 = "";
$data1 .= '';
$data1 .= "<table  class='table table-sm mb-0'>";
//GET SERVER LOADS
$loadresult = @exec('uptime');
preg_match("/averages?: ([0-9\.]+),[\s]+([0-9\.]+),[\s]+([0-9\.]+)/",$loadresult,$avgs);
//GET SERVER UPTIME
$uptime = explode(' up ', $loadresult);
$uptime = explode(',', $uptime[1]);
$uptime = $uptime[0].', '.$uptime[1];
//Get the disk space
function getSymbolByQuantity($bytes) {
	$symbol = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
	$exp = floor(log($bytes)/log(1024));

	return sprintf('%.2f<small>'.$symbol[$exp].'</small>', ($bytes/pow(1024, floor($exp))));
}
function percent_to_color($p){
	if($p < 30) return 'success';
	if($p < 45) return 'info';
	if($p < 60) return 'primary';
	if($p < 75) return 'warning';
	return 'danger';
}
function format_storage_info($disk_space, $disk_free, $disk_name){
	$str = "";
	$disk_free_precent = 100 - round($disk_free*1.0 / $disk_space*100, 2);
		$str .= '<div class="col p-0 d-inline-flex">';
		$str .= "<span class='mr-2'>" . badge($disk_name,'secondary') .' '. getSymbolByQuantity($disk_free) . '/'. getSymbolByQuantity($disk_space) ."</span>";
		$str .= '
<div class="progress flex-grow-1 align-self-center">
  <div class="progress-bar progress-bar-striped progress-bar-animated ';
		$str .= 'bg-' . percent_to_color($disk_free_precent) .'
  " role="progressbar" style="width: '.$disk_free_precent.'%;" aria-valuenow="'.$disk_free_precent.'" aria-valuemin="0" aria-valuemax="100">'.$disk_free_precent.'%</div>
</div>
</div>		';
	return $str;
}
function get_disk_free_status($disks){
	$str="";
	$max = 5;
	foreach($disks as $disk){
		if(strlen($disk["name"]) > $max)
			$max = strlen($disk["name"]);
	}

	foreach($disks as $disk){
		$disk_space = disk_total_space($disk["path"]);
		$disk_free = disk_free_space($disk["path"]);
		$str .= format_storage_info($disk_space, $disk_free, $disk['name']);
	}
	return $str;
}
function badge($str, $type){
	return "<span class='badge badge-" . $type . " ' >$str</span>";
}
//Get ram usage
$total_mem = preg_split('/ +/', @exec('grep MemTotal /proc/meminfo'));
$total_mem = $total_mem[1];
$free_mem = preg_split('/ +/', @exec('grep MemFree /proc/meminfo'));
$cache_mem = preg_split('/ +/', @exec('grep ^Cached /proc/meminfo'));
$free_mem = $free_mem[1] + $cache_mem[1];
//Get top mem usage
$tom_mem_arr = array();
$top_cpu_use = array();
//-- The number of processes to display in Top RAM user
$i = 5;
/* ps command:
-e to display process from all user
-k to specify sorting order: - is desc order follow by column name
-o to specify output format, it's a list of column name. = suppress the display of column name
head to get only the first few lines
*/
exec("ps -e k-rss -ocomm=,rss= | head -n $i", $tom_mem_arr, $status);
exec("ps -e k-pcpu -ocomm=,pcpu= | head -n $i", $top_cpu_use, $status);
$top_mem = implode(' KiB <br/>', $tom_mem_arr );
$top_mem = "<pre class='mb-0'><b>COMMAND\t\tResident memory</b><br/>" . $top_mem . " KiB</pre>";
$top_cpu = implode(' % <br/>', $top_cpu_use );
$top_cpu = "<pre class='mb-0'><b>COMMAND\t\tCPU utilization </b><br/>" . $top_cpu. " %</pre>";
$data1 .= "<tr><td>Average Load Status</td><td><h5>". badge($avgs[1],'secondary'). ' ' .badge($avgs[2], 'secondary') . ' ' . badge( $avgs[3], 'secondary') . " </h5></td>\n";
$data1 .= "<tr><td>Working time</td><td>$uptime                     </td></tr>";
$disks = array();
/*
* The disks array list all mountpoint you wan to check freespace
* Display name and path to the moutpoint have to be provide, you can
*/
$disks[] = array("name" => "local" , "path" => getcwd()) ;
// $disks[] = array("name" => "Your disk name" , "path" => '/mount/point/to/that/disk') ;
$data1 .= "<tr><td>Hdd       </td><td>" . get_disk_free_status($disks) . "</td></tr>";
$data1 .= "<tr><td>Ram       </td><td>". format_storage_info($total_mem *1024, $free_mem *1024, '') ."</td></tr>";
$data1 .= "<tr><td>Process using Ram   </td><td><small>$top_mem</small></td></tr>";
$data1 .= "<tr><td>Process using  CPU    </td><td><small>$top_cpu</small></td></tr>";
$data1 .= "</table>";
$data1 .= '';
echo $data1;



										?>


										</p>
                                    </div>
                                </div>
                            </div>

				<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title ">Services</h3>
                                        <p class="card-text">
										<?php

										$data = "";
$data .= '';

$timeout = "1";

$services = array();
$services[] = array("port" => "80",       "service" => "Apache",                  "ip" => "") ;
$services[] = array("port" => "21",       "service" => "FTP",                     "ip" => "") ;
$services[] = array("port" => "3306",     "service" => "MYSQL",                   "ip" => "") ;
$services[] = array("port" => "22",       "service" => "Open SSH",				"ip" => "") ;
$services[] = array("port" => "58846",     "service" => "Deluge",             	"ip" => "") ;
$services[] = array("port" => "8112",     "service" => "Deluge Web",             	"ip" => "") ;
$services[] = array("port" => "80",       "service" => "Internet Connection",     "ip" => "google.com") ;
$services[] = array("port" => "8083",     "service" => "Vesta panel",             	"ip" => "") ;
//begin table for status
$data .= "<small><table  class='table table-striped table-sm '><thead><tr><th>Services</th><th>Port</th><th>Status</th></tr></thead>";
foreach ($services  as $service) {
	if($service['ip']==""){
	   $service['ip'] = "localhost";
	}
	$fp = @fsockopen($service['ip'], $service['port'], $errno, $errstr, $timeout);
	if (!$fp) {
		$data .= "<tr ><td>" . $service['service'] . "</td><td>". $service['port']."</td><td class='table-danger'>Off </td></tr>";
	  //fclose($fp);
	} else {
		$data .= "<tr><td>" . $service['service'] . "</td><td>". $service['port']."</td><td class='table-success'>On</td></tr>";
		fclose($fp);
	}
}
//close table
$data .= "</table></small>";
$data .= '';
echo $data;



										?>
										</p>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
