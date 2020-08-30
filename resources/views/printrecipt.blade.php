@extends('layouts.app')

@section('content')

=
    <div class="container justify-content-center">

    <div class="row content-center">

    <div class="col-md-6">
    
       <label for=""><strong>Sender Name : </strong></label> <br>
        &nbsp; &nbsp; <label for="sname">{{ $letter->sname }}</label> <br>
       <label for=""><strong>Sender Address : </strong></label><br>
        &nbsp; &nbsp; <label for="saddress">{{ $letter->saddress }}</label> </div>
       <div class="col-md-6">
       <label for=""><strong>Reciever Name : </strong></label> <br>
        &nbsp; &nbsp;<label for="rname">{{ $letter->rname }}</label> <br>
       <label for=""><strong>Reciever Address : </strong></label><br>
        &nbsp; &nbsp;<label for="raddress">{{ $letter->raddress }}</label> </div>
        <br>
       <div class="col-md-6">
       <label for=""><strong>Weight : </strong></label> 
        &nbsp; &nbsp;<label for="weight">{{ $letter->weight }}g</label></div>
        <div class="col-md-6">
        <?php echo DNS1D::getBarcodeHTML('4445645656', 'C39'); ?> <br>
        
        </div>
     
    </div>
    </div>
       
    </div>


@endsection