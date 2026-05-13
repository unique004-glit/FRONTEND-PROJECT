const countIn = document.getElementById(`count`);
const countlabel = document.getElementById(`count-label`);
let count = 0;
 
countIn.onclick = function(){
  count++;
  countlabel.textContent = count;
};
