<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WekselMail;
use App\Models\Atuty;
use App\Models\ONas;
use App\Models\Wspolpraca;
use App\Models\Kontakt;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atuty = Atuty::all();
        $onas = ONas::latest()->first();
        $wspolpraca = Wspolpraca::latest()->first();
        $kontakt = Kontakt::all();
        return view('glowna.index', compact('atuty', 'onas', 'wspolpraca', 'kontakt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('glowna.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'name'=>'required|min:3|max:30',
            'surname'=>'required|min:3|max:30',
            'email'=>'required|email',
            'city'=>'required|min:3|max:30',
            'zip-code'=>'required|max:6',
            'street'=>'required|min:3|max:50',
            'home-number'=>'required|integer'
        ], [
            'name.required'=>'Proszę podać imię.',
            'name.min'=>'Imię nie może być mniejsze niż 3 znaki.',
            'name.max'=>'Imię nie może przekraczać 30 znaków.',
            'surname.required'=>'Proszę podać nazwisko.',
            'surname.min'=>'Nazwisko nie może być mniejsze niż 3 znaki.',
            'surname.max'=>'Nazwisko nie może przekraczać 30 znaków.',
            'email.required'=>'Proszę podać adres e-mail.',
            'email.email'=>'Proszę podać prawidłowy adres e-mail.',
            'city.required'=>'Proszę podać nazwę miejscowości.',
            'city.min'=>'Nazwa miejscowości nie może być mniejsze niż 3 znaki.',
            'city.max'=>'Nazwa miejscowości nie może przekraczać 30 znaków.',
            'zip-code.required'=>'Proszę podać kod pocztowy.',
            'zip-code.max'=>'Kod pocztowy nie może przekraczać 5 liczb.',
            'street.required'=>'Proszę podać nazwę ulicy.',
            'street.min'=>'Nazwa ulicy nie może być mniejsza niż 3 znaki.',
            'street.max'=>'Nazwa ulicy nie może przekraczać 50 znaków.',
            'home-number.required'=>'Proszę podać numer domu/mieszkania.',
            'home-number.integer'=>'Podano nieprawidłowy numer domu/mieszkania.'
        ]);

        try {
            $data = [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'city' => $request->city,
                'zip_code' => $request->get('zip-code'),
                'street' => $request->street,
                'home_number' => $request->get('home-number'),
                'credits' => $request->get('credit-text-2'),
                'rates'=> $request->get('rate-text-2')
            ];

            Mail::to("kontakt@naweksel.pl")->send(new WekselMail($data));

            return redirect()->back()->with('success', 'Wiadomość pomyślnie wysłana!');
        } catch (\Throwable $exception) {
            return redirect()->back()->with('error-occur', 'Wystąpił problem z wysłaniem wiadomości e-mail!');
        }

        return dd($request->all());

        //return redirect()->back();
    }
}
