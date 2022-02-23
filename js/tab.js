// tabs////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function roleTab(evt, roles) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(roles).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();

//upload file////////////////////////////////////////////////////////////////////////////////////////////////////////
// var input = document.getElementById('file-upload');
// var infoArea = document.getElementById('file-upload-filename');

// input.addEventListener('change', showFileName);

// function showFileName(event) {

//   var input = event.srcElement;

//   var fileName = input.files[0].name;


//   infoArea.textContent = 'File name: ' + fileName;
// } 

