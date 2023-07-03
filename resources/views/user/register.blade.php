<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/Login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>rigester</title>
</head>
    <body id="cont">
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">

                                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                        </div>

                                        <form action="{{url('user/insert')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <p>Please login to your account</p>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="email" name="name" class="form-control"
                                                    placeholder="Enter your name" />
                                                <label class="form-label" for="form2Example11" required>Full Name</label>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder=" email address" required/>
                                                <label class="form-label" for="form2Example11">email</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="password" id="email" name="pass" class="form-control"
                                                    placeholder=" Enter your password" />
                                                <label class="form-label" for="form2Example11" required>password</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="passowrd" name="cpass" class="form-control"
                                                    placeholder="Confirm your password" />
                                                <label class="form-label" for="passowrd" required> Confirm Password</label>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <select class="form-control" name="select" id="groub">
                                                    <option value="admin">admin</option>
                                                    <option value="student">student</option>
                                                </select>
                                                <label class="form-label" for="passowrd"> SELECT</label>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit"> Rigester Now</button>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <a href="login.php" class="btn btn-outline-danger">log in</a>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4"></h4>
                                        <p class="small mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
