<?php

namespace App\Livewire\Admin\Books;

use App\Models\Books;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $modal_title, $selectedBook, $judul, $file, $bookId;

    public function addBook()
    {
        $this->validate([
            'judul' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf'
        ]);

        $raw_name = time() . '_' . $this->file->getClientOriginalName();

        $name_file = $this->file->storeAs('buku', $raw_name, 'public');

        Books::create([
            'title' => $this->judul,
            'file' => $name_file
        ]);

        $this->resetModal();

        $this->notify('Berhasil', 'Berhasil menambah data', 'success');
    }

    public function updateBook()
    {
        $this->validate([
            'judul' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:pdf'
        ]);

        if ($this->file) {
            $raw_name = $this->file->getClientOriginalName();
            $name_file = $this->file->storeAs('buku', $raw_name, 'public');
        } else {
            $name_file = null;
        }

        $book = Books::findOrFail($this->bookId);

        $book->update([
            'title' => $this->judul ? $this->judul : $book->title,
            'file' => $name_file !== null ? $name_file : $book->file
        ]);

        $this->resetModal();

        $this->notify('Berhasil', 'Berhasil memperbarui data', 'success');
    }

    public function editBook(int $bookId)
    {
        $book = Books::findOrFail($bookId);

        $this->bookId = $bookId;
        $this->judul = $book->title;

        $this->modal_title = 'Edit Buku berjudul ' . $book->title;

        $this->openModal();
    }

    public function deleteBook($bookId)
    {
        $book = Books::findOrFail($bookId);
        $book->delete();

        Storage::disk('public')->delete($book->file);

        $this->notify('Berhasil', 'Berhasil menghapus data', 'success');
    }

    public function deleteConfirmation($bookId)
    {
        $this->dispatch('deleteConfirmation', title: 'Apakah anda yakin?', message: 'data tidak bisa di kembalikan', bookId: $bookId)->self();
    }

    public function openModal()
    {
        $this->dispatch('open-modal')->self();
    }

    public function showPdf(int $bookId)
    {
        $this->selectedBook = Books::findOrFail($bookId);

        $this->dispatch('showPdf')->self();
    }

    public function resetModal()
    {
        $this->reset('judul', 'file', 'bookId');

        $this->resetValidation();

        $this->dispatch('close-modal')->self();
    }

    public function addModal()
    {
        $this->modal_title = 'Tambah Buku';

        $this->openModal();
    }

    public function notify(string $title, string $message, string $type)
    {
        return $this->dispatch('notify', title: $title, message: $message, type: $type)->self();
    }

    public function render()
    {
        return view('livewire.admin.books.index', [
            'books' => Books::query()->get()
        ]);
    }
}
