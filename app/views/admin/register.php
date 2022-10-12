<div class="container">
    <div class="col6">
        <?= Flasher::flash(); ?>
    </div>
    <form action="<?= BASEURL; ?>/admin/tambah" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Password Verify</label>
            <input type="password2" class="form-control" id="exampleInputPassword2" name="password2" required>
        </div> -->
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>