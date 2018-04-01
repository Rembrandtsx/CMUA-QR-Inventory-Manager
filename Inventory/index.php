<script type="text/javascript" src="/js/jsPretty/jsqrscanner.nocache.js"></script>
<noscript>
   <div style="width: 22em; position: absolute; left: 50%; margin-left: -11em; color: red; background-color: white; border: 1px solid red; padding: 4px; font-family: sans-serif">
     Your web browser must have JavaScript enabled
     in order for this application to display correctly.
   </div>
 </noscript>

 <div class="row-element-set row-element-set-QRScanner">
   <h1>JsQRScanner example</h1>
   <div class="row-element">
     <div class="FlexPanel detailsPanel QRScannerShort">
       <div class="FlexPanel shortInfoPanel">
         <div class="gwt-HTML">
           Point the webcam to a QR code.
         </div>
       </div>
     </div>
   </div>
   <br>
   <div class="row-element">
     <div class="qrscanner" id="scanner">
     </div>
   </div>
   <div class="row-element">
     <div class="form-field form-field-memo">
       <div class="form-field-caption-panel">
         <div class="gwt-Label form-field-caption">
           Scanned text
         </div>
       </div>
       <div class="FlexPanel form-field-input-panel">
         <textarea id="scannedTextMemo" class="textInput form-memo form-field-input textInput-readonly" rows="3" readonly>
         </textarea>
       </div>
     </div>
     <div class="form-field form-field-memo">
       <div class="form-field-caption-panel">
         <div class="gwt-Label form-field-caption">
           Scanned text history
         </div>
       </div>
       <div class="FlexPanel form-field-input-panel">
         <textarea id="scannedTextMemoHist" class="textInput form-memo form-field-input textInput-readonly" value="" rows="6" readonly>
         </textarea>
       </div>
     </div>
   </div>
   <br>
   <a style="font-weight: bold;" href="https://github.com/jbialobr/JsQRScanner">The source code is hosted on GitHub</a>
 </div>
<script type="text/javascript">
 function onQRCodeScanned(scannedText)
 {
   var scannedTextMemo = document.getElementById("scannedTextMemo");
   if(scannedTextMemo)
   {
     scannedTextMemo.value = scannedText;
   }
   var scannedTextMemoHist = document.getElementById("scannedTextMemoHist");
   if(scannedTextMemoHist)
   {
     scannedTextMemoHist.value = scannedTextMemoHist.value + '\n' + scannedText;
   }
 }

 //this function will be called when JsQRScanner is ready to use
 function JsQRScannerReady()
 {
     //create a new scanner passing to it a callback function that will be invoked when
     //the scanner succesfully scan a QR code
     var jbScanner = new JsQRScanner(onQRCodeScanned);
     //reduce the size of analyzed image to increase performance on mobile devices
     jbScanner.setSnapImageMaxSize(300);
   var scannerParentElement = document.getElementById("scanner");
   if(scannerParentElement)
   {
       //append the jbScanner to an existing DOM element
     jbScanner.appendTo(scannerParentElement);
   }
 }
</script>    

<?php
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
define("ROOT", "slidle");
include "core/autoload.php";

// cargamos el modulo iniciar.
Core::loadModule("ventas");

?>
