<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="createPoll">
        <div class="form-group">
            <label for="">Poll Title</label>
            <input wire:model="title" class="form-control" type="text" name="" id="">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror

        </div>

        <button class="btn btn-secondary" wire:click.prevent="addOption">Add option</button>
        <div class="mt-3"></div>
        @foreach ($options as $key => $option)
            <div class="form-group">
                <label for="">Option {{ $key + 1 }}</label>
                <div class="form-row">
                    <div class="col">
                        <input wire:model="options.{{ $key }}" value="{{ $option }}" class="form-control"
                            type="text" name="" id="">
                        @error("options.{$key}")
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-primary" wire:click="removeOption({{ $key }})"
                            type="button">Remove</button>
                    </div>
                </div>
            </div>
        @endforeach
        <button class="btn btn-primary">Create Poll</button>
    </form>
</div>
