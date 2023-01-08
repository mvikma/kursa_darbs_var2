<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Vārds</label>
                  <input type="text" class="form-control" name="vards" placeholder="Ievadiet vārdu">
                </div>
                <div class="form-group">
                    <label for="name">Uzvārds</label>
                    <input type="text" class="form-control" name="uzvards" placeholder="Ievadiet uzvārdu">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="parole" placeholder="Ievadiet paroli">
                </div>
                <button type="submit" class="btn btn-primary" name="login_admin" value="Login">Pieslēgties</button>
              </form>
        </div>
    </div>
</div>