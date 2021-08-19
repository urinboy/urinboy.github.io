window.onload = function () {
    document.getElementById("download").addEventListener("click", ()=>{
        const resume = this.document.getElementById("resume");
        console.log(resume);
        console.log(window);
        var opt = {
            margin: 0.1,
            filename: 'portifoil.pdf',
            image: {type: 'jpeg', quality: 0.95},
            html2canvas: { scale: 2},
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait'}
        };
        html2pdf().from(resume).set(opt).save();
        // html2pdf().from(resume).save();
    })
}