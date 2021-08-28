<div class="container">
    <div class="row justify-content-center align-items-center my-md-5">
        <form action="../back/connectToServer.php" method="post" class="row bg-light shadow-sm py-5">
            <div class="col-12 text-center my-3">
                <h2>Connection Info</h2>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="dbType" class="form-control" placeholder="DatabaseType: mysql" value="">
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="host" class="form-control" placeholder="Host: localhost">
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="dbName" class="form-control" placeholder="Database Name:">
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="userName" class="form-control" placeholder="User Name: root">
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="password" class="form-control" placeholder="Password:">
            </div>
            <div class="col-md-12 form-group text-center my-2">
                <button class="btn btn-outline-primary" name="connection">connection</button>
            </div>
        </form>
    </div>
</div>