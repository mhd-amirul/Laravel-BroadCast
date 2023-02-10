<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>chat-app</title>

        <!-- style -->
        @include("v3.includes.style")

    </head>

    <body style="background-color: rgb(146, 146, 146)">

        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="{{ asset("assets/images/v3/bg_login.svg") }}" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form method="POST" action="/login">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="Email address"/>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn">sign in</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- script -->
        @include("v3.includes.script")

    </body>

</html>
