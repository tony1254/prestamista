@foreach ($messages as $msg)

<script>
    $(function() {
    toastr.{{ $msg['type'] }} ('{{ $msg['message'] }}')
});
</script>


    <div class="alert alert-{{ $msg['type'] }}  wow bounce">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>
            <strong>{{ $msg['message'] }}</strong>
        </p>
        
        @if (!empty ($msg['details']))
            <p>{{ $msg['details'] }}</p>
        @endif
        
        {!! $msg['html'] !!}
        
        @if (!empty ($msg['items']))
            <ul>
              @foreach ($msg['items'] as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
        @endif
        
        @if ( ! empty ($msg['buttons']))
            <p>
                @foreach ($msg['buttons'] as $btn)
                    <a class="btn btn-{{ $btn['class'] }}" href="{{ $btn['url'] }}">{{ $btn['text'] }}</a>
                @endforeach
            </p>
        @endif
    </div>
@endforeach