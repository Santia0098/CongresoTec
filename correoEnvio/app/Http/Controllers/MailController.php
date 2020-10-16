<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    public function getMail()
    {
        $data = ['name' => 'Mauricio'];
        //Mail::to('tovar.sanchez.17266@itsmante.edu.mx')->send(new TestMail($data));
    }
}
