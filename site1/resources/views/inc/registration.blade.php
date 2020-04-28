<form role="form" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name='email' required>
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" id="password" placeholder="Пароль" name="password" required>
    </div>
    <div class="form-group">
        <label for="confirm_password">Повторіть пароль</label>
        <input type="password" class="form-control" id="confirm_password" placeholder="Повторіть пароль" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-default">Відправити</button>
    @include('layout.errors')
</form>
