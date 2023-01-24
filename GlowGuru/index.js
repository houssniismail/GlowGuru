var add = document.getElementById("tbody");
var a = 1;
var number = document.getElementById("number");

blus = document.getElementById("blus");
blus.addEventListener("click",()=>{
    number.value = ++a;
    console.log(number.value)
   
    
});
function myfunction(){
    //add value to inpute
    add.innerHTML += `
                    <center>
                    <div>
                      <input type="text" class="block md:hidden md:w-auto" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px; text-align: center;" disabled value="poduct ${number.value} "> 
                      <br>
                      <input type="file" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px;" name="value1[]" required>
                      <input type="text" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px;" name="value2[]" required>
                      <input type="text" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px;" name="value3[]" required>
                      <input type="text" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px;" name="value4[]" required>
                      <input type="text" style="width: 200px; height: 50px; margin-top: 20px; border-radius: 15px;" name="value5[]" required>
                     </div>
                    </center>
                     `;
}





