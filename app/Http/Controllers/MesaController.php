<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return redirect(Route("mesas.index"));
    }
}
