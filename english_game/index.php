<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | My project</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
  </head>
  <body>
    <div id="unity-container" class="unity-desktop">
      <canvas id="unity-canvas" width=960 height=600></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-warning"> </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"></div>
        <div id="unity-fullscreen-button"></div>
        <div id="unity-build-title">My project</div>
      </div>
    </div>
    <script>
      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var warningBanner = document.querySelector("#unity-warning");

      // Shows a temporary message banner/ribbon for a few seconds, or
      // a permanent error message on top of the canvas if type=='error'.
      // If type=='warning', a yellow highlight color is used.
      // Modify or remove this function to customize the visually presented
      // way that non-critical warnings and error messages are presented to the
      // user.
      function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
          warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
          if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
          setTimeout(function() {
            warningBanner.removeChild(div);
            updateBannerVisibility();
          }, 5000);
        }
        updateBannerVisibility();
      }

      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/new_english.loader.js";
      var config = {
        dataUrl: buildUrl + "/new_english.data.unityweb",
        frameworkUrl: buildUrl + "/new_english.framework.js.unityweb",
        codeUrl: buildUrl + "/new_english.wasm.unityweb",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "My project",
        productVersion: "1.0",
        showBanner: unityShowBanner,
      };

      // By default Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:

        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
        container.className = "unity-mobile";

        // To lower canvas resolution on mobile devices to gain some
        // performance, uncomment the following line:
        // config.devicePixelRatio = 1;

        canvas.style.width = window.innerWidth + 'px';
        canvas.style.height = window.innerHeight + 'px';

        unityShowBanner('WebGL builds are not supported on mobile devices.');
      } else {
        // Desktop style: Render the game canvas in a window that can be maximized to fullscreen:

        canvas.style.width = "960px";
        canvas.style.height = "600px";
      }

      loadingBar.style.display = "block";

  var script = document.createElement("script");
 script.src = loaderUrl;
   setTimeout(getData, 2000);
//   script.onload = () => {
//     createUnityInstance(canvas, config, (progress) => {
//       progressBarFull.style.width = 100 * progress + "%";
//     }).then((unityInstance) => {
//       loadingBar.style.display = "none";
//       fullscreenButton.onclick = () => {
//         unityInstance.SetFullscreen(1);
//       };
//     }).catch((message) => {
//       alert(message);
//     });
//   };








window.onbeforeunload = function () {
return 'Are you sure to leave the game ? ';

};





       function getData() {
console.log("sadsfds");

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
// Split the response string on the pipe character to extract username and password
var data = this.responseText.split('|');
var username = data[0];
var password = data[1];
console.log("Username: " + username);
console.log("password: " + password);
console.log("secibd");



createUnityInstance(canvas, config, (progress) => {
progressBarFull.style.width = 100 * progress + "%";
}).then((unityInstance) => {
loadingBar.style.display = "none";
//setTimeout(greet, 2000, "John");

//     if (username=="" || password=="")
// {
//      unityInstance.SendMessage('SC_LoginSystem', 'Skip');


unityInstance.SendMessage('SC_LoginSystem', 'login',username + "|" + password);

fullscreenButton.onclick = () => {
 unityInstance.SetFullscreen(1);
};
}).catch((message) => {
alert(message);
});






//  script.onload = () => {
//     createUnityInstance(canvas, config, (progress) => {
//       progressBarFull.style.width = 100 * progress + "%";
//     }).then((unityInstance) => {
//       loadingBar.style.display = "none";
//                  setTimeout(getData, 2000);
//       fullscreenButton.onclick = () => {
//         unityInstance.SetFullscreen(1);

//         if (username == "" || password == "") {
//   unityInstance.SendMessage('SC_LoginSystem', 'Skip');
//   } else {
//       console.log("Username: " + username);
//       console.log("Password: " + password);
//       console.log("Second");

//       // Call the login function in Unity
//       unityInstance.SendMessage('SC_LoginSystem', 'login', username, password);
//   }
//       };
//     }).catch((message) => {
//       alert(message);
//     });
//   };






}
};
xhttp.open("GET", "/get_data.php", true);
xhttp.send();

}










//       function DeletePlayerPrefs() {
//     PlayerPrefs.DeleteAll();
// }





//       function deletedata(){
//           createUnityInstance(canvas, config, (progress) => {
//     progressBarFull.style.width = 100 * progress + "%";
//   }).then((unityInstance) => {
//     loadingBar.style.display = "none";
//     //setTimeout(greet, 2000, "John");

// //     if (username=="" || password=="")
// // {
// //      unityInstance.SendMessage('SC_LoginSystem', 'Skip');


//  unityInstance.SendMessage('SC_LoginSystem', 'ExitGame');

//     fullscreenButton.onclick = () => {
//       unityInstance.SetFullscreen(1);
//     };
//   }).catch((message) => {
//     alert(message);
//   });
//       }

      document.body.appendChild(script);
    </script>
  </body>
</html>
