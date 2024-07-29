<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion_Plainte_IT</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <linkx href="{{ asset('assets/css/style-login.css') }}" rel="stylesheet">
</head>
<body class="bg-image mt-5" style="background-image: url('{{ asset('assets/img/_K3A8237.jpg') }}'); background-size: cover; background-position: center; height: 500px; ">
    <div class="container mt-5">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-3 py-5">
              <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="user@gmail.com">
                    <label for="floatingInput">Adresse e-mail</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                  </div>
                  <div class="checkbox mb-3">
                    <label>
                        <a href="">Mot de passe oublier ?</a>
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
                  <hr class="my-4">
                  <small class="text-body-secondary">En vous connectant, vous avez acceptés les conditions d'utilisations.</small>
                </form>
              </div>
            </div>
          </div>

    </div>
</body>
</html>
