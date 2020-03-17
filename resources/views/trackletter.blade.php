@extends('layouts.app')

@section('content')

<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

          
           
              
          <font color= "red" size 30 ><B><h2>Courier Tracking</h2> <BR>  </font></B>
            <form>
                Track Number  
                 <input type="text" class="form-control" id="track_no" name="track_no" placeholder="Input Track NO"> 
             </form>
             <BR>
                 <BR><button type="search" class="btn btn-primary">Search</button>   
                     
                
                     <a href="/track" class="nav-link">
          <left >  <button type="cancel" class="btn btn-primary"> Back </button> </left ></a> 
          <p class="lead" align="justify">
        </div>
      </div>
    </div>
  </section>




<BR>
    <BR>
        <BR>
        <BR>




@endsection