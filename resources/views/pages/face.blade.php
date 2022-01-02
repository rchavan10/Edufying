
<!DOCTYPE html>
<html>
    <head>
        <title>Detect Faces Sample</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <style>
          body {
            background-color: lightseagreen;
          }
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
  font-size: 14px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
          }
  /* .bg-image {
  /* The image used */
  background-image: url("/images/mala.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
} */
.center{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
  border: 3px solid green;
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
}
          </style>
    </head>
    <body>
        <div class="my-custom-container">   
    <div class="bg-image">
    <script type="text/javascript">
    function processImage() {
        // Replace <Subscription Key> with your valid subscription key.
        var subscriptionKey = "9cc056829d74480f941a65b23be3a8fc";
        var uriBase =
            "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect";

        // Request parameters.
        var params = {
            "returnFaceId": "true",
            "returnFaceLandmarks": "false",
            "returnFaceAttributes":
                "age,gender,headPose,smile,facialHair,glasses,emotion," +
                "hair,makeup,occlusion,accessories,blur,exposure,noise"
        };

        // Display the image.
        var sourceImageUrl = document.getElementById("inputImage").value;
        document.querySelector("#sourceImage").src = sourceImageUrl;

        // Perform the REST API call.
        $.ajax({
            url: uriBase + "?" + $.param(params),

            // Request headers.
            beforeSend: function(xhrObj){
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
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
            var errorString = (errorThrown === "") ?
                "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ?
                "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                    jQuery.parseJSON(jqXHR.responseText).message :
                        jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });
    };
</script>
<h1>Detect Faces:</h1>
<h2 style="color:black">Enter the URL to an image that includes a face or faces, then click
the <strong>Analyze face</strong> button.</h2>
<h3 style="color:purple;"><I>Image to analyze:</I></h3> <input type="text" name="inputImage" id="inputImage"
    value="https://upload.wikimedia.org/wikipedia/commons/c/c3/RH_Louise_Lillian_Gish.jpg" />
<button class = "button" onclick="processImage()">Analyze face</button><br><br>
<div id="wrapper" style="width:1020px; display:table;">
    <div id="jsonOutput" style="width:600px; display:table-cell;">
    <b><p style="font-family:courier; color:purple; font-size:20px">Response</p></b>
        <textarea id="responseTextArea" class="UIInput"
            style="width:580px; height:400px;"></textarea>
    </div>
    {{-- <div class="container"> --}}
    <div id="imageDiv" style="width:420px; display:table-cell;">
       <b><p style="font-family:courier;color:purple; font-size:20px">Source image:</p></b>
        <img id="sourceImage" width="400" />
    </div>

</div>
</div>
    {{-- <div>  --}}
</body>

</html>