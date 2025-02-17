<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      @media (max-width: 576px) {
        .fixed-width {
          width: 576px;
        }
      }

      /* Not me setting a max width because ga very long (vertically) if I don't haha */

    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-9 col-sm-9 col-md-10 col-lg-11 col-xl-12 fixed-width">
              <div class="card p-4 shadow">
                  <h3 class="text-center">Login</h3>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" />
                      <div id="passwordHelpBlock" class="form-text">
                          Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                      </div>
                  </div>
                  <button class="btn btn-primary w-100">Login</button>
              </div>
          </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
