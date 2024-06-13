<?php

namespace App\Livewire\User\Books;

use App\Models\Books;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $selectedBook;

    public function notify(string $title, string $message, string $type)
    {
        return $this->dispatch('notify', title: $title, message: $message, type: $type)->self();
    }

    public function downloadBook($bookId)
    {
        try {
            $book = Books::findOrfail($bookId);

            $file_path = \public_path(Storage::url($book->file));

            return response()->download($file_path);

            $this->notify('Berhasil', 'Berhasil mengunduh buku', 'success');
        } catch (Exception $e) {
            dd($e, $e->getMessage());
            $this->notify('Gagal', 'Gagal mengunduh buku', 'error');
        }
    }

    public function showPdf(int $bookId)
    {
        $this->selectedBook = Books::findOrFail($bookId);

        $this->dispatch('showPdf')->self();
    }

    public function render()
    {
        return view('livewire.user.books.index', [
            'books' => Books::query()->get()
        ]);
    }
}
