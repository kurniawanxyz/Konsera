<div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">{{ $nomor + 1 }}. {{ $question->text }}</div>
                <div class="d-flex mt-3 flex-column">
                    @foreach ($opsi_answer as $i => $answer)
                        <div class="form-check">
                            <input @checked($i == 0) class="form-check-input" type="radio"
                                wire:model="jawaban_id" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                            <label class="form-check-label" for="answer{{ $answer->id }}">
                                {{ $answer->text }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <button wire:click="prevQuestion" class="btn btn-primary" type="submit">Prev</button>
                    @if ($nomor == $totalSoal - 1)
                        <button wire:confirm="Yakin ingin mengumpulkan pekerjaan sekarang?" wire:click="syncPengerjaan"
                            class="btn btn-success" type="submit">Submit Jawaban</button>
                    @else
                        <button wire:click="nextQuestion" class="btn btn-primary" type="submit">Next</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
