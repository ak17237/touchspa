<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;

class UploadController extends Controller
{
    public function index(){
        return view('Gallery.upload',['user' => Auth::user()]);
    }
    public function store(Request $request){
        $user = User::where('email', Auth::user()->email)->first();
        $file = $request->file('file');
        $filename = $user->name . '-' . $user->id . '.png';

        if($file){
            Storage::disk('local')->put($filename,File::get($file));
            return redirect()->route('upload.main');
        }
        
        return redirect()->route('upload.main')->withErrors(Lang::get('messages.no_upload'));
    }
    public function getfile($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file,200);
    }
    public function deletefile(){
        $user = User::where('email', Auth::user()->email)->first();
        $filename = $user->name . '-' . $user->id . '.png';
        if (Storage::disk('local')->has($filename)){
        Storage::delete($filename);
        return redirect()->route('upload.main');
        }
        return redirect()->route('upload.main')->withErrors(Lang::get('messages.no_delete'));
    }
    }
