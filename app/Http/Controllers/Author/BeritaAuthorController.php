<?php

namespace App\Http\Controllers\Author;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Berita;


class BeritaAuthorController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	// public function index()
	// {
	// 	return view('author.dashboard');
	// }

	public function index()
	{
		$berita = DB::table('berita')->orderBy('tgl_upload', 'desc')->get();

		return view('author.listBerita')->with('berita', $berita->all());
	}

	public function add()
	{
		return view('author.tambahBerita');
	}

	public function add_berita(Request $r)
	{	
		
		if(isset($r->tgl_auto))
		{
			$date = date('Y-m-d');
		}else{
			$date = $r->tgl_upload;
		}

		$berita = array('judul_berita' 	=> $r->nama_berita, 
						'isi_berita' 	=> $r->isi_berita,
						'link'			=> string_linkMark(removePetik($r->nama_berita)),
						'tgl_upload' 	=> $date );
		// echo string_linkMark(removePetik($r->nama_berita));
	// print_r($berita);
		$berita_id = DB::table('berita')->insertGetId($berita, 'id_berita');

		if($r->hasFile('foto'))
        {
        	// echo "ada file";
              $image = $r->file('foto');
              $extendsion = $image->getClientOriginalExtension();
              $imageName = uniqid().'.'.$extendsion;
              $image->move('assets/img/berita/', $imageName);
              $imgUpload = 'assets/img/berita/'.$imageName;

              DB::table('berita')->where('id_berita', $berita_id)->update(['berita_img'=>$imgUpload]);
            
        }

        $beritaTerbaru = DB::table('berita')->where('id_berita', $berita_id)->get();

		return view('author.preview_berita')->with('berita', $beritaTerbaru->all());
	}

	public function editBerita($id)
	{

		$editBerita = DB::table('berita')->where('id_berita',$id)->get();

		// print_r($editBerita->all());

		return view('author.edit_berita')->with('berita', $editBerita->all());
	}

	public function saveEditBerita(Request $r)
	{	
		if(isset($r->tgl_auto))
		{
			$date = date('Y-m-d');
		}else{
			$date = $r->tgl_upload;
		}

		$berita = Berita::find($r->id_berita);

		$berita->judul_berita 	= $r->nama_berita;
		$berita->isi_berita 	= $r->isi_berita;
		$berita->tgl_upload 	= $date;

		if($r->hasFile('foto'))
        {	
        	unlink($berita->berita_img);
        	// echo "ada file";
              $image = $r->file('foto');
              $extendsion = $image->getClientOriginalExtension();
              $imageName = uniqid().'.'.$extendsion;
              $image->move('assets/img/berita/', $imageName);
              $imgUpload = 'assets/img/berita/'.$imageName;

              $berita->berita_img = $imgUpload;
        }

        $berita->save();
        return redirect('author/berita');

	}

	public function hapusBerita($id)
	{
		$berita = Berita::find($id);

		@unlink($berita->berita_img);
		$berita->delete();

		return redirect('author/berita');
	}

}