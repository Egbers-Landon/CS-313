const keys = document.querySelectorAll('.key');
keys.forEach(key => 
    {key.addEventListener('transitionend', removeClass)
    key.moveCount = 1;
    });
window.addEventListener('keydown' , playSound);

function playSound(e)
{
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
    if(!audio)
    {
        return;
    }
    key.classList.add('playing');
    audio.currentTime=0;
    audio.play();
    moveKey(key);
}

function removeClass(e)
{
    if(e.propertyName !== 'transform')
    {
        return;
    }
    this.classList.remove('playing');
    console.log (e.propertyName);
}

function moveKey(key)
{
    let movepx = "";
    if(key.moveCount < 10)
    {
        movepx = key.moveCount * 10 + 'px';
        key.style.transform = `translateY(${movepx})`;
        key.moveCount++;
    }
    else
    {
        key.moveCount = 0;
        movepx = '0px';
        key.style.transform = `translateY(${movepx})`;
        key.moveCount++;
    }
}
