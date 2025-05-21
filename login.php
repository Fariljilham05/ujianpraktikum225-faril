
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
   <style>
      body {
          background: linear-gradient(to right,rgb(155, 242, 226),rgb(117, 137, 227));
          min-height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          font-family: 'Poppins', sans-serif;
      }

      .card {
          background-color: #ffffff;
          border: none;
          border-radius: 1.5rem;
          box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      }


      .text-link:hover {
          text-decoration: underline;
      }
    </style>
  <body>
    <div class="container mt-5">
       <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Login!</h3>
                  
                    <form action="login_proses.php" method="POST" class="mt-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    </form>
                  
                </p>
                </div>
            </div>
        </div>
     </div> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>