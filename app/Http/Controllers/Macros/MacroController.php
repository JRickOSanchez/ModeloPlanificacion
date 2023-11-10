<?php

namespace App\Http\Controllers\Macros;

use App\Http\Controllers\Controller;
use App\Http\Requests\Macros\StoreMacroRequest;
use App\Models\Macro;
use Illuminate\Http\RedirectResponse;

class MacroController extends Controller
{
    /**
     * @param StoreMacroRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreMacroRequest $request): RedirectResponse
    {
        Macro::create([...$request->validated(), 'user_id' => $request->user()->id]);
        return redirect('dashboard');
    }
}
