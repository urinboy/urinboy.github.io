/* ** Misol #6.4** */

// Students massivi
let students = ["Abduvahob", "Bobur", "Shaxriyor", "Shaxobiddin", "Sardor", "Muhammadjon"];
let student1 = students.slice(0, 3);
let student2 = students.slice(3, 6);


students.forEach(chiqarish);

console.log(student1);
console.log(student2);

document.getElementById("natija1").innerHTML = "1. " + student1;
document.getElementById("natija2").innerHTML = "2. " + student2;

function chiqarish(ism, index, student) {
    student += index + ": " + ism + "<br> \n";
}