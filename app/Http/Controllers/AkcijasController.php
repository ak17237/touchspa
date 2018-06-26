<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akcija;
use Mail;
use App\Mail\Mailing;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\izveidotAkcijasRequest;

class AkcijasController extends Controller
{
    public function izveidot(){
        return view('Pages.Akcijas.izveidot');
    }
public function ierakstīt(izveidotAkcijasRequest $request){
    
    
    
    Akcija::create($request->all()); 
      
//      $akcija = new Akcija();
//      $akcija->fill($request->all());
//      $akcija->save();
      Mail::send(new Mailing());
    return redirect()->route('akcija');

//    $akcija = new Akcija; 
//    $akcija->Nosaukums = $request->get('Nosaukums'); // Pieprasījuma dati ir vēl funkcijas all();only(['title']); except(['description']) un get(['title'])  title ir tas kā mēs nosaucām mūsu inputu.
//    $akcija->Apraksts = $request->get('Apraksts'); // $request pieņem vērtības kuras ierakstīja lietotājs un pielīdzina tās $akcijas kura savukārt padod tās datubāzei
//    
//    $akcija->save(); // saglabā tās datubāzē
//    
//    return redirect()->route('akcija'); // atgriež redirektu uz maršrutu kas saucās 'akcija' web.php failā
// Bet ja būtu daudz vairāk inputu tad ar roku ievadīt visus būtu problemātiski tapēc izveidojam masīvu fillable Akcijas modelī    
    
}
public function izmainīt($id){
    
    $myAkcija = Akcija::find($id);
    
    return view('Pages.Akcijas.izmainīt',['myAkcija' => $myAkcija]);
}
public function atjaunot(Request $request,$id){
    
    $this->validate($request, [
       'Nosaukums' => 'required',
        'Apraksts' => 'required'
    ]);
    
    $myAkcija = Akcija::find($id);
    
    $myAkcija->fill($request->all());
    $myAkcija->save();
    
    return redirect()->route('akcija');
}
public function skats($id){
    
    $myAkcija = Akcija::find($id);
    
    return view('Pages.Akcijas.skats',['akcija'=>$myAkcija]);
    
}
public function dzēst($id){
    
    Akcija::find($id)->delete();
    return redirect()->route('akcija');
    
}
}
