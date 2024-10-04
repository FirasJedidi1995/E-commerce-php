
function verif(){
    
    var nom=document.f.nom.value;
    if(nom.length==0){
        document.getElementById("snom").innerHTML="remplir votre nom";
        document.getElementById("snom").style.color="red";
        document.getElementById("nom").style.border="solid 2px red";
        

    }else{
        document.getElementById("snom").innerHTML="";
        document.getElementById("nom").style.border="solid 2px green";

    }
    var prenom=document.f.prenom.value;
    if(prenom.length==0){
        document.getElementById("spnom").innerHTML="remplir votre prenom";
        document.getElementById("spnom").style.color="red";
        document.getElementById("pnom").style.border="solid 2px red";
        

    }else{
        document.getElementById("spnom").innerHTML="";
        document.getElementById("pnom").style.border="solid 2px green";

    }
    var email=document.f.email.value;
    if(email.length==0){
        document.getElementById("mail").innerHTML="remplir votre email";
        document.getElementById("mail").style.color="red";
        document.getElementById("email").style.border="solid 2px red";
        

    }else{
        document.getElementById("mail").innerHTML="";
        document.getElementById("email").style.border="solid 2px green";

    }
    var mdp=document.f.mp.value;
    if(mdp.length==0){
        document.getElementById("mdp").innerHTML="remplir votre mot de passe";
        document.getElementById("mdp").style.color="red";
        document.getElementById("mp").style.border="solid 2px red";
        

    }else{
        document.getElementById("mdp").innerHTML="";
        document.getElementById("mp").style.border="solid 2px green";

    }
    
    
var mdp=document.f.mp.value;
if(!(/[A-Z]+/.test(mdp)==false || /[a-z]+/.test(mdp)==false || /[0-9]+/.test(mdp)==false || mdp.length<8)) {
    document.getElementById("mdp").innerHTML="mot de passe valide";
    document.getElementById("mdp").style.color="green";
    document.getElementById("mp").style.border="solid 2px green";

}else{
    document.getElementById("mdp").innerHTML="mot de passe invalide";
    document.getElementById("mdp").style.color="red";
    document.getElementById("mp").style.border="solid 2px red";

}




}