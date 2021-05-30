
console.log(level);
console.log(challenge);
// json si sa citim din json dupa caz ca apoi s afacem append
async function getResource(){
  const result= await fetch("../models/model.json")
  // .then(response => response.json())
  // .then(json => console.log(json));
  
// console.log(result->bh);
   
}
try {
   var ceva= getResource();
   console.log(ceva);
  switch (level) {
    case "bh":
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/cns.png");
      }
      `;
      switch (challenge) {
        case 1: 
        
        break;
        case 2: break;
        case 3: break;
      }
      break;
    case "ih":
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/htr.jpg");
      }
      `;
      switch (challenge) {
        case 1: break;
        case 2: break;
        case 3: break;
      }  
    break;
    case "ah":
     
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/ploua1.jpg");
      }
      `;
      switch (challenge) {
        case 1: break;
        case 2: break;
        case 3: break;
      }
       break;
  }
 
  document.head.appendChild(style);
} catch (error) {
  console.log(error);
}


