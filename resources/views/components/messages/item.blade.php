<div class="row wall-message">
    <div class="col-md-1 col-xs-2">
        <img src="{{ Gravatar::get($message->author->email) }}" alt="" class="img-circle user-avatar" />
    </div>
    <div class="col-md-11 col-xs-10">
        <p>
            <strong>{{ $message->author->name }}:</strong>
        </p>
        <blockquote>
            {{ $message->text }}
        </blockquote>
        @auth
            <div class="btn-group mb-20">
                @if($message->author->id === Auth::id() || Auth::user()->is_admin)
                    <form action="{{ route('messages.delete', $message->id) }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" title="delete">
                            Удалить
                        </button>
                    </form>
                @endif
            </div>
        @endauth
    </div>
</div>


