<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorereclammationRequest;
use App\Http\Requests\UpdatereclammationRequest;
use App\Models\reclammation;

class ReclammationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    protected function create(array $data)
    {
        return reclammation::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' =>$data['subject'],
            'message' =>$data['message']
           
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorereclammationRequest $request)
    {
        //
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'message' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field should only contain alphabetic characters and spaces.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email field should not exceed :max characters.',
            'subject.required' => 'The subject field is required.',
            'subject.regex' => 'The subject field should only contain alphabetic characters and spaces.',
            'message.required' => 'The message field is required.',
            'message.regex' => 'The message field should only contain alphabetic characters and spaces.',
        ]);

        // Enregistrer les données dans la base de données ou effectuer d'autres actions nécessaires
        // ...

        // Créer une nouvelle réclamation
        $reclammation = new Reclammation();
        $reclammation->name = $validatedData['name'];
        $reclammation->email = $validatedData['email'];
        $reclammation->subject = $validatedData['subject'];
        $reclammation->message = $validatedData['message'];
        // Enregistrer la réclamation dans la base de données
        $reclammation->save();

        // Rediriger l'utilisateur vers une page de succès ou afficher un message de succès
        // return redirect()->route('contact.submit')->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(reclammation $reclammation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reclammation $reclammation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereclammationRequest $request, reclammation $reclammation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reclammation $reclammation)
    {
        //
    }

    public function submitForm(Request $request)
    {
        
    }
}
