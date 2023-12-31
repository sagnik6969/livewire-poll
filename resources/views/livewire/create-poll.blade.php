<div>
    {{-- Success is as dangerous as failure. --}}
    <form action="">
        <div class="form-group">
            <label for="">Poll Title</label>
            <input wire:model="title" class="form-control" type="text" name="" id="">
        </div>

        <button class="btn btn-primary" wire:click.prevent="addOption">Add option</button>
        <div class="mt-3"></div>
        @foreach ($options as $key => $option)
            <div class="form-group">
                <label for="">Option {{ $key + 1 }}</label>
                <div class="form-row">
                    <div class="col">
                        <input wire:model="options.{{ $key }}" value="{{ $option }}" class="form-control"
                            type="text" name="" id="">
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-primary" wire:click="removeOption({{ $key }})"
                            type="button">Remove</button>
                    </div>
                </div>
            </div>
        @endforeach
    </form>
</div>
