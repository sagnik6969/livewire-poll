<div>
    @foreach ($polls as $poll)
        <div>
            <h5 class="mt-4">{{ $poll->name }}</h5>
            @foreach ($poll->options as $option)
                <div class="d-flex align-items-center">
                    <p class="mt-0 mb-1 mr-2">{{ $option->name }}({{ $option->votes->count() }})</p>
                    <button class="btn badge badge-primary outline-none">
                        Vote
                    </button>
                </div>
            @endforeach
        </div>
    @endforeach
    {{ $polls }}
</div>
