let lock1=document.getElementsByClassName("Verify")[0];
let lock2=document.getElementsByClassName("Verify")[1];
let lock3=document.getElementsByClassName("Verify")[2];
let lock4=document.getElementsByClassName("Verify")[3];
let next=document.getElementsByClassName("next")[0];

lock1.addEventListener('click',onClick);
let unlock1=document.getElementsByClassName("cod")[1];
let unlock2=document.getElementsByClassName("cod")[2];
let unlock3=document.getElementsByClassName("cod")[3];
function onClick(){
    
 console.log("off");
unlock1.classList.add('is--unlock');
lock2.addEventListener('click',onClick2);

}
function onClick2(){
    
    console.log("off");
   unlock2.classList.add('is--unlock');
   lock3.addEventListener('click',onClick3);
}
function onClick3(){
    
    console.log("off");
    
   unlock3.classList.add('is--unlock');
   lock4.addEventListener('click',onClick4);
 
 }
 function onClick4(){
  next.addEventListener('click',nextPage);
 }
 function nextPage(){
  var path=window.location.pathname;
  var page = path.split("/").pop();
  console.log( page );
  if(page=='beginnerH.html')
   location.href='../views/intermediateH.html';
  else if(page=='intermediateH.html')
  location.href='../views/advancedH.html';
  else if(page=='advancedH.html')
  location.href='../views/beginnerC.html';
  else if(page=='beginnerC.html')
  location.href='../views/intermediateC.html';
  else if(page=='intermediateC.html')
  location.href='../views/advancedC.html';
 }