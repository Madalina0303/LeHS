
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
      if(lev[1]=='h'){
      printRequireHtml(json[lev][chl].require);
      printTemplateHtml(json[lev][chl].template);
      }
      else if(lev[1]=='c'){
        printRequireCss(json[lev][chl].require);
        printTemplateCss(json[lev][chl].template);
        printTemplateBoardCss(json[lev][chl].templateBoard);
      }

    });
}
function printTemplateBoardCss(json){
  console.log("intra pe template board");
  console.log(json);
 //json 0 este pt animal
 
 for(let i=0;i<json[0].length;i++){
  let animal=document.createElement("div");
  animal.innerHTML=json[0][i];
  document.getElementById("animal").appendChild(animal);
  console.log(json[0][i]);
 }
 // json 1 este pt hrana
 for(let i=0;i<json[1].length;i++){
  let hrana=document.createElement("div");
  hrana.innerHTML=json[1][i];
  document.getElementById("hrana").appendChild(hrana);
 }
}
function printRequireCss(json){
  console.log("cerinta este : ");
  console.log(json);
  let p = document.createElement("div");
  p.innerHTML = json;
  document.getElementsByClassName("enunt")[0].appendChild(p);
}
function printTemplateCss(json){
  console.log("templateul este : ");
  console.log(json);
  let t = document.createElement("div");
  t.innerHTML = json;
  document.getElementById("cod").appendChild(t);
  
}
function printRequireHtml(json) {
  let p = document.createElement("p");
  p.innerText = json;
  document.getElementsByClassName("require")[0].appendChild(p);
}
function printTemplateHtml(json) {
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
      background-image: url("../../public/images/595.jpg");
      }
      `;
      //  style.innerHTML = `
      // body{
      // background-color:#b3cb81;
      // }
      // `;
      
      document.head.appendChild(style);
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
      document.head.appendChild(style);
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
      document.head.appendChild(style);
      getResource(level, parseInt(challenge) - 1);
      
      break;
      case "bc":
        getResource(level, parseInt(challenge) - 1);
        console.log("intra aici")
        break;
      case "ic":
        getResource(level, parseInt(challenge) - 1);
      
        break;
      case "ac":
        switch (parseInt(challenge)) {
          case 1:
            var style = document.createElement('style');
            style.innerHTML = `
            #hrana{
            justify-content:flex-end;
            }
            `;
            document.getElementById("hrana").appendChild(style);
          
            break;
          case 2:
            var style = document.createElement('style');
            style.innerHTML = `
            #hrana{
            justify-content:center;
            }
            `;
            document.getElementById("hrana").appendChild(style);
          
           
            break;
          case 3:
            var style = document.createElement('style');
            style.innerHTML = `
            #hrana{
            justify-content:space-around;
            }
            `;
            document.getElementById("hrana").appendChild(style);
          break;
        }
        getResource(level, parseInt(challenge) - 1);
      
        break;  
  }

 
} catch (error) {
  console.log(error);
}


