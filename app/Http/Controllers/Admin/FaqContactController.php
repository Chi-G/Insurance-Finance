<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqContact;
use Illuminate\Http\Request;

class FaqContactController extends Controller
{
    public function index()
    {
        $faqContacts = FaqContact::all();
        return view('admin.faqcontacts.index', compact('faqContacts'));
    }

    public function destroy($id)
    {
        $faqContact = FaqContact::findOrFail($id);
        $faqContact->delete();

        return redirect()->route('faqcontact.index')->with('status', 'Contact deleted successfully.');
    }
}
