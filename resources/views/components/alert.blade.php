<div>
    @if(session()->has('message'))
        <div class="tt-alert tt-alert-success">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
        <div class="tt-alert tt-alert-danger">{{session()->get('error')}}</div>
    @endif

        @if($errors->any())
            <div class="tt-alert tt-alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>