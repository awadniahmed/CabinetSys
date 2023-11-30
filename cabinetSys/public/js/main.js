        let patient=document.getElementById('patient');


        patient.addEventListener('',function(e){
            let nom=document.getElementById('nom');
            if(nom.value.trim()=="")
            {
                let MyError=document.getElementById('error');
                MyError.innerHTML="le champs Nom est Obligatoire";
                MyError.style.color='red';
                e.preventDefault();
            }

       });

