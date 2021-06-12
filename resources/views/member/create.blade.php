<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link rel="stylesheet" href="{{asset('customStyle/css/signUpStyle.css')}}" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-sm navbar-dark m-12"
      style="background-color: #0d2a3f3b"
    ></nav>

    <div class="container m-6">
      <div class="card m-6 ">
        <h5 class="card-header">Formulaire d'inscription</h5>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <div class="card-text">
            <form action="#" method="post">
              <div class="row justify-content-center">
                <div class="col col-sm-4 m-2">
                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="form-control"
                      placeholder="nom d'utilisateur"
                      aria-describedby="helpId"
                    />
                  </div>
                </div>
                <div class="col col-sm-4 m-2">
                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input
                      type="password"
                      name="password"
                      id="password"
                      class="form-control"
                      placeholder="password"
                      aria-describedby="helpId"
                    />
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col col-sm-4 m-2  ">
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input
                      type="text"
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="utilisateur@exemple.domaine"
                      aria-describedby="helpId"
                    />
                  </div>
                </div>
                <div class="col col-sm-4 m-2  ">
                  <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input
                      type="text"
                      name="adresse"
                      id="adresse"
                      class="form-control"
                      placeholder="bizerte centre"
                      aria-describedby="helpId"
                    />
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col col-sm-4 m-2  ">
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input
                      type="number"
                      name="age"
                      id="age"
                      class="form-control"
                      placeholder="12"
                      aria-describedby="helpId"
                    />
                  </div>
                </div><div class="col col-sm-4 m-2  ">
                  <div class="form-group">
                    <label for="description">description</label>
                    <textarea  name="description"
                    id="description"
                    class="form-control"
                    placeholder=""
                    aria-describedby="helpId">

                    </textarea>
                     
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col col-sm-4 m-2 ">
                  <input name="" id="" class="btn btn-outline-warning btn-l btn-block" type="submit" value="s'isncrire">
              </div>
                 <div class="col col-sm-4 m-2 ">
                <input name="" id="" class="btn btn-outline-danger  btn-l btn-block" type="reset" value="annuler">
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- ---------------------------------------------- bootstrap js --------------------------- -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
