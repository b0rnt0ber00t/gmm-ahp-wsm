<?php

namespace App\Http\Controllers;

use App\Repositories\{
    AhpRepository,
    GmmRepository,
    WsmRepository,
};
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        return view('hasil.index');
    }

    public function store(Request $request)
    {
        $name = $request->input('calculate');

        $status = false;
        $message = 'Tidak dapat menghitung GMM/AHP saat ini. Silakan coba lagi nanti';

        if ($name == 'gmm') {
            [$status, $message] = GmmRepository::Calculate();
        }

        if ($name == 'ahp') {
            [$status, $message] = AhpRepository::Calculate();
        }

        if ($name == 'wsm') {
            [$status, $message] = WsmRepository::Calculate();
        }

        return $status
            ? redirect()->route('Hasil::index', ['name' => $name])->with('success', $message)
            : redirect()->route('Hasil::index', ['name' => $name])->with('failed', $message);
    }
}
