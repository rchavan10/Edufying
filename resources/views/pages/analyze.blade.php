
<!DOCTYPE html>
<html>
     <head>
          <title>Analyze Sample</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
        h1{
  font-family: "Helvetica";
  color:purple;
          }
          h2{
              font-size: 20px;
          }
          .button {
  border-radius: 4px;
  background-color: orangered;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
          }
          @media (min-width: 768px) {
    .my-custom-container{
        width:300px;
    }
}

@media (min-width: 992px) {
    .my-custom-container{
        width:720px;
    }
}

@media (min-width: 1200px) {
    .my-custom-container{
        width:1200px;
    }
@media {
    .my-custom-container{
  border-radius: 10px;
  border: 3px solid blue;
  padding: 15px;
    }
}
@media {
    .my-custom-container{
  margin-top: 30px;
  margin-left: 100px;
    }
}    
} 
       </style>
          </head>
<body>
<div class="my-custom-container">
<script type="text/javascript">
    function processImage() {
        
        var subscriptionKey = "28e8fb31f6be41b181efc0d95926e35a";

        var uriBase =
            "https://westcentralus.api.cognitive.microsoft.com/vision/v2.0/analyze";

        // Request parameters.
        var params = {
            "visualFeatures": "Categories,Description,Color",
            "details": "",
            "language": "en",
        };

        // Display the image.
        var sourceImageUrl = document.getElementById("inputImage").value;
        document.querySelector("#sourceImage").src = sourceImageUrl;

        // Make the REST API call.
        $.ajax({
            url: uriBase + "?" + $.param(params),

            // Request headers.
            beforeSend: function(xhrObj){
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader(
                    "Ocp-Apim-Subscription-Key", subscriptionKey);
            },

            type: "POST",

            // Request body.
            data: '{"url": ' + '"' + sourceImageUrl + '"}',
        })

        .done(function(data) {
            // Show formatted JSON on webpage.
            $("#responseTextArea").val(JSON.stringify(data, null, 2));
        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            // Display error message.
            var errorString = (errorThrown === "") ? "Error. " :
                errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" :
                jQuery.parseJSON(jqXHR.responseText).message;
            alert(errorString);
        });
    };
</script>

<h1>Analyze image:</h1>
<h2>Enter the URL to an image, then click the <strong>Analyze image</strong> button.</h2>
<br>
<h3 style="color:purple;"><I>Image to analyze:</I></h3>
<input type="text" name="inputImage" id="inputImage"
    value="https://upload.wikimedia.org/wikipedia/commons/3/3c/Shaki_waterfall.jpg" />
<button class = "button" onclick="processImage()">Analyze image</button>
<br><br>
<div id="wrapper" style="width:1020px; display:table;">
    <div id="jsonOutput" style="width:600px; display:table-cell;">
            <b><p style="font-family:courier; color:purple; font-size:20px"> Response:</p></b>
        
        <textarea id="responseTextArea" class="UIInput"
                  style="width:580px; height:400px;"></textarea>
    </div>
    <div id="imageDiv" style="width:420px; display:table-cell;">
            <b><p style="font-family:courier; color:purple; font-size:20px">Source image:</p></b>
        <img id="sourceImage" width="400" />
    </div>
</div>
</div>
</body>
</html>