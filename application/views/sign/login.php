<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
    <title>sign in</title>
</head>
<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Log in</h2>
                            <form method="post" id="log-in">

                                <input type="text" name="sign-up" value="signup" style="display: none">
                                <div class="mb-5">
                                    <input class="form-control" type="email" id="email-2" value="admin@admin.admin" name="email" placeholder="Email...">
                                </div>
                                <div class="mb-5">
                                    <input class="form-control" type="password" id="name-2" value="admin" name="password" placeholder="password...">
                                </div>
                                <div>
                                    <button class="btn btn-dark d-block w-100 mb-3" type="submit" onclick="signin()">
                                        Signin
                                    </button>
                                </div>
                            </form>
                            <a href="<?=site_url()?>sign/signup" style="text-decoration: none">
                                <button class="btn btn-dark d-block w-100">
                                    Signup
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
<script type="text/javascript" src="<?=base_url()?>/assets/javascript/crud.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/javascript/bootstrap.js">

</script>
</body>
</html>
