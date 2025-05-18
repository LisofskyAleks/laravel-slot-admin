<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSlotRequest;
use App\Models\Slot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class SlotController extends Controller
{
    public function index(): View
    {
        $slots = Slot::all();
        return view('home', compact('slots'));
    }

    public function store(StoreSlotRequest $request): RedirectResponse
    {
        Slot::create($request->validated());
        return redirect()->route('home')->with('success', 'Слот добавлен');
    }

    public function destroy(Slot $slot): JsonResponse
    {
        $slot->delete();

        return response()->json([
            'success' => true,
            'message' => 'Слот удалён',
        ]);
    }
}
