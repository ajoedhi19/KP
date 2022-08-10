<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama Mitra" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="jenis-khs"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Jenis KHS</option>
                                    <option value="1">KHS</option>
                                    <option value="2">IOAN</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="no-khs"><i class="zmdi zmdi-collection-item-1"></i></label>
                                <input type="text" name="no-khs" id="no-khs" placeholder="No-KHS" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="date"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="date" id="date" placeholder="Tanggal Berakhir KHS" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="name-hr"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name-hr" id="name-hr" placeholder="Nama Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="No Hp Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Alamat Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="no-identitas"><i class="zmdi zmdi-collection-item-1"></i></label>
                                <input type="text" name="no-identitas" id="no-identitas" placeholder="No Identitas" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="foto-identitas"><i class="zmdi zmdi-image"></i></label>
                                <input type="file" name="foto-identitas" id="foto-identitas" placeholder="Foto Identitas" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>