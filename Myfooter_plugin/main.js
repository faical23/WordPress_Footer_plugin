let Myfooter__button= document.querySelector(".Myfooter__button")

Myfooter__button.addEventListener('click', () =>{
    event.preventDefault();
    let Email = document.querySelector(".Email").value
    if(Email != ""){
        const fetch__methode = async () =>{
            let data=JSON.stringify({"Email":Email})
            let params = {method:"POST",headers:{'Content-type': 'application/json'},body:data}
            let rep = await fetch("http://localhost/Shop_3/wp-content/plugins/Myfooter_plugin/subscri_Api.php", params);
            let reponse = await rep.json();
            Email = ""
            console.log(reponse)
            return reponse;
        }
        fetch__methode();
    }

})
