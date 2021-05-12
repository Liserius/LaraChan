<div class="col-md-12 bg-light mb-2">
    <p class="mb-0">
        Anonymous: {{ $reply->created_at }}
    </p>
    
    @if($reply->hasImage())
    <p class="mb-0">
        <a href="{{ $reply->image }}">
            {{ $reply->filename() }}
        </a>
    </p>
    
    <div class="row">
        <div class="col-md-4">
            <a href="{{ $reply->image }}">
                <img src="{{ $reply->image }}" class="w-100 mb-2" />
            </a>
        </div>
        <div class="col-md-8">
            <p>{{ $reply->comment }}</p>
        </div>
    </div>
    @else
        <p class="mt-2">{{ $reply->comment }}</p>
    @endif
</div>