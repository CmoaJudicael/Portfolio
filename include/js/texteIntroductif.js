
cPos = 0;
txt = "Bienvenue, vous êtes sur le point de découvrir les passionnantes activités auquel j'ai participé.";
txtAfficher = "";

function setCharacter() 
{
    txtAfficher += txt[cPos];
    cPos ++;
    texteIntro = document.getElementById("texteIntroductif");
    texteIntro.innerHTML = txtAfficher;
    if(cPos < txt.length)
    {
        delayNextChar();
    }
}
function delayNextChar() 
{
    setTimeout(setCharacter,100);    
}


setTimeout(setCharacter,500);