function generarPDF() {

    let name =  document.getElementById("name").value;
    let email =  document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let message = document.getElementById("message").value;
   
    var documentPDF = new jsPDF();

    documentPDF.setTextColor(37, 74, 115);
    documentPDF.setFont("roboto");
    documentPDF.setFontSize(25);
    documentPDF.text(95, 10, 'Contacto');
    documentPDF.setFontSize(16);
    documentPDF.text(20, 30, 'fecha: ' + new Date());
    documentPDF.setFontSize(12,);

    documentPDF.text(20, 40,  "Nombre: "  +  name);
    documentPDF.text(20, 50,  "Correo: "  +  email);
    documentPDF.text(20, 60,  "Celular: "  +  phone);
    documentPDF.text(20, 70,  "Mensaje: "  +  message);
    documentPDF.save(name);
}