<!-- style.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Substitution for CSS stylesheet implemented via php and style due to browsers being stupid and caching the stylesheet and refusing to update it without having to change the sheet's version number on every single page -->
<style>

/* Global Styles */

body {
      background:url('images/space_bg.gif') repeat fixed center;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      padding: 10px;
      overflow: scroll;
}
.link {
      font-size: 22px;
      padding: 5px;
      background-color: rgba(52,133,235,0.75);
      border: white solid 5px;
      color: white;
      margin: 0 auto;
      font-weight: bold;
      margin: 2px;
      margin-top: 10px;
      display: inline-block;
}
.link:hover {
  background-color: rgba(0,0,0,0.75);
  color: white;
  border-color: rgb(52,133,235);
}
h1 {
  color: white;
  font-size: 48px;
}
.imageTitle {
  max-width: 100%;
  padding: 10px;
  max-height: 150px;
}

/* Home Page (index.php) */

#output {
  margin: auto;
  width: 100%;
  max-width: 800px;
  min-height: 1200px;
  position: relative;
  margin-bottom: 50px;
  padding: 5px;
  background-color: rgba(255,255,255,0.75);
  color: rgb(52,113,235);
  border: solid 10px rgb(52,113,235);
  margin-bottom: 25px;
  box-sizing: border-box;  
}
#commandInput {
  padding: 15px;
  border: solid 2px azure;
  text-size: 18px;
}
.inputBox {
      font-size: 18px;
      padding: 10px;
      background-color: rgba(0,0,0,0.75);
      border: 5px solid azure;
      color: white;
}
.homeDiv {
  margin: auto;
  text-align: center;
  position: relative;
}

/* Azimuth Calculation Page (calculation.php) */

/* Gallery Page (images.php) */

.thumbnail {
        height: 250px;
        display: block;
        width: 250px;
        margin: 10px;
        border: 5px solid #ccc;
}
.imageLink {
  background: none;
}
.thumbnailName {
  color: white;
  display: inline;
}
.thumbnailName:hover {
  color: red;
}
.thumbNailContainer {
  display: inline-block;
  width: 300px !important;
}
.thumbNailContainer img:hover {
  border: 5px solid blue;
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
  border: white solid 5px;
  margin-bottom: 25px;
}
.full-size {
  margin: 0 auto;
}

</style>