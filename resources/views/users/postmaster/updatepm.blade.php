<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h1>Update Post Master</h1></div>
                <div class="form-group">
                <div class="card-body">

                    <form method="POST" action="/updatepostmaster/{{$pmdata->id}}">
                    {{ csrf_field() }}
                    

                    <div class="form-group">

                    <label>Name</label>  
                    <input id="name" name="name" type="text" placeholder=""  value="{{$pmdata->name}}"  class="form-control input-md">
                    </div>
                    
                    <div class="form-group">
                    <label>Phone</label>  
                    <input id="phone" name="phone" type="text" placeholder="" value="{{$pmdata->phone}}" class="form-control input-md">
                    </div>
                 
                    <!-- Select Basic -->
                    <div class="form-group">
                    <label>Branch</label>
                    <div class="col-md-6">
                        <select id="branch" name="branch" class="form-control">
                        <option value="Mt.Lavinia">Mt.Lavinia</option>
                        <option value="Dehiwala">Dehiwala</option>
                        </select>
                    </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                    <label>Address</label>                     
                        <textarea class="form-control" id="address"  name="address">{{$pmdata->address}}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$pmdata->email}}" placeholder="Enter email">
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                           

                        <button id="cancel" name="cancelbutton" class="btn btn-danger">cancel</button>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>   
                </div>
                </div>
                </form>

    
</body>
</html>

