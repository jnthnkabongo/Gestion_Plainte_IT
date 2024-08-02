@extends('Users.layouts.entete')
@section('content')
    <div>
        <img src="{{ asset('assets/img/112.jpg') }}" width="100%" height="10%" alt="">
    </div>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                Formulaire de soumission de plainte
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation mt-2" novalidate>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                    </div>
                    <div class="col-md-6 position-relative">
                    <label for="validationTooltip04" class="form-label">State</label>
                    <select class="form-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-tooltip">
                        Please select a valid state.
                    </div>
                    </div>
                    <div class="col-md-6 position-relative">
                    <label for="validationTooltip05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip05" required>
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                    </div>
                    <div class="col-12 justify-content-md-end">
                        <a class="btn btn-primary w-50" type="submit">Submit form</a>
                    </div>
                </form>
            </div>
            </form>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
@endsection
