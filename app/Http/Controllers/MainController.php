<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Generator as Faker;
use App\Berita;
use DB;

class MainController extends Controller
{
	public function index()
	{	
		// $berita = DB::table('berita')->orderBy('tgl_upload', 'desc')->paginate(2);

		$berita = Berita::OrderBy('tgl_upload','desc')->paginate(3);

		$lastPost = Berita::OrderBy('tgl_upload','desc')->limit(4)->get();

		$news['berita'] 	= $berita;
		$news['lastpost'] 	= $lastPost;

		// echo "<pre>";
		// print_r($recent);
		// echo "</pre>";

	// $berita->links();
		return view('home')->with('berita', $news);
	}

	public function filosofi()
	{
		return view('filosofiLogo');
	}

	public function profil()
	{
		return view('profil');
	}
	public function adart()
	{
		return view('adart');
	}
	public function hubungi_kami()
	{
		return view('hubungi-kami');
	}
	public function galeri()
	{
		return view('adart');
	}
	public function post($p)
	{
		// echo $p;

		$berita = Berita::where('link',$p)->get();

		// print_r($berita->all());

		return view('postingan')->with('berita', $berita->toArray());
	}


}