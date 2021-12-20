/* ** Misol #6.2** */

// Students massivi
let students = ["Abduvahob", "Bobur", "Shaxriyor", "Shaxobiddin", "Sardor", "Muhammadjon"];

for (let i = 0; i < students.length; i++) {
    let student = students[i].toString();
    console.log(`sudents[${i}] = ${student}`);
    $('#natija').append('<div id="r' + i + '" class="natija msg"> sudents[' + i + '] = ' + student + '</div>')
}