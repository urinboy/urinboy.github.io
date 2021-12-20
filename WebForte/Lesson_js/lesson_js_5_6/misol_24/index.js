/* ** Misol #6.4** */

// Students massivi
const students = ["Abduvahob", "Bobur", "Shaxriyor", "Shaxobiddin", "Sardor", "Muhammadjon"];
let student = "";

students.forEach(chiqarish);
console.log(student);
document.getElementById("natija").innerHTML = student;

function chiqarish(ism, index) {
    student += index + ": " + ism + "<br> \n";
}