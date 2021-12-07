function verif(){
    
    var title=document.getElementById('title');
    check=isUpperCase(title,0);
    if(check==false)
    {
        Alert("Le titre doit commencer par une majuscule");
        return check
    }  
}