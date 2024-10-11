function showResume(language) {
  var resumeViewer = document.getElementById("resume-viewer");
  var resumePdf = document.getElementById("resume-pdf");

  resumeViewer.style.display = "block";

  if (language === "english") {
    resumePdf.src = "https://github.com/your-username/your-repository/raw/main/assets/Curriculum Vitae.pdf";
  } else if (language === "german") {
    resumePdf.src = "https://github.com/your-username/your-repository/raw/main/assets/Lebenslauf.pdf";
  }
}