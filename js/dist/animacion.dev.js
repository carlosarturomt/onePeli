"use strict";

var words = ['Psicólogo Educativo', 'Desarrollo FrontEnd', 'Amante del Arte', 'Amante del Conocimiento'],
    wordWrapper = document.getElementById('word'),
    wordWrapperContent = wordWrapper.innerHTML,
    addingWord = false,
    counter = 1;
setInterval(function () {
  if (wordWrapperContent.length > 0 && !addingWord) {
    wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
    wordWrapperContent = wordWrapper.innerHTML;
  } else {
    addingWord = true;
  }

  if (addingWord) {
    if (wordWrapperContent.length < words[counter].length) {
      wordWrapper.innerHTML = words[counter].slice(0, wordWrapperContent.length + 1);
      wordWrapperContent = wordWrapper.innerHTML;
    } else {
      if (counter < words.length) {
        counter++;
      }

      addingWord = false;
    }
  }

  if (counter == words.length) {
    counter = 0;
  }
}, 150);
var youtube = ['¿Creador de Contenidos?', 'Síntesis  Literarias', 'Vídeos Educativos', '', '¿Youtuber?'],
    youtubeWrapper = document.getElementById('youtube'),
    youtubeWrapperContent = youtubeWrapper.innerHTML,
    addingyoutube = false,
    counter2 = 1;
setInterval(function () {
  if (youtubeWrapperContent.length > 0 && !addingyoutube) {
    youtubeWrapper.innerHTML = youtubeWrapperContent.slice(0, -1);
    youtubeWrapperContent = youtubeWrapper.innerHTML;
  } else {
    addingyoutube = true;
  }

  if (addingyoutube) {
    if (youtubeWrapperContent.length < youtube[counter2].length) {
      youtubeWrapper.innerHTML = youtube[counter2].slice(0, youtubeWrapperContent.length + 1);
      youtubeWrapperContent = youtubeWrapper.innerHTML;
    } else {
      if (counter2 < youtube.length) {
        counter2++;
      }

      addingyoutube = false;
    }
  }

  if (counter2 == youtube.length) {
    counter2 = 0;
  }
}, 150);