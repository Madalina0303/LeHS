
console.log(level);
console.log(challenge);
// json si sa citim din json dupa caz ca apoi s afacem append
// async function getResource(lev, chl) {
//   const result = await fetch("../models/model.json")
//     .then(response => {
//       return response.json();
//     })
//     .then(ceva => ceva[lev][chl].require)
//     .then(json => {
//       //.then(json => console.log(json));
//       console.log("am noroc");
//       let p = document.createElement("p");
//       p.innerText = json;
//       document.getElementsByClassName("require")[0].appendChild(p);
//     });
// }
async function getResource(lev, chl) {
  const result = await fetch("../models/model.json")
    .then(response => {
      return response.json();
    })
    .then(json => {
      printRequire(json[lev][chl].require);
      printTemplate(json[lev][chl].template);

    });
}
function printRequire(json) {
  let p = document.createElement("p");
  p.innerText = json;
  document.getElementsByClassName("require")[0].appendChild(p);
}
function printTemplate(json) {
  let p0 = document.createElement("div");
  p0.innerHTML = json[0];
  document.getElementsByClassName("continut")[0].appendChild(p0);
  
  let p1 = document.createElement("div");
  p1.innerHTML = json[1];
  document.getElementsByClassName("continut")[1].appendChild(p1);

  let p2 = document.createElement("div");
  p2.innerHTML = json[2];
  document.getElementsByClassName("continut")[2].appendChild(p2);

  let p3 = document.createElement("div");
  p3.innerHTML = json[3];
  document.getElementsByClassName("continut")[3].appendChild(p3);

}
try {

  switch (level) {
    case "bh":
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/cns.png");
      }
      `;
      switch (parseInt(challenge)) {
        case 1:

          getResource(level, challenge - 1);
          break;
        case 2:

          getResource(level, challenge - 1);
          break;
        case 3:
          getResource(level, challenge - 1);
        break;
      }
      break;
    case "ih":
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/htr.jpg");
      }
      `;
      getResource(level, parseInt(challenge) - 1);
      
      break;
    case "ah":
      console.log("intra oe ah ");
      var style = document.createElement('style');
      style.innerHTML = `
      body{
      background-image: url("../../public/images/ploua1.jpg");
      }
      `;
     
      getResource(level, parseInt(challenge) - 1);
      
      break;
  }

  document.head.appendChild(style);
} catch (error) {
  console.log(error);
}


