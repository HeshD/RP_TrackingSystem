@extends('layouts.app')

@section('content')

<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">

          
           
              
          <font color= "red" size 30 ><B><h2>Courier Tracking</h2> <BR>  </font></B>
            <form>
                Tracking Number  
                 <input type="text" class="form-control" id="track_no" name="track_no" placeholder="Input Trackin No"> 
             </form>
             <BR>
                 <div class="container" >
                 <div class="text-center">
                 <button type="search" class="btn btn-primary">Search</button>
                 <button type="cancel" class="btn btn-primary"> Back </button>
                 </div>
                 </div>   


                     
                
                     
        </div>
      </div>
    </div>
  </section>




<BR>
    <BR>
        <BR>
        <BR>




@endsection