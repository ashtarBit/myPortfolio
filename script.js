function showResume(language) {
  const englishResume = document.getElementById('resume-pdf-english');
  const germanResume = document.getElementById('resume-pdf-german');

  if (language === 'english') {
      englishResume.style.display = 'block';
      germanResume.style.display = 'none';
  } else {
      englishResume.style.display = 'none';
      germanResume.style.display = 'block';
  }
}
