
.0<?php
error_reporting(0);
require("randomua.class.php");

class autovisitor extends Random_UA {

	public function __construct($url) {
		$this->url = $url;
	}

	private function curl() {
		$ch = curl_init();
		CURL_SETOPT($ch, CURLOPT_URL, $this->url);
		CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array('Referer: '.$this->acakReferer(),
												   'User-Agent: '.$this->generate()));
		CURL_SETOPT($ch, CURLOPT_FOLLOWLOCATION, true);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYHOST, 0);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 0);
		CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
		CURL_SETOPT($ch, CURLOPT_USERAGENT, $this->generate());
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

	private function xflush() {
    	static $output_handler = null;
    	if ($output_handler === null) {
        	$output_handler = @ini_get('output_handler');
    	}
    	if ($output_handler == 'ob_gzhandler') {
        	return;
    	}
    	flush();
    	if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) {
       		@ob_flush();
    	} else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) {
       		@ob_end_flush();
        	@ob_start();
    	}
	}

	private function acakReferer() {
		$list = array();
		/* Asal traffic yang di submit */ 
		$list[] = "http://facebook.com";
		$list[] = "http://google.com.sg";
		$list[] = "http://twitter.com";
 		$list[] = "http://facebook.com";
        $list[] = "http://google.com.sg";
	    $list[] = "http://twitter.com";
	    $list[] = "http://google.co.id";
	    $list[] = "http://google.com.my";
	    $list[] = "http://google.jp";
	    $list[] = "http://google.us";
	    $list[] = "http://google.tl";
	    $list[] = "http://google.ac";
	    $list[] = "http://google.ad";
	    $list[] = "http://google.ae";
	    $list[] = "http://google.af";
	    $list[] = "http://google.ag";
	    $list[] = "http://google.ru";
	    $list[] = "http://google.by";
	    $list[] = "http://google.ca";
	    $list[] = "http://google.cn";
	    $list[] = "http://google.cl";
	    $list[] = "http://google.cm";
	    $list[] = "http://google.cv";
	    $list[] = "http://google.gg";
	    $list[] = "http://google.ge";
	    $list[] = "http://google.gr";
	    $list[] = "http://google.com.tw";
	    $list[] = "https://search.yahoo.com";
        $list[] = "http://www.beinyu.com";
        $list[] = "http://google.ac";
		$list[] = "http://google.ad";
		$list[] = "http://google.ae";
		$list[] = "http://google.af";
		$list[] = "http://google.ag";
		$list[] = "http://google.com.ai";
		$list[] = "http://google.am";
		$list[] = "http://google.it.ao";
		$list[] = "http://google.com.ar";
		$list[] = "http://google.as";
		$list[] = "http://google.at";
		$list[] = "http://google.com.au";
		$list[] = "http://google.az";
		$list[] = "http://google.ba";
		$list[] = "http://google.com.bd";
		$list[] = "http://google.be";
		$list[] = "http://google.bg";
		$list[] = "http://google.com.bh";
		$list[] = "http://google.bi";
		$list[] = "http://google.bj";
		$list[] = "http://google.com.bn";
		$list[] = "http://google.com.bo";
		$list[] = "http://google.com.br";
		$list[] = "http://google.bs";
		$list[] = "http://google.co.bw";
		$list[] = "http://google.com.by";
		$list[] = "http://google.com.bz";
		$list[] = "http://google.ca";
		$list[] = "http://google.cc";
		$list[] = "http://google.cd";
		$list[] = "http://google.cf";
		$list[] = "http://google.cg";
		$list[] = "http://google.ch";
		$list[] = "http://google.ci";
		$list[] = "http://google.co.ck";
		$list[] = "http://google.cl";
		$list[] = "http://google.cm";
		$list[] = "http://google.cn";
		$list[] = "http://google.com.co";
		$list[] = "http://google.co.cr";
		$list[] = "http://google.com.cu";
		$list[] = "http://google.cz";
		$list[] = "http://google.de";
		$list[] = "http://google.dj";
		$list[] = "http://google.dk";
		$list[] = "http://google.com.do";
		$list[] = "http://google.dz";
		$list[] = "http://google.ec";
		$list[] = "http://google.ee";
		$list[] = "http://google.com.eg";
		$list[] = "http://google.es";
		$list[] = "http://google.com.et";
		$list[] = "http://google.fi";
		$list[] = "http://google.com.fj";
		$list[] = "http://google.fm";
		$list[] = "http://google.fr";
		$list[] = "http://google.ga";
		$list[] = "http://google.ge";
		$list[] = "http://google.gg";
		$list[] = "http://google.com.gh";
		$list[] = "http://google.com.gi";
		$list[] = "http://google.gl";
		$list[] = "http://google.gm";
		$list[] = "http://google.gp";
		$list[] = "http://google.gr";
		$list[] = "http://google.com.gt";
		$list[] = "http://google.gy";
		$list[] = "http://google.com.hk";
		$list[] = "http://google.hn";
		$list[] = "http://google.hr";
		$list[] = "http://google.ht";
		$list[] = "http://google.hu";
		$list[] = "http://google.co.id";
		$list[] = "http://google.ie";
		$list[] = "http://google.co.il";
		$list[] = "http://google.im";
		$list[] = "http://google.co.in";
		$list[] = "http://google.is";
		$list[] = "http://google.it";
		$list[] = "http://google.je";
		$list[] = "http://google.com.jm";
		$list[] = "http://google.jo";
		$list[] = "http://google.co.jp";
		$list[] = "http://google.co.ke";
		$list[] = "http://google.com.kh";
		$list[] = "http://google.ki";
		$list[] = "http://google.kg";
		$list[] = "http://google.co.kr";
		$list[] = "http://google.com.kw";
		$list[] = "http://google.kz";
		$list[] = "http://google.la";
		$list[] = "http://google.com.lb";
		$list[] = "http://google.li";
		$list[] = "http://google.lk";
		$list[] = "http://google.co.ls";
		$list[] = "http://google.lt";
		$list[] = "http://google.lu";
		$list[] = "http://google.lv";
		$list[] = "http://google.com.ly";
		$list[] = "http://google.co.ma";
		$list[] = "http://google.md";
		$list[] = "http://google.me";
		$list[] = "http://google.mg";
		$list[] = "http://google.mk";
		$list[] = "http://google.mn";
		$list[] = "http://google.ms";
		$list[] = "http://google.com.mt";
		$list[] = "http://google.mu";
		$list[] = "http://google.mv";
		$list[] = "http://google.mw";
		$list[] = "http://google.com.mx";
		$list[] = "http://google.com.my";
		$list[] = "http://google.co.mz";
		$list[] = "http://google.com.na";
		$list[] = "http://google.com.nf";
		$list[] = "http://google.com.ng";
		$list[] = "http://google.com.ni";
		$list[] = "http://google.nl";
		$list[] = "http://google.no";
		$list[] = "http://google.com.np";
		$list[] = "http://google.nr";
		$list[] = "http://google.nu";
		$list[] = "http://google.co.nz";
		$list[] = "http://google.com.om";
		$list[] = "http://google.com.pa";
		$list[] = "http://google.com.pe";
		$list[] = "http://google.com.ph";
		$list[] = "http://google.com.pk";
		$list[] = "http://google.pl";
		$list[] = "http://google.com.pr";
		$list[] = "http://google.ps";
		$list[] = "http://google.pt";
		$list[] = "http://google.com.py";
		$list[] = "http://google.com.qa";
		$list[] = "http://google.ro";
		$list[] = "http://google.ru";
		$list[] = "http://google.rw";
		$list[] = "http://google.com.sa";
		$list[] = "http://google.com.sb";
		$list[] = "http://google.sc";
		$list[] = "http://google.se";
		$list[] = "http://google.com.sg";
		$list[] = "http://google.sh";
		$list[] = "http://google.si";
		$list[] = "http://google.sk";
		$list[] = "http://google.com.sl";
		$list[] = "http://google.sn";
		$list[] = "http://google.sm";
		$list[] = "http://google.st";
		$list[] = "http://google.com.sv";
		$list[] = "http://google.td";
		$list[] = "http://google.tg";
		$list[] = "http://google.co.th";
		$list[] = "http://google.com.tj";
		$list[] = "http://google.tk";
		$list[] = "http://google.tl";
		$list[] = "http://google.tm";
		$list[] = "http://google.to";
		$list[] = "http://google.tt";
		$list[] = "http://google.com.tw";
		$list[] = "http://google.co.tz";
		$list[] = "http://google.com.ua";
		$list[] = "http://google.co.ug";
		$list[] = "http://google.co.uk";
		$list[] = "http://google.com";
		$list[] = "http://google.com.uy";
		$list[] = "http://google.co.uz";
		$list[] = "http://google.com.vc";
		$list[] = "http://google.co.ve";
		$list[] = "http://google.vg";
		$list[] = "http://google.co.vi";
		$list[] = "http://google.com.vn";
		$list[] = "http://google.vu";
		$list[] = "http://google.ws";
		$list[] = "http://google.rs";
		$list[] = "http://google.co.za";
		$list[] = "http://google.co.zm";
		$list[] = "http://google.co.zw";
		$list[] = "http://google.com";


		$acak = array_rand($list,1);
		return $list[$acak];
	}

	public function jalankan() {
		$this->xflush();

		$this->curl();
		return $this->acakReferer(); 

		$this->xflush();
	}

}
?>