/* ** Misol #6.3** */

// Students massivi
let students = ["Abduvahob", "Bobur", "Shaxriyor", "Shaxobiddin", "Sardor", "Muhammadjon"];
// Alifbo tartibida 
students.sort();
console.log('ALIFBO TARTIBIDA');
for (let i = 0; i < students.length; i++) {
    let student = students[i].toString();
    // consol
    console.log(`sudents[${i}] = ${student}`);
    $('#natija1').append('<div id="l' + i + '" class="red"> sudents[' + i + '] = ' + student + '</div>');
}
// Teskari tartibda
students.reverse();
console.log('\nKAMAYISH TARTIBIDA');
for (let i = 0; i < students.length; i++) {
    let student = students[i].toString();
    // consol
    console.log(`sudents[${i}] = ${student}`);
    $('#natija2').append('<div id="r' + i + '" class="green"> sudents[' + i + '] = ' + student + '</div>');
}