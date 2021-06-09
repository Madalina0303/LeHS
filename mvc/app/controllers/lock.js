console.log(level);
console.log(challenge);

let lock1 = document.getElementsByClassName("Verify")[0];
let lock2 = document.getElementsByClassName("Verify")[1];
let lock3 = document.getElementsByClassName("Verify")[2];
let lock4 = document.getElementsByClassName("Verify")[3];
let next = document.getElementsByClassName("next")[0];

lock1.addEventListener('click', onClick);
let unlock1 = document.getElementsByClassName("cod")[1];
let unlock2 = document.getElementsByClassName("cod")[2];
let unlock3 = document.getElementsByClassName("cod")[3];
function onClick() {

  console.log("off");
  let elem = document.getElementsByClassName("continut")[0];
  let lst = elem.querySelectorAll('div>textarea');
  console.log("uite care e raspunsul dat de m");
  console.log(lst.values);
  getAnswer(lst, level, parseInt(challenge) - 1, 0)




}
function onClick2() {
  let elem = document.getElementsByClassName("continut")[1];
  let lst = elem.querySelectorAll('div>textarea');
  getAnswer(lst, level, parseInt(challenge) - 1, 1);
  // console.log("off");
  // unlock2.classList.add('is--unlock');
  // lock3.addEventListener('click', onClick3);
}
function onClick3() {

  let elem = document.getElementsByClassName("continut")[2];
  let lst = elem.querySelectorAll('div>textarea');
  getAnswer(lst, level, parseInt(challenge) - 1, 2);

  // unlock3.classList.add('is--unlock');
  // lock4.addEventListener('click', onClick4);

}
function onClick4() {
  let elem = document.getElementsByClassName("continut")[3];
  let lst = elem.querySelectorAll('div>textarea');
  getAnswer(lst, level, parseInt(challenge) - 1, 3);

  // next.addEventListener('click', nextPage);
}
async function getAnswer(lst, lev, chl, nrA) {
  const result = await fetch("../models/model.json")
    .then(response => {
      return response.json();
    })
    .then(json => {

      //return json[lev][chl].answer[0];
      return verifCorect(lst, json[lev][chl].answer[nrA], nrA);

    });
}
function nextPage() {
  // salvare in bd a proiectului mai trebuie facute 
  // var path=window.location.pathname;
  // var page = path.split("/").pop();
  // console.log( page );
  if (level == 'bh') {
    if (challenge < 3) {
      let urmC = parseInt(challenge) + 1;
      location.href = '../views/beginnerH.php?level=bh&chlg='.concat(urmC);

    }
    else {
      location.href = '../views/beginnerH.php?level=ih&chlg=1';
    }
  }
  if (level == 'ih') {
    if (challenge < 3) {
      let urmC = parseInt(challenge) + 1;
      location.href = '../views/beginnerH.php?level=ih&chlg='.concat(urmC);

    }
    else {
      location.href = '../views/beginnerH.php?level=ah&chlg=1';
    }
  }
  if (level == 'ah') {
    if (challenge < 3) {
      let urmC = parseInt(challenge) + 1;
      location.href = '../views/beginnerH.php?level=ah&chlg='.concat(urmC);

    }
    else {
      location.href = '../views/beginnerH.php?level=bh&chlg=1';
      // + in bd
    }
  }
  // else if(page=='intermediateH.html')
  // location.href='../views/advancedH.html';
  // else if(page=='advancedH.html')
  // location.href='../views/beginnerC.html';
  // else if(page=='beginnerC.html')
  // location.href='../views/intermediateC.html';
  // else if(page=='intermediateC.html')
  // location.href='../views/advancedC.html';
}
function verifCorect(lst, lstCorect, nrA) {
  let ok = 1;
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
      //   break;
    }
  }
  if (ok == 1) {
    //Swal.fire('Any fool can use a computer')
    Swal.fire({
      icon: 'success',
      title: 'Great job!',
      text: 'You answered correctly!'

    })
    switch (parseInt(nrA)) {
      case 0: unlock1.classList.add('is--unlock');
        lock2.addEventListener('click', onClick2);
        break;
      case 1: unlock2.classList.add('is--unlock');
        lock3.addEventListener('click', onClick3);
        break;
      case 2:
        unlock3.classList.add('is--unlock');
        lock4.addEventListener('click', onClick4);

        break;

      case 3:
        next.addEventListener('click', nextPage);
        brealk;

    }

    return true;
    //console.log("corect");

  }


}