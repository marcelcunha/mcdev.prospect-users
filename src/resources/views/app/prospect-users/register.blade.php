<div class="card">
    <div class="card-header">
        Registro de Usuário
    </div>
    <form action="{{route('prospect-user.create')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" required>
                @if ($errors->has('name'))
                <span>
                    @foreach ($errors->name as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control {{$errors->has('name')?'is-invalid':''}}" required>
                @if ($errors->has('email'))
                <span>
                    @foreach ($errors->email as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </span>
                @endif
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Salvar" class="btn btn-primary">
        </div>
    </form>
</div>