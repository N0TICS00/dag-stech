@include("partials.head")
<title>Login</title>
    <!--NAVBAR-->
<div class="login">
<section id="form" >
    @include("partials.flash")
    <h1>Login to our platform  </h1>
    <div class="form-div">
        <form action="/login" method="POST">
            @csrf
            <p>
            <label>
                <h5>Email</h5>
                <input type="email" name="email" class="form" required>
            </label>
            </p>
            <p>
            <label>
                <h5>Password</h5>
                <input type="password" name="password" class="form"required>
            </label>
            </p>
            <div class="buttons">
            <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</section>
</div>