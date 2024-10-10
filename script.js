function showResume(language) {
    var resumeViewer = document.getElementById("resume-viewer");
    var resumePdf = document.getElementById("resume-pdf");

    resumeViewer.style.display = "block";

    if (language === "english") {
      resumePdf.src =
        "https://drive.google.com/file/d/17iNEzUAAHVL-FOJJCHFAijrPYgzX7ax-/preview";
    } else if (language === "german") {
      resumePdf.src =
        "https://drive.google.com/file/d/1bd69Fx9tB-jS2TS5GjT0irsEN7UJTkLi/preview";
    }
  }