// Search Part
var button = document.getElementById('search');
var target = document.getElementById('target');

var targetSmall;
var titleSmall;

// getting counts
var ToDoCount = document.getElementById('ToDoCount').innerText;
var DoingCount = document.getElementById('DoingCount').innerText;
var DoneCount = document.getElementById('DoneCount').innerText

// getting titles
var ToDoTitle = document.querySelectorAll('#ToDoTitle');
var DoingTitle = document.querySelectorAll('#DoingTitle');
var DoneTitle = document.querySelectorAll('#DoneTitle');

target.addEventListener('keyup', function(){
    targetSmall = target.value.toLowerCase();
    
    for(let i = 0; i < ToDoCount; i++){
        // making current title lower case
        titleSmall = ToDoTitle[i].innerText.toLowerCase();

        var ToDoParent = ToDoTitle[i].parentNode.parentNode;

        if(titleSmall.indexOf(targetSmall) != -1){
            ToDoParent.style.display = "block";
            
        } else if (titleSmall.indexOf(targetSmall) == -1) {
            ToDoParent.style.display = "none";
        }
    } 

    for(let i = 0; i < DoingCount; i++){
        // making current title lower case
        titleSmall = DoingTitle[i].innerText.toLowerCase();

        var DoingParent = DoingTitle[i].parentNode.parentNode;

        if(titleSmall.indexOf(targetSmall) != -1){
            DoingParent.style.display = "block";
        } else if (titleSmall.indexOf(targetSmall) == -1) {
            DoingParent.style.display = "none";
        }
    }
    
    for(let i = 0; i < DoneCount; i++){
        // making current title lower case
        titleSmall = DoneTitle[i].innerText.toLowerCase();

        var DoneParent = DoneTitle[i].parentNode.parentNode;
        
        if(titleSmall.indexOf(targetSmall) != -1){
            DoneParent.style.display = "block";

        } else if (titleSmall.indexOf(targetSmall) == -1) {
            DoneParent.style.display = "none";
        }
    }
})