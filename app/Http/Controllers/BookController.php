<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=book::all();
        return view('bookList.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required'
        ]);
        book::create($validated);
        return redirect()->route('book.index')->with('success', 'Data berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=book::all();
        $bookDetail=book::findOrFail($id);
        return view('bookList.index', compact('book', 'bookDetail'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request -> validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required'
        ]);
        book::where('id', $id)->update($validated);
        return redirect()->route('book.index')->with('success', 'Data berhasil di perbaharui');
        
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bookDetail=book::findOrFail($id);
        $bookDetail->delete();
        return redirect()->route('book.index')->with('success', 'Data berhasil di hapus');
    }
}
