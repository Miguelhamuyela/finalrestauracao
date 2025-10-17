<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $response['contacts'] = Contact::orderByDesc('updated_at')->get();
        return view('admin.contacts.list.index', $response);
    }

    public function show($id)
    {
        $response['contact'] = Contact::findOrFail($id);
        return view('admin.contacts.details.index', $response);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts.list')->with('success', 'Contato removido com sucesso!');
    }
}
