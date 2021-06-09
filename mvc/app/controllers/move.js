var style = document.createElement('style');
var codd=document.getElementById('broasca');
console.log(codd);
style.innerHTML = `
#broasca{
justify-content:space-around;

}
`;
let lock1 = document.getElementsByClassName("Verify")[0];
lock1.addEventListener('click', onClick);
function onClick() {


document.getElementById('board').appendChild(style);
}