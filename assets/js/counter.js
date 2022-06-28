let valueDisplays = document.querySelectorAll(".num");
let interval =8000;

valueDisplays.forEach((valueDisplay)=>{
    let starValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute ("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function(){
        starValue += 1;
        valueDisplay.textContent = starValue;
        if(starValue == endValue){
            clearInterval(counter);
        }
    }, duration);
});
