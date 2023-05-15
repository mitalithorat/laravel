<?php

namespace App\Http\Controllers;

use App\Interfaces\AccountRepositoryInterface;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountPostRequest;


use Symfony\Component\HttpFoundation\RedirectResponse;

class AccountController extends Controller
{
    protected $accountRepository;
    public function __construct(AccountRepositoryInterface $accountRepository)

    {
        $this->accountRepository = $accountRepository;
    }
    public function index()
    {
        $accounts = $this->accountRepository->all();

        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountPostRequest $request): RedirectResponse
    {

        $id = $request->validated();
        $this->accountRepository->store($id);
        return redirect()->route('accounts.index')->with('status', 'user created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $account = Account::find($id);
        $phoneNumber ="2345677";
        // $phoneNumber = $account->contact;

        return view('accounts.show', compact('account','phoneNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $account = $this->accountRepository->find($id);
        return view('accounts.edit', ['account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->accountRepository->update($id, $request->all());
        return redirect()->route('accounts.index')->with('sucess', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->accountRepository->delete($id);

        return redirect()->route('accounts.index')->with('sucsess', 'deleted successfully');
    }
}
