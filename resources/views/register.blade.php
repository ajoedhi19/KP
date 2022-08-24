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
                        <form action="/register" method="POST" class="register-form" id="register-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama_mitra"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_mitra" id="nama_mitra" placeholder="Nama Mitra" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="Jenis_KHS"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Jenis_KHS" id="Jenis_KHS" required>
                                    <option value="KHS">KHS</option>
                                    <option value="IOAN">IOAN</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="no-khs"><i class="zmdi zmdi-collection-item-1"></i></label>
                                <input type="text" name="Nomor_KHS" id="Nomor_KHS" placeholder="No-KHS" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="date"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="Tanggal_Berakhir_KHS" id="Tanggal_Berakhir_KHS" placeholder="Tanggal Berakhir KHS" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="name-hr"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Nama_Penanggung_Jawab" id="Nama_Penanggung_Jawab" placeholder="Nama Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="No_HP" id="No_HP" placeholder="No Hp Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="Alamat_Penanggung_Jawab" id="Alamat_Penanggung_Jawab" placeholder="Alamat Penanggung Jawab" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="no-identitas"><i class="zmdi zmdi-collection-item-1"></i></label>
                                <input type="text" name="No_Identitas" id="No_Identitas" placeholder="No Identitas" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="foto-identitas"><i class="zmdi zmdi-image"></i></label>
                                <input type="file" name="Foto_Identitas" id="Foto_Identitas" placeholder="Foto Identitas" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="signup" id="signup" class="form-submit" >Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
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