<?
// Set the environment
function setenv(){
	// Get environment
	if((strlen(getenv("SERVER_SOFTWARE")))!="0"){
		$server=getenv("SERVER_SOFTWARE");
	} else {
		$server=$_SERVER['SERVER_SOFTWARE'];
	}

	if((strlen(getenv("SERVER_NAME")))!="0"){
		$servername=getenv("SERVER_NAME");
	} else {
		$servername=$_SERVER['SERVER_NAME'];
	}

	// Get IPv6 environment
	if((strlen(getenv("REMOTE_ADDR")))!="0"){
		$ip6=getenv("REMOTE_ADDR");
	} else {
		$ip6=$_SERVER['REMOTE_ADDR'];
	}

	if(preg_match("/^::ffff:/",$ip6,$blah)){
		$ip6 =substr($ip6,7);
	}

	if(preg_match("/:/",$ip6,$blah)){
		$ip6_mode=1;
	} else {
		$ip6_mode=0;
	}
}

// Set site language
function setlang(){
	// Get the language from browser and from querystring
	$langAuto=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	$langGet=trim(strip_tags(addslashes($_GET['lang'])));

	if(!$langGet)
		$langGet=$langAuto;

	if(!$langAuto)
		$langAuto="en";

	// Set the language
	$lang=$langAuto;
	if($langAuto!=$langGet)
		$lang=$langGet;

	return $lang;
}

// Compare versions
function checkVersion($version,$min,$max){
	$version=explode(".",$version);
	$min=explode(".",$min);
	$max=explode(".",$max);

	// Kernel-like version control
	$versionSelected=intval($version[0])<<8+intval($version[1])<<4+intval($version[2]);
	$minVersion=intval($min[0])<<8+intval($min[1])<<4+intval($min[2]);
	$maxVersion=intval($max[0])<<8+intval($max[1])<<4+intval($max[2]);

	return (($versionSelected>=$minVersion)&&($versionSelected<=$maxVersion)) ? 1 : 0;
}

// News
/*
news file name:
	yyyy.mm.dd.hh.mm.idx.story

news directory
	news
	latest: contains the latest 10 news
		yyyy.mm: contains the news from yyyy.mm
		yyyy.mm
		yyyy.mm
		....

news format:
	@@<section>:
	<section data>
	@@<section>:
	<section data> ...
		
	for example:

	@@title:
	Title string
	@@short:
	Short story
	@@body:
	Long story
	@@author:
	author name <mail address>
	e.g.: Joe Smith &lt;joesmith@example.com&gt;

	text
*/

function news_get_month_name($n){
	if($n <= 1)return "Jan";
	if($n <= 2)return "Feb";
	if($n <= 3)return "Mar";
	if($n <= 4)return "Apr";
	if($n <= 5)return "May";
	if($n <= 6)return "Jun";
	if($n <= 7)return "Jul";
	if($n <= 8)return "Aug";
	if($n <= 9)return "Sep";
	if($n <= 10)return "Oct";
	if($n <= 11)return "Nov";
	if($n <= 12)return "Dec";
	return "???";
}

function news_get_dir_description($dirname){
	list($year,$month) = split('\.',$dirname);
	return news_get_month_name($month)." ".$year;
}

// gets a filename only and returns
// a hash with year->yyyy,month->mm,day->dd,hour->hh...
function news_split_filename($filename,&$data){
	list($year,$month,$day,$hour,$minute,$second,$index,$story) = split('\.',$filename);
	$data['filename'] = $filename;
	$data['year'] = $year;
	$data['month'] = $month;
	$data['monthname'] = news_get_month_name($month);
	$data['day'] = $day;
	$data['hour'] = $hour;
	$data['minute'] = $minute;
	$data['second'] = $second;
	$data['index'] = $index;
}

// returns false if the file is unreadable
function news_read_entry($filepath,&$data){
	$f = fopen($filepath,"r");
	if(!$f)return false;
	$d = fread($f,16000);
	fclose($f);
	$lines = split("\n",$d);
	$cnt = count($lines);
	$i = 0;
	$section = "unknown";
	$d = "";
	$data['filepath'] = $filepath;
	while($i < $cnt){
		if(preg_match("/^\\@\\@[A-Za-z]*:/",$lines[$i])){
			$data[$section] = $d;
			$section = substr($lines[$i],2,strlen($lines[$i]) - 3);
			$d = "";
		} else {
			$d = $d."\n".$lines[$i];
		}
		$i++;
	}
	$data[$section] = $d;
	news_split_filename(basename($filepath),$data);
	return true;
}

// returns an array of news file names (sorted by date)
function news_scan_dir($newsdir,&$arry){
	$d = opendir($newsdir);
	if(!$d)return false;
	$i = 0;
	while(($file = readdir($d)) !== false){
		if(preg_match("/[0-9]+\\.[0-9a-zA-Z\\.]+/",$file)){
			$arry[$i] = $newsdir."/".$file;
			$i++;
		}
	}
	closedir($d);
	return rsort($arry);
}
?>