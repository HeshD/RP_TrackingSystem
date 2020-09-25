

    $(document).ready(function(){
        
        $(".input").on("input", function(){
            var x = document.getElementById('weight').value;
            x = parseInt(x);
        
           
            if(Number.isNaN(x))x=0;

            var postage;
            var y=document.getElementById('package_type');
            var type=y.options[y.selectedIndex].value;


            var weightRange;
            var priceRange;

            if(type=='Letter'){

                if(x>1 && x<=500 ){
                    weightRange =[1,20,40,60,80,100,150,200,250,300,350,400,500]
                    priceRange = [35,45,55,65,75,85,95,100,125,150,200,275,300]

                    for(range in weightRange)
                    if (x>=weightRange[range])
                        postage=priceRange[range];

            document.getElementById('postage').value = postage; }
                else{alert('Letters Should Below 500grams');}
            } 
        
            else if(type=='Parcel'){
                if(x>1 && x<=5000 ){
                    weightRange =[1,250,500,1000,1500,2000,2500,3000,3500,4000,5000]
                    priceRange = [90,110,130,150,200,250,300,350,400,450,500]

                    for(range in weightRange)
                    if (x>=weightRange[range])
                        postage=priceRange[range];

            document.getElementById('postage').value = postage; }
                else{alert('Parcels Should Below 5000grams');}
            } 
            
            else if(type=='Speed Post'){
                if(x>1 && x<=2000 ){
                    weightRange =[1,20,40,60,80,100,150,200,250,300,350,400,500,1000,1500,2000]
                    priceRange = [50,60,70,80,100,120,150,125,150,200,275,300,350,400,500,650]

                    for(range in weightRange)
                    if (x>=weightRange[range])
                        postage=priceRange[range];

            document.getElementById('postage').value = postage; }
                else{alert('Speed Post Package Should Below 2000grams');}
                    document.getElementById('postage').value = postage;  }
                    
            else if(type=="")
            {alert('Please Select Package Type');}
        });
      });

    




