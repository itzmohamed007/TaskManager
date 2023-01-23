// Search Part
var button = document.getElementById('search');
var target = document.getElementById('target');

// count part
var ToDoCount = document.getElementById('ToDoCount').innerText;
var DoingCount = document.getElementById('DoingCount').innerText;
var DoneCount = document.getElementById('DoneCount').innerText

// title part
var ToDoTitle = document.querySelectorAll('#ToDoTitle');
var DoingTitle = document.querySelectorAll('#DoingTitle');
var DoneTitle = document.querySelectorAll('#DoneTitle');

target.addEventListener('keyup', function(){
    if(target.value == ''){
        location.reload();
    }
    // checking data

    else {
        for(let i = 0; i < ToDoCount; i++){
            var ToDoParent = ToDoTitle[i].parentNode.parentNode;
            // upper casing title

            if(ToDoTitle[i].innerText.indexOf(target.value) != -1){
                ToDoParent.classList.remove("task");
                ToDoParent.classList.add("task-styled");
                
            } else if (ToDoTitle[i].innerText.indexOf(target.value) == -1) {
                // ToDoParent.classList.remove("task-styled");
                ToDoParent.classList.add("d-none");
            }
        } 

        for(let i = 0; i < DoingCount; i++){
            var DoingParent = DoingTitle[i].parentNode.parentNode;

            if(DoingTitle[i].innerText.indexOf(target.value) != -1){
                DoingParent.classList.remove("task");
                DoingParent.classList.add("task-styled");

            } else if (DoingTitle[i].innerText.indexOf(target.value) == -1) {
                // DoingParent.classList.remove("task-styled");
                DoingParent.classList.add("d-none");
            }
        }
        
        for(let i = 0; i < DoneCount; i++){
            var DoneParent = DoneTitle[i].parentNode.parentNode;
            
            if(DoneTitle[i].innerText.indexOf(target.value) != -1){
                DoneParent.classList.remove("task");
                DoneParent.classList.add("task-styled");

            } else if (DoneTitle[i].innerText.indexOf(target.value) == -1) {
                // DoneParent.classList.remove("task-styled");
                DoneParent.classList.add("d-none");
            }
        }
    }
})