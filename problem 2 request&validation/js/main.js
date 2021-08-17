


// let nameCycle = [
//     [1, [8, [0]]], //I
//     [4, [8, [[0], [1, 4, 8], [1, 4, 8], [0]]]]
// ]
// let container = `
//     <div class="d-flex flex-row"> 
// `
// for (let e = 0; e < nameCycle.length; e++) {
//     container += `<div class="d-flex flex-row  m-2">`
//     for (let c = 0; c < nameCycle[e][0]; c++) {
//         container += `<div class="d-flex flex-column ">`
//         for (let r = 0; r < nameCycle[e][1][0]; r++) {
//             if (nameCycle[e][1][1] == 0) {
//                 container += `<div class="cell m-1"></div>`
//             }
//             else {
//                 console.log("iam in else")
//                 for (let z = 0; z < nameCycle[e][1][1].length; z++) {
//                     if (nameCycle[e][1][1][z] == 0) {
//                         // console.log(nameCycle[e][1][1][z])
//                         container += `<div class="cell m-1"></div>`
//                     }
//                     else {
//                         for (let x = 0; x < nameCycle[e][1][1][z].length; x++) {
//                             if (r== nameCycle[e][1][1][z][x]-1) {
//                                 container += `<div class="cell m-1"></div>`
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//         container += `</div>`
//     }
//     container += `</div>`
// }
// container += `</div>`
// document.getElementById("test").innerHTML = container