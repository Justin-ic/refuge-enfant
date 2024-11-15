<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite; // <-- ne pas oublier
use Carbon\Carbon;

use App\Models\utilisateur;
use App\Models\data;
use App\Models\payementNotif;
use App\Models\don;


class AuthController extends Controller
{
    // Les tableaux des providers autorisés
    protected $providers = [ "google", "github", "facebook" ];



    public function home () {
        // dd('stop');
        return view("home");
    }




    # La vue pour les liens vers les providers
    public function loginRegister () {
        
        // Je verifie s'il est connecté
        if(!isset($_COOKIE['user_email'])) {
            return view("socialite.login-register")->with('status',"Connectez vous d'abord s'il vous plait !");
        } else {
          return redirect()->route('dons');
        }
        
    } 




    # La vue pour les liens vers les providers
    public function  login(Request $request) {
        request()->validate([
            'UserEmail' => 'required',
            'Password' => 'required'
        ]);
        // Je verifie s'il est connecté
        $utilisateur = utilisateur::where('email',$request->UserEmail)
        ->where('password',$request->Password)->first();

        if ($utilisateur != NULL) {
            setcookie('user_email', $request->UserEmail, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
            setcookie('user_name', $utilisateur->nom, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
            return redirect()->route('dons');
        } else {
            return back()->with(["status" =>"Login ou mot de passe incorect !"]);
        }
        
        if(!isset($_COOKIE['user_email'])) {
            return view("socialite.login-register")->with('status',"Connectez vous d'abord s'il vous plait !");
        } else {
          return redirect()->route('dons');
        }
        
    } 




    # redirection vers le provider
    public function redirect (Request $request) {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }else{}
        abort(404); // Si le provider n'est pas autorisé
    }

    // Callback du provider
    public function callback (Request $request) {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

            // Les informations provenant du provider
            $data = Socialite::driver($request->provider)->user();

            // Les informations de l'utilisateur
            $user = $data->user;

            // voir les informations de l'utilisateur

            // Les informations de l'utilisateur
            $id = $data->getId();
            $name = $data->getName();
            // $nickname = $data->getNickname(); 
            $email = $data->getEmail();
            $avatar = $data->getAvatar();

        $utilisateur = utilisateur::where('email',$email)->first();
        if ($utilisateur == NULL) {
            utilisateur::create([
                'nom' => $name,
                'email' => $email,
                'avatar' => $avatar,
                'provider' => $provider,
                'social_id' => $id
            ]);
        }else{
            $utilisateur->update([
                'nom' => $name,
                'email' => $email,
                'avatar' => $avatar,
                'provider' => $provider,
                'social_id' => $id
            ]);
        }
        setcookie('user_email', $email, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
        setcookie('user_name', $name, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
        return redirect()->route('home');
        }

         abort(404);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'passe' => 'required',
            'passConfirme' => 'required'
        ]);

        if ($request->passe != $request->passConfirme) {
            return back()->with('status',"Les mots de passe ne sont pas conforme.");
        }

        $user = utilisateur::where('email',$request->email)->first();
        $user_name = $request->nom." ".$request->prenom;

        if ($user == NULL) {
            utilisateur::create([
                'nom' => $user_name,
                'email' => $request->email,
                'password' => $request->passe,
                'remember' => $request->remember,
                'provider' => "local"
            ]);
        }else{
            return back()->with('status',"Cet utilisateur existe déjà!");
        }

        setcookie('user_email', $request->email, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
        setcookie('user_name', $user_name, time() + (86400 * 30 * 3), "/"); // 86400 = 1 day
        return redirect()->route('home');
    }




    public function dons() {
        $email = "";
        $name = "";
        if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_name'])) {
            $email = $_COOKIE['user_email'];
            $name = $_COOKIE['user_name'];
        }else{ return redirect()->route('loginRegister');}

        $data = data::first();
        return view("dons", compact('email','name','data'));
    }





    public function on_success(Request $request) {
        //On affiche une page avec un bouton retour
        $status = "";
        $name = "Votre non";
        $montant = "";
        if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_name'])) {
            $name = strtoupper($_COOKIE['user_name']);
        }else{ return redirect()->route('loginRegister');}
        

        if ($request->num_command) { // Encours
            $montant = $request->amount;
            $status = "encours";

            $user = utilisateur::where("email",$_COOKIE['user_email'])->first();
            // Conversion en date formatée
            $date = Carbon::now()->format('Y-m-d H:i:s');
            $donInit = don::create([
                'transaction_id' => $request->num_command,
                'utilisateur_id' => $user->id,
                'montant' => $montant,
                'date' => $date,
                'status' => "INITIER"
            ]);

            if (!isset($_SESSION)) { session_start(); }
            
            $_SESSION['transaction_id'] = $request->num_command;
            $_SESSION['montant'] = $montant;
            $_SESSION['donInitId'] = $donInit->id;

        }
// Détruire la session
// session_destroy();
        return view("statut",compact('status','name','montant'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function savePayement(Request $request)
    {
// dd($request);
        payementNotif::create([
            'payment_mode' => $request->payment_mode,
            'paid_sum' => $request->paid_sum,
            'paid_amount' => $request->paid_amount,
            'payment_token' => $request->payment_token,
            'payment_status' => $request->payment_status,
            'command_number' => $request->command_number,
            'payment_validation_date' => $request->payment_validation_date
        ]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPayement()
    {

        if (!isset($_SESSION)) { session_start(); }
        if (isset($_SESSION['transaction_id'])) {
            // $payementStatu = payementNotif::where('command_number',"14526")->first();
            $payementStatu = payementNotif::where('command_number',$_SESSION['transaction_id'])->first();
            $status = "encours";

            if ($payementStatu != NULL) {
                $status = $payementStatu->payment_status;
                // Conversion du timestamp en objet Carbon
                $date = Carbon::createFromTimestamp($payementStatu->payment_validation_date/1000);

                // Formater la date dans le format souhaité
                $formattedDate = $date->format('Y-m-d H:i:s');

                $don = don::find($_SESSION['donInitId']);
                if ($status == 200) {

                    $don->update([
                        'date' => $formattedDate,
                        'status' => "SUCCESSFUL"
                    ]);
                    $_SESSION['transaction_id'] = "";

                } else {

                    $don->update([
                        'date' => $formattedDate,
                        'status' => "FAILURE"
                    ]);
                    $_SESSION['transaction_id'] = "";
                }
                
            } 
        } else { abort(404);}//  if (isset($_SESSION['transaction_id'])

        return response()->json(['status' => $status]); 
    }




    public function on_failed(Request $request) {
        $name = "Votre non";
        $montant = $request->amount;
        if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_name'])) {
            $name = strtoupper($_COOKIE['user_name']);
        }
        $status = "failed";
        return view("statut",compact('status','name','montant'));
    }




    public function apropos() {
        return view("apropos");
    }

    public function trainer() {
        return view("trainer");
    }  

    public function gallery() {
        return view("gallery");
    }
      
    public function contact() {
        return view("contact");
    }
      
    public function listDon() {
        $listDon = don::with('utilisateur')->orderBy('created_at', 'desc')->paginate(10);
        // dd($listDon);
        return view("listDon",compact('listDon'));
    }





}



