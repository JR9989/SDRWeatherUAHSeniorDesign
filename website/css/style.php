<!-- style.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Substitution for CSS stylesheet implemented via php and style due to browsers being stupid and caching the stylesheet and refusing to update it without having to change the sheet's version number on every single page -->
<style>

/* Global Styles */

body {
  text-align: center;
  padding: 10px;
  padding-bottom: 75px;
  min-height: 100vh;
  z-index: 1;
  box-sizing: border-box;
  font-family: Oswald;
  color: white;
  font-weight: bold;
}
header {
  width: 100%;
  display: block;
}
header ul {
  list-style-type: none;
  padding: 0;
}
header ul li {
  display: inline-block;
  margin-bottom: 24px;
}
header ul li a {
  display: block;
  color: white;
  box-sizing: border-box;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-size: 1.5em;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
}
header ul li a:hover {
  background: rgba(170, 170, 170, 0.36);
  border-color: rgb(52,133,235);
  text-decoration: underline;
}
header ul li a:active {
  background: rgba(120, 120, 120, 0.36);
}
.active {
  background: rgba(120, 120, 120, 0.36);
}
.link {
  display: inline-block;
  color: white;
  box-sizing: border-box;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-size: 1.5em;
  border: 0px;
  margin: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
}
.link:hover {
  background: rgba(170, 170, 170, 0.36);
  text-decoration: underline;
}
h1 {
  font-size: 4em;
  font-weight: 600;
  color: white;
  text-transform: uppercase;
  text-shadow: 1px 1px 0px rgba(50,50,50,1),
               1px 2px 0px rgba(50,50,50,1),
               1px 3px 0px rgba(50,50,50,1),
               1px 4px 0px rgba(50,50,50,1),
               1px 5px 0px rgba(50,50,50,1),
               1px 6px 0px rgba(50,50,50,1),
               1px 10px 5px rgba(16, 16, 16, 0.5),
               1px 15px 10px rgba(16, 16, 16, 0.4),
               1px 20px 30px rgba(16, 16, 16, 0.3),
               1px 25px 50px rgba(16, 16, 16, 0.2);
}
.imageTitle {
  box-sizing: border-box;
  max-width: 100%;
  padding: 10px;
  max-height: 150px;
}
footer {
  width: 100%;
  position: fixed;
  text-align: center;
  display: block;
  bottom: 0;
  left: 0;
  margin: 0;
  background-color: rgba(0,0,0,0.5);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
}
img {
  display: block;
  z-index: 1;
}

/* Image Download Page (downloadImages.php) */
#output {
  margin: auto;
  width: 100%;
  max-width: 800px;
  min-height: 700px;
  max-height: 700px;
  position: relative;
  margin-bottom: 50px;
  padding: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  display: flex;
  flex-direction: column-reverse;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  overflow: scroll;
}
#output1 {
  margin: auto;
  width: 100%;
  max-width: 800px;
  min-height: 700px;
  max-height: 700px;
  position: relative;
  margin-bottom: 50px;
  padding: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  display: flex;
  flex-direction: column-reverse;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  overflow: scroll;
}
#output2 {
  margin: auto;
  width: 100%;
  max-width: 800px;
  min-height: 700px;
  max-height: 700px;
  position: relative;
  margin-bottom: 50px;
  overflow: scroll;
  display: flex;
  flex-direction: column-reverse;
  padding: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
}
#commandInput {
  padding: 15px;
  border: 0px;
  text-size: 18px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
}
.inputBox {
  padding: 15px;
  border: 0px;
  color: white;
  text-size: 18px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
}
.homeDiv {
  margin: auto;
  text-align: center;
  position: relative;
}

/* Azimuth Calculation Page (calculation.php) */

#result {
  margin: auto;
  width: 100%;
  max-width: 800px;
  position: relative;
  margin-bottom: 50px;
  padding: 25px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 16px;
  font-size: 2em;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
}

/* Gallery Page (images.php) */

.thumbnail {
  height: 250px;
  width: 250px;
  margin: 0 auto;
  border-radius: 50px;
  box-shadow: -4px -4px 10px rgba(67, 67, 67, 0.5),
        inset 4px 4px 10px rgba(0, 0, 0, 0.5),
        inset -4px -4px 10px rgba(67, 67, 67, 0.3),
        4px 4px 10px rgba(0, 0, 0, 0.3);
}
.imageLink {
  background: none;
}
.imageLink:hover {
  text-decoration: underline;
}
.thumbnailName {
  color: white;
  display: inline-block;
}
.thumbNailContainer {
  display: inline-block;
  box-sizing: border-box;
  padding: 5px;
  padding-top: 15px;
  margin: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 50px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
  width: 300px;
  height: 100%;
}
.thumbNailContainer:hover {
  background: rgba(120, 120, 120, 0.36);
  color: red;
  text-decoration: underline;
}
.notice {
  color: white;
  font-weight: bold;
  font-size: 24px;
}

/* Individual Image Viewer Page (displayImage.php) */

.fullSizeImage {
  margin-top: 20px;
}
.fullSizeImage a {
  font-size: 36px; 
}
.fullSizeImage img {
  display: block;
  border: white solid 1px;
  margin-bottom: 25px;
  z-index: 5;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
}
.full-size {
  margin: 0 auto;
}

/* Text Gallery Page (text.php) */

.textFileLink {
  display: inline-block;
  box-sizing: border-box;
  padding: 5px;
  margin: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 50px;
  font-size: 2em;
  color: white;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
  min-width: 300px;
  height: 100%;
}
.textFileLink:hover {
  background: rgba(120, 120, 120, 0.36);
  color: red;
  text-decoration: underline;
}

/* Individual Text File Content Viewer Page (displayText.php) */
.textDisplay {
  display: inline-block;
  box-sizing: border-box;
  padding: 5px;
  margin: 5px;
  background: rgba(255, 255, 255, 0.36);
  border-radius: 50px;
  font-size: 2em;
  color: white;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
  min-width: 300px;
  height: 100%;
}
</style>
