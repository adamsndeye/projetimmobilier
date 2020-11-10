<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Contact;


class ContactController extends Controller
{
    


	

     public function index(Request $request)
    {
        $contacts = Contact::orderBy('id','DESC')->paginate(5);

        return view('contacts.index')
            ->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new Categorie.
     *
     * @return Response
     */
    public function create()
    {
        return view('contacts.create');
    }

   
      public function store()
    {
       $input= $request->all();
   
     $contact=Contact::create($input);

        return redirect()->back();
    }
     

    /**
     * Store a newly created Categorie in storage.
     *
     * @param CreateCategorieRequest $request
     *
     * @return Response
     */
  
       
    public function destroy($id,Request $request)
    {
     $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('categories.index');
    }




}
