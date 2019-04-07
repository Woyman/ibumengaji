<?php
if (! function_exists('format_idr')) {
	
	    function format_idr($price)
	    {
	        return 'Rp. '.number_format($price, 0,".",".");
	    }
} 
if (! function_exists('removePetik')) 
{
	function removePetik($str)
	{
		$a = str_replace("-", "", $str);
		$tring = str_replace("'", "", $a);	
		return $tring;
	}	
}
if (! function_exists('string_linkMark')) 
{
	function string_linkMark($title)
	{
		$string = explode(" ", $title);
		return urlencode(implode("-", $string)); 
	}
}



if (! function_exists('changeToInt')) {
	
	    function changeToInt($price)
	    {
	        return str_replace('.', '', $price);
	    }
} 

if (! function_exists('takeOnlyDate')) {
	
	    function takeOnlyDate($datetime)
	    {
	    	$date = explode(' ', $datetime);
	        return $date[0];
	    }
}

if((! function_exists('dateID')))
{
		function dateID($tanggal){

			$tgl = date_create($tanggal);

			$hari = dayID(date_format($tgl, 'N'));

			$bulan = monthID(date_format($tgl, 'n'));

			return $hari.', '.date_format($tgl, 'd').' '.$bulan." ".date_format($tgl, 'Y');

		}
}
if((! function_exists('limitWords200')))
{
	function limitWords200($text)
	{
		$varText =  substr($text,0, 100);

		return $varText;
	}
}

if((! function_exists('limitWords500')))
{
	function limitWords500($text)
	{
		$varText =  substr($text,0, 500);

		return $varText;
	}
}



if((! function_exists('dayID')))
{
		function dayID($hari){

			switch ($hari) {
				case '1':
					$nmHari = 'Senin';
					break;
				case '2': 
					$nmHari = 'Selasa';
					break;
				case '3': 
					$nmHari = 'Rabu';
					break;
				case '4': 
					$nmHari = 'Kamis';
					break;
				case '5': 
					$nmHari = 'Jumat';
					break;
				case '6': 
					$nmHari = 'Sabtu';
					break;
				case '7': 
					$nmHari = 'Minggu';
					break;
				default:
					$nmHari = '';
					break;
			}

			return $nmHari;

		}

}

if((! function_exists('monthID')))
{
		function monthID($bulan){

		switch ($bulan) {
			case '1':
				$nmHari = 'Januari';
				break;
			case '2': 
				$nmHari = 'Februari';
				break;
			case '3': 
				$nmHari = 'Maret';
				break;
			case '4': 
				$nmHari = 'April';
				break;
			case '5': 
				$nmHari = 'Mei';
				break;
			case '6': 
				$nmHari = 'Juni';
				break;
			case '7': 
				$nmHari = 'Juli';
				break;
			case '8': 
				$nmHari = 'Agustus';
				break;
			case '9': 
				$nmHari = 'September';
				break;
			case '10': 
				$nmHari = 'Oktober';
				break;
			case '11': 
				$nmHari = 'November';
				break;
			case '12': 
				$nmHari = 'Desember';
				break;
			default:
				$nmHari = '';
				break;
		}

		return $nmHari;

}

}



