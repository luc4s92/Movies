{include file='templates/header.tpl'}

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2 class="title">Log In</h2>
            <form  action="verify" method="post">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit"  value="Login">
            </form>
        </div>
    </div>
    <h4 class="alert-danger">{$error}</h4>

</div>

{include file='templates/footer.tpl'}
