@if(!empty($errors))
    <div class="container">
        <div class="row">
            <div class="errors col-5">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif
