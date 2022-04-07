

<!doctype html>
<html lang="en">
  <head>
    <style>
        @media screen {
      #printSection {
          display: none;
      }
    }
    
    @media print {
      body * {
        visibility:hidden;
      }
      #printSection, #printSection * {
        visibility:visible;
      }
      #printSection {
        position:absolute;
        left:0;
        top:0;
      }
    }
    
    
    
    </style>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<!---------------------->
<div class="wrap">
    <h1>Bootstrap Modal Example</h1>
    <button onclick="setTimeout(function() { window.close(); }, 000)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">
      Large modal
    </button>
  </div>
  <div id="printThis">
    <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  
      <div class="modal-dialog modal-lg">
  
        <!-- Modal Content: begins -->
        <div class="modal-content">
  
  
  
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="body-message">
              <h4>Any Heading</h4>
              <p>And a paragraph with a full sentence or something else...</p>
            </div>
          </div>
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button id="btnPrint" type="button" class="btn btn-default">Print</button>
      
        <!-- Modal Content: ends -->
  
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    

  <script>
    document.getElementById("btnPrint").onclick = function () {
  printElement(document.getElementById("printThis"));
}

function printElement(elem) {
  var domClone = elem.cloneNode(true);
  
  var $printSection = document.getElementById("printSection");
  
  if (!$printSection) {
      var $printSection = document.createElement("div");
      $printSection.id = "printSection";
      document.body.appendChild($printSection);
  }
  
  $printSection.innerHTML = "";
  $printSection.appendChild(domClone);
  window.print();
}
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

