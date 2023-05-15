<?php

namespace App\Http\Controllers;

use App\Interfaces\ContactRepositoryInterface;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactPostRequest;



class ContactController extends Controller
{
    protected $contactRepository;
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function index()
    {
        $contacts = $this->contactRepository->all();


        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactPostRequest $request): RedirectResponse
    {

        $id = $request->validated();

         $this->contactRepository->store($id);

          return redirect()->route('contacts.index')->with('status', 'user created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
            $contact = $this->contactRepository->find($id);

            return view('contacts.edit', ['contact' => $contact]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $this->contactRepository->update($id, $request->all());

        return redirect()->route('contacts.index')
            ->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->contactRepository->delete($id);



        return redirect()->route('contacts.index')
            ->with('success', ' deleted successfully');
    }
}
