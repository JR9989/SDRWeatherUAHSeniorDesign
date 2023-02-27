<style>
/* Global Styles */

body {
      background:url('images/space_bg.gif') repeat fixed center;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
}
.link {
      font-size: 24px;
      padding: 5px;
      background-color: rgba(52,133,235,0.75);
      border: white solid 5px;
      color: white;
      font-weight: bold;
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

/* Home Page */

#output {
  margin: auto;
  width: 800px;
  height: 1200px;
  position: relative;
  margin-bottom: 50px;
  padding: 50px;
  background-color: rgba(255,255,255,0.75);
  color: rgb(52,113,235);
  border: solid 10px rgb(52,113,235);
  margin-bottom: 25px;
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

/* Azimuth Calculation Page */

/* Gallery Page */

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

/* Individual Image Viewer Page */

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

</style>