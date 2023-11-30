<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
     <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/logo.png')}}" />
</head>
<body>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
            <h4 class="card-title" style="color:blue">Créer Votre compte </h4>
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
             @endif

            <form class="forms-sample" method="post" action="{{ route('ajouter-user') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
              <div class="form-group">
                <label for="exampleInputName1">Non</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Non" name="nom" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Prénom</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Prénom" name="prenom" required>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Adresse Email </label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Adresse Email" name="email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Numéro de Téléphone </label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Numéro de téléphone" name="phone" required>
              </div>
            </div></div>
            <div class="col-md-6">
              <div class="form-group row">
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password" required>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Etat</label>
                  <select class="form-control" id="exampleSelectGender" name="etat" required>
                    <option value="docteur">Docteur</option>
                    <option value="assistant">Assistant</option>
                  </select>
                </div>



            <div>    <img src="{{asset('images/favicon.png')}}" alt=""></div>
            </div></div></div>
            <button type="submit" class="btn btn-primary me-2">Créer</button>
            </form>

          </div>
        </div>
  </div>
    </div>
</div>
</body>
<!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/file-upload.js')}}"></script>
  <script src="{{asset('js/typeahead.js')}}"></script>
  <script src="{{asset('js/select2.js')}}"></script>
  <!-- End custom js for this page-->
</html>
