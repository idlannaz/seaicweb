var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

//image display

const change = src => {
  document.getElementById('main').src = src
}


// var ProductImg = document.getElementById("ProductImg");
//         var SmallImg = document.getElementsByClassName("small-img");

//             SmallImg[0].onclick = function()
//             {
//                 ProductImg.src = SmallImg[0].src;
//             }
//             SmallImg[1].onclick = function()
//             {
//                 ProductImg.src = SmallImg[1].src;
//             }
//             SmallImg[2].onclick = function()
//             {
//                 ProductImg.src = SmallImg[2].src;
//             }
//             SmallImg[3].onclick = function()
//             {
//                 ProductImg.src = SmallImg[3].src;
//             }   


//////////////////////////////////////////////limitations//////////////////////////////////////////////////////////
const inputs = document.querySelector('#file-upload');


// Listen for files selection
inputs.addEventListener('change', (e) => {
  // Retrieve all files
  const files = inputs.files;


  // Check files count
  if (files.length > 4) {
    alert(`Only 4 files are allowed to upload.`);
    document.getElementById("file-upload").value=null; 
    return;
  }

  // TODO: continue uploading on server
});

/////////////////////////////////////////////////overlay////////////////////////////////////////////////////////////////
function showImage(intId) {
  var modal = document.getElementById("myModal"+intId);
  var img = document.getElementById("myImg"+intId);
  var modalImg = document.getElementById("img01"+intId);
  modal.style.display = "block";
  modalImg.src = img.src;
}

function closeImage(intId) {
  var span = document.getElementById("myModal"+intId);
  span.style.display = "none";
}