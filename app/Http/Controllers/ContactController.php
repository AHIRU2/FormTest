<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts/index');
    }

    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);

        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function create(Request $request)
    {
        $contact = new Contact;
        $inputs = $request->all();
        $contact->fill($inputs)->save();
        return view('contacts/complete');
    }

    public function fix($inputs)
    {
        return view('contacts/fix', $inputs);
    }

    public function manager()
    {
        $inputs = Contact::paginate(10);
        return view('manager.manager', ['inputs' => $inputs]);
    }

    public function find(Request $request)
    {
        $item = Contact::where('fullname', 'LIKE', "%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('manager.manager', $param);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/manager');
    }

    public function reset()
    {
        return view('/manager', ['input' => '']);
    }
}
