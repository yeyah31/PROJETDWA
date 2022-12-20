<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Formulaire;
use App\Models\User;
use App\Mail\SendNewAdminMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
$envois=Formulaire::all();
  return view ('home',compact('envois'));

    }
    public function store(Request $request){
        $envois=Formulaire::all();
        $request->validate([
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'objet' => 'required',
            'nEntreprise'=>'required'
        ]
        , [

            'nom.required' => 'le nom est requis ',
            'prenom.required' => 'le prenom est requis ',
            'objet.required' => 'Formuler votre demande ',
            'nEntreprise.required' => 'le nom de l\'entreprise est requis',
        ]
    );
       $envois= Formulaire::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'objet' => request('objet'),
             'nEntreprise' => request('nEntreprise'),
            'user_id' => auth()->id()
        ]);

        $connexions=User::all();


        foreach($connexions as $connexion){
            $connexion->name='Admin User';

            Mail::to($connexion->email)->send(new SendNewAdminMail($connexion));

        }


        return redirect()->route('index.home',compact('connexions','envois'));

        session()->flash('success','Demande envoyer avec succes');
    }
    public function clients(){

            $client =Formulaire::all()->where('user_id',(Auth::user()->id));
            return view('forClient',compact('client'));



    }
    public function voir(){
        $connexions=Formulaire::all();
        return view('traiterDemande',compact('connexions'));
    }
    public function traiter(Request $request){

        $connexions=Formulaire::where('id',$request->id)->update(
 [
    'id'=>$request->id,
        'statue'=>$request->select,
        ]

    );
      return redirect()->route('voir.admin.home');
    }
    /*public function show(User $user){
        return view('home',[
            'users'=>$this->connexions
        ])
    }*/
    public function adminHome()
    {
        $connexions=Formulaire::all();
        return view('adminHome',compact('connexions'));
    }

    public function destroy(Formulaire $connexions){
        $connexions->deleteOrFail();
   return redirect()->route('admin.home');


}

public function contac(ContactRequest $request)
{
        $connexions=User::all();


        foreach($connexions as $connexion){
            $connexion->name='Admin User';

          //  Mail::to($connexion->email)->send(new SendNewAdminMail($connexion));


    Mail::to($connexion->email)
    ->send(new Contact($request->except('_token')));

        }

    return view('confirm');
}
    public function assistanciaHome()
    {
        return view('assistanciaHome');
    }

}
