<div class="card">
    <div class="card-header">
        Registro de Usuário
    </div>

    <form action="{{route('prospect-user.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control
            @error('name') is-invalid @enderror" required value="{{old('name')}}">
                @error ('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required
                    value="{{old('email')}}">
                @error ('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Salvar" class="btn btn-primary">
        </div>
    </form>
</div>