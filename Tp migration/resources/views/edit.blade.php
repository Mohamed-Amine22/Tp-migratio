<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" card">
                    <div class="card-body">
                        <form method="post" action="{{Route('updait', $stager->id)}}">
                            @csrf
                            <fieldset >
                              
                              <div class="mb-3">
                                <label  class="form-label">Id</label>
                                <input type="text" value={{$stager->id}}  class="form-control" >
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" name="nom" value={{$stager->nom_complet}} class="form-control" >
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Genre</label>
                                <input type="text" name="genre" value={{$stager->genre}} class="form-control" >
                              </div>
                              
                            
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>