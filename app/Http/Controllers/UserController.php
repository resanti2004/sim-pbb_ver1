<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users; // Add this line to import the Users model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        $data_users = User::orderBy('id', 'asc');
        $data_users = $data_users->paginate(25);

        $no = ($data_users->currentPage() - 1) * $data_users->perPage() + 1;
        return view('pengguna.pengguna', compact('data_users', 'no', 'fullname', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return (view('pengguna.add_pengguna', compact('fullname', 'username')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($user, $no)
    {
        $authenticatedUser = Auth::user();
        $fullname = $authenticatedUser->fullname;
        $username = $authenticatedUser->username;

        // Fetch all users ordered by ID
        $data_users = Users::where([
            'id' => $user,
            
        ])->first();



        // dd($data_users );
        // Pass the necessary data to the view
        return view('pengguna.detail_pengguna', compact('fullname', 'username', 'data_users', 'no'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
