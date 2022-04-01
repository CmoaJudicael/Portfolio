var bulle = document.getElementsByClassName('bulle');
var dir = document.getElementsByClassName('touche-dir');
var bullePos = [];
var turn = false;

var info_bulle = 
[
    
    
    {'left':'10%','top':'15%','width':((document.body.offsetWidth*25)/100)+'px','height':((document.body.offsetWidth*15)/100)+'px'},
    {'left':'70%','top':'15%','width':((document.body.offsetWidth*25)/100)+'px','height':((document.body.offsetWidth*15)/100)+'px'},
    {'left':'33%','top':'50%','width':((document.body.offsetWidth*40)/100)+'px','height':((document.body.offsetWidth*20)/100)+'px'}
    
];
for (let index = 0; index < dir.length; index++) {
    const element = dir[index];
    element.style.left = (10+(index*75))+'%';
    element.style.top = '80%';   
}

for (let index = 0; index < bulle.length; index++)
{
    const element = bulle[index];
    element.setAttribute('name',index);
    element.style.transition = 'all 1s linear 0s';
}





function changePos(sens)
{
    bullePos=[];
    if(sens=='left')
    {
        bullePos.push(bulle[2]);
        bullePos.push(bulle[0]);
        bullePos.push(bulle[1]);
    }
    else
    {
        bullePos.push(bulle[1]);
        bullePos.push(bulle[2]);
        bullePos.push(bulle[0]);
    }
    bulle = bullePos;

    let pos = 2;
    for (let index = 0; index < bulle.length; index++)
    {
        const element = bulle[index];

        setPos(element, pos);

        pos--;
    }
    setTimeout(setTurnValue,1200);


}



function initPos(_index)
{
    let pos = _index-1;
    for (let index = 0; index < _index; index++)
    {
        const element = bulle[index];

        if(index<_index)
        {
            setPos(element, pos);
        }

        pos--;
    }
    if(_index<bulle.length)
    {
        _index++;
        setTimeout(initPos, 900, _index);
    }
    else
    {
        setTimeout(setTurnValue,1200);
    }
}
function setPos(element, index)
{
    element.style.left = info_bulle[index]['left'];
    element.style.top = info_bulle[index]['top']; 
    element.style.width = info_bulle[index]['width']; 
    element.style.height = info_bulle[index]['height']; 
}
function setTurnValue()
{
    if(turn)
    {
        turn=false;
        console.log(turn);
    }
    else
    {
        turn=true;
    }
}
function onTurn(sens)
{
    if (turn) 
    {
        setTurnValue();
        changePos(sens);

    }
}
initPos(1); 