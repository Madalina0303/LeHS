console.log(level);
console.log(challenge);


// var style = document.createElement('style');
// var codd = document.getElementById('animal');
// console.log('intra iaici pe move');
// style.innerHTML = `
// #animal{
// justify-content:space-around;

// }
// `;
let lock1 = document.getElementsByClassName("Verify")[0];
lock1.addEventListener('click', onClick);
let next = document.getElementsByClassName("next")[0];
next.addEventListener('click', onClickNext);
function onClick() {
    console.log("s-a clickuit");
    let elem = document.getElementById("cod");
    let lst = elem.querySelectorAll('div>textarea');
    getAnswer(lst, level, parseInt(challenge) - 1);
    
    aplicaEfect(lst, level, parseInt(challenge) - 1);
}
function onClickNext() {
    if (level == 'bc') {
        if (challenge < 3) {
          let urmC = parseInt(challenge) + 1;
          location.href = '../views/beginnerC.php?level=bc&chlg='.concat(urmC);
    
        }
        else {
          location.href = '../views/beginnerC.php?level=ic&chlg=1';
        }
      }
      if (level == 'ic') {
        if (challenge < 3) {
          let urmC = parseInt(challenge) + 1;
          location.href = '../views/beginnerC.php?level=ic&chlg='.concat(urmC);
    
        }
        else {
          location.href = '../views/beginnerC.php?level=ac&chlg=1';
        }
      }
      if (level == 'ac') {
        if (challenge < 3) {
          let urmC = parseInt(challenge) + 1;
          location.href = '../views/beginnerC.php?level=ac&chlg='.concat(urmC);
    
        }
        else {
          location.href = '../views/beginnerC.php?level=bc&chlg=1';
          // + in bd
        }
}
}
function aplicaEfect(lst, level, challenge) {
    if (level == "bc") {
        var style1 = document.createElement('style');
        var model=".model{";
        for(let i=0;i<lst.length;i++)
           model=model+lst[i].value;
        model=model+"}";
        style1.innerHTML = model;
       
        console.log(document.getElementsByClassName("model")[0]);
        document.getElementsByClassName("model")[0].appendChild(style1);
}
else if(level=="ac"){
    console.log("a intrat pe adavenced !!!!");
    console.log(lst);
var move = document.createElement('style');
//var codd = document.getElementById('animal');
var mv="#animal{";
for(let i=0;i<lst.length;i++)
   mv=mv+lst[i].value;
mv=mv+"}";
move.innerHTML =mv;
document.getElementById('board').appendChild(move);
}
}
async function getAnswer(lst, lev, chl) {
    const result = await fetch("../models/model.json")
        .then(response => {
            return response.json();
        })
        .then(json => {

            //return verifCorect(lst, json[lev][chl].answer);
            let rez=verifCorect(lst, json[lev][chl].answer);
            updateLev(lev,chl,rez);
        });
}
async function updateLev(lev,chl,rez){

  if(rez==true){
  
 //http://127.0.0.1:3000/app/views/beginnerC.php?level=ac&chlg=3
  let nextLev=lev;
  let nextChl=chl;
 if(chl<=1)
 {
  console.log("intra pe cazul mic");
   nextLev=lev;
   nextChl=chl+2;
   console.log(nextChl);
 }
 else if(chl==2 &&lev!="ac"){
   console.log("intra pe cazul mare");
  nextLev=nextLevel(lev);
  nextChl=1;
 }
 else if(lev=="ac"&& chl==2)
 {
  nextLev=lev;
  nextChl=4;
 }

 let denumire="../views/updateLevel.php?level="+nextLev+"&chlg="+nextChl;
 console.log(denumire);
 await fetch(denumire) .then(response => {
   console.log("ia sa vedem ");
   console.log(response);
 
})
  }
}
function nextLevel(lev){
  switch(lev){
    case "bc": return "ic";
    case "ic":return "ac";
  }
  return null;
}
function verifCorect(lst, lstCorect) {
    let ok=1;
    for (let i = 0; i < lst.length; i++) {

        if (lst[i].value != lstCorect[i]) {
            console.log(lst[i].value);
            console.log(lstCorect[i]);
            console.log()
            ok = 0;
            // console.log("gresit");
            Swal.fire({
                icon: 'error',
                title: 'Not relly',
                text: 'Please try again!'

            })
            return false;

        }
    }
    if (ok == 1) {
        //Swal.fire('Any fool can use a computer')
        Swal.fire({
            icon: 'success',
            title: 'Great job!',
            text: 'You answered correctly!'

        })

    }
    return true;
}

