
var address = fetch("./js/dishes.json")
.then((res) => {
    return res.json();
})
.then((response) => {
    return response;
})
.catch((error) =>
    console.error("Unable to fetch data:", error));

const printAddress = async () => {
    return await address;
  };
  
var data = printAddress();
console.log(data);


// var data = getData();
// console.log(data);

// function getData() {
//     var result = fetch("./js/dishes.json")
//         .then((res) => {
//             return res.json();
//         })
//         .then((response) => {
//             console.log(response);
//             return response;
//         })
//         .catch((error) =>
//             console.error("Unable to fetch data:", error));
//     console.log(result);
// }





// var step = 1;
// var obj = {
//     step: 1,
// }
// var btn_prev = document.querySelector('#btn-prev');
// var btn_next = document.querySelector('#btn-next');
// // if(step == 1){
// //     step = 2;
// // }
// btn_next.onclick = fstep;

// function fstep(){
//     if(step == 1){
//         step1();
//     }else if(step == 2){
//         step2();
//     }else if(step == 3){
//         step3();
//     }else if(step == 4){
//         step4();
//     }
// }

// function step1(){
//     alert(123)
// }