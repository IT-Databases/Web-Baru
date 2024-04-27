<?php

namespace App\Observers;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaObserver
{
    /**
     * Handle the Berita "created" event.
     */
    public function created(Berita $berita): void
    {
        //
    }

    /**
     * Handle the Berita "updated" event.
     */
    public function updated(Berita $berita): void
    {
        if ($berita->isDirty('gambar')) {
            Storage::disk('public')->delete($berita->getOriginal('gambar'));
        }
    }

    /**
     * Handle the Berita "deleted" event.
     */
    public function deleted(Berita $berita): void
    {
        if (! is_null($berita->berita)) {
            Storage::disk('public')->delete($berita->gambar);
        }
    }

    /**
     * Handle the Berita "restored" event.
     */
    public function restored(Berita $berita): void
    {
        //
    }

    /**
     * Handle the Berita "force deleted" event.
     */
    public function forceDeleted(Berita $berita): void
    {
        //
    }
}
