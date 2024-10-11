function showResume(language) {
  var resumeViewer = document.getElementById("resume-viewer");
  var resumePdf = document.getElementById("resume-pdf");
  
  if (language === "english") {
      resumePdf.src = "./assets/resume_english.pdf";
  } else if (language === "german") {
      resumePdf.src = "./assets/resume_german.pdf";
  }

  resumeViewer.style.display = "block"; // Show resume section
}