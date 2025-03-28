<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::first();
        
        // Verifica se um usuário foi encontrado
        if ($user) {
            return view('admin.users.index', compact('user'));
        } else {
            // Retorna uma mensagem caso nenhum usuário seja encontrado
            return 'Nenhum usuário encontrado.';
        }
    }
}