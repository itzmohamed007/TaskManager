// adding multiple tasks part
var area = document.getElementById('info-inputs');
var number = document.getElementById('number');
var count;

number.addEventListener('input', function(){
    if(number.value == ""){
        area.innerHTML = "";
    } else {
        
        area.innerHTML = "";
        for(let i = 0; i < number.value; i++){
            area.innerHTML += 
            `
            <h4 class="text-white">Task n°: ${i + 1}</h4>
            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control rounded-4" type="text" name="title${i}" placeholder="titre"/>
                <label for="name">titre</label>
            </div>
            <!-- description input-->
            <div class="form-floating mb-3">
                <textarea class="form-control rounded-4" placeholder="description" name="description${i}"></textarea>
                <label for="floatingTextarea">description</label>
            </div>
            <!-- DeadLine input-->
            <div class="form-floating mb-3">
                <input class="form-control rounded-4" type="date" name="deadLine${i}" placeholder="DeadLine"/>
                <label for="phone">Dead line</label>
            </div>
            <hr class="divider-light w-100 mb-5 mt-3"/>
            `
        }
    }
})