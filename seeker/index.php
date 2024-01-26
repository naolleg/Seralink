<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Componet</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <style>@import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Baskerville:wght@400;700&display=swap");

* {
  margin: 0;
  padding: 0;
  font-family: "inter";
}
.homepage .nav .logo img {
  width: 130px;
  height: auto;
  display: flex;
  padding-top: 20px;
  padding-left: 10px;
}

.homepage .nav {
  background-color: rgb(221, 222, 225);
  width: 100%;
  height: 100px;
  position: fixed;
}

.homepage .nav .links ul li a {
  text-decoration: none;
  color: #1c4b5a;
  padding-left: 50px;
}

.links ul {
  list-style-type: none;
  display: flex;
  padding-top: 50px;
  padding-left: 150px;
}

.homepage .nav .links ul li a:hover {
  color: #0f789c;
  text-decoration: underline #0a97c6;
}

.nav {
  display: flex;
}

.homepagebackground {
  background-image: url(Asset/engineer.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  width: 100%;
  height: 550px;
}

.heading1 {
  color: rgb(55, 149, 179);
  font-size: 3rem;
  margin-left: 20px;
  padding-top: 100px;
}

.homepagebackground .paragraph {
  color: #1c4b5a;
  padding: 90px 0px 10px 13px;
  font-size: 1.2rem;
}

.homepagebackground .search input {
  border: 1px solid rgb(31, 63, 141);
  border-radius: 5px;
  width: 55%;
  height: 40px;
  margin: 80px 0px auto 60px;
  padding-left: 27px;
}
a {
  text-decoration: none;
  color: black;
}
.search img {
  position: relative;
  right: 690px;
  top: 2px;
  width: 1%;
}
section .categories {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  padding: 50px;
  /* width: 80%; */
  /* margin-left: 20%; */
}
.add {
  margin-left: 10px;
  padding-left: 20px;
  background-color: whitesmoke;
}
section .categories .box {
  width: 100%;
  aspect-ratio: 1/1;
  text-align: center;
  align-items: flex-end;
  /* margin-top: 10px; */
}
section .categories .box .icon > iconify-icon {
  font-size: 80px;
  margin-bottom: 20px;
}

@media (max-width: 500px) {
  .add {
    display: none;
  }
  iconify-icon {
    width: 30%;
    font-size: 10px;
  }
  .fontTo {
    font-size: 10px;
  }
}
.page_title {
  color: #3795b3;
  margin-top: 20px;
  margin-left: 30px;
  border-bottom: 2px solid #3795b3;
  width: 50%;
  font-weight: bolder;
}

.container {
  background-color: #fff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  width: 380px;
  height: auto;
  margin-top: 30px;
  border: 2px solid #3795b3;
  border-radius: 20px;
  margin-left: 20px;
}

.title {
  width: 70%;
  margin: 15px 0 6px 25px;
  color: #3795b3;
}

.catagories {
  padding: 15px 0 10px 10px;
  font-size: 12px;
  font-weight: bolder;
}

.catagories tr td {
  padding: 6px;
}

.description {
  text-align: center;
  margin: 0px auto;
  border-top: 2px solid #3795b3;
  font-weight: bolder;
  font-size: 12px;
  padding: 7px;
}

.description span {
  padding-top: 70px;
}

@media (min-width: 600px) {
  .component {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .container {
    width: calc(50% - 30px);
    margin-top: 30px;
  }
}

@media (min-width: 900px) {
  .container {
    width: calc(33.33% - 40px);
  }
}</style>
  </head>
  <body>
  <section class="homepage">
    <div class="nav">
      <div class="logo">
        <img src="Asset/logo.png" alt="" />
      </div>
      <div class="links">
        <ul>
          <li></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="signup.php">signup</a></li>
          <li><a href="#">Feedback</a></li>
        </ul>
      </div>
    </div>
  
    <section class="homepagebackground">
      <div class="heading1">
        <h1>Connecting Careers,Empowering Dreams!</h1>
      </div>
      <div class="paragraph">
        <p>
          &nbsp; &nbsp; &nbsp;our platform offers a seamless and efficient way
          for individuals to
          <br />
          search and apply for their dream jobs while providing companies with
          <br />
          access to a vast ppol of talented professionals.
        </p>
      </div>
      <div class="search">
        <input type="search" name="searchjob" id="search" placeholder="Search for jobs" />
  
        <img src="Asset/photo_2024-01-04_22-35-06.jpg" alt="Search" />
      </div>
    </section>
  </section>
  <section class="category">
      <table>
        <tr>
          <td class="add">
            <section class="advertisement">
              <p>this section is open for advertisement</p>
            </section>
          </td>
          <td class="cat">
            <div class="title">
              <h1>Categories</h1>
            </div>

            <div class="categories">
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon class="fontTo"icon="mdi:art"></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Creative art and design</p>
                </div>
              </div> </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon
              class="fontTo" icon="healthicons:i-training-class"
                  ></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Teaching and Training</p>
                </div>
              </div>
              </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon class="fontTo"icon="icon-park:new-computer"></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Information technology</p>
                </div>
              </div> </a>
              
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon
                         class="fontTo" icon="flat-color-icons:sales-performance"
                  ></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Finance and Accounting</p>
                </div>
              </div>
              </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon
                     class="fontTo" icon="flat-color-icons:engineering"
                  ></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Engineering</p>
                </div>
              </div> </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon class="fontTo"icon="tabler:wave-saw-tool"></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Health care</p>
                </div>
              </div> </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon class="fontTo"icon="carbon:sales-ops"></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Sales and Marketing</p>
                </div>
              </div> </a>
             <a href=""> <div class="box">
                <div class="icon">
                  <iconify-icon class="fontTo"icon="ep:more-filled"></iconify-icon>
                </div>
                <div class="sub-title">
                  <p>Other</p>
                </div>
              </div> </a>
            </div>
          </td>
        </tr>
      </table>
    </section> 
    <section class="feedpage">
      <h1 class="page_title">Feed</h1>
      <div class="component">
        <div class="container">
          <h1 class="title">Civil Engineer</h1>
          <hr width="70%" color="#3795b3" />
          <table class="catagories">
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Hirer:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Salary:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Experience:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Deadline:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Catagory:</td>
            </tr>
          </table>
          <div class="description">
            <img src="./Asset/category.png" alt="" width="12px" />
            <span class="des">Description</span>
          </div>
        </div>
        <div class="container">
          <h1 class="title">Civil Engineer</h1>
          <hr width="70%" color="#3795b3" />
          <table class="catagories">
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Hirer:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Salary:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Experience:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Deadline:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Catagory:</td>
            </tr>
          </table>
          <div class="description">
            <img src="./Asset/category.png" alt="" width="12px" />
            <span class="des">Description</span>
          </div>
        </div>
        <div class="container">
          <h1 class="title">Civil Engineer</h1>
          <hr width="70%" color="#3795b3" />
          <table class="catagories">
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Hirer:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Salary:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Experience:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Deadline:</td>
            </tr>
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Catagory:</td>
            </tr>
          </table>
          <div class="description">
            <img src="./Asset/category.png" alt="" width="12px" />
            <span class="des">Description</span>
          </div>
        </div>
        <div class="container">
          <h1 class="title">Civil Engineer</h1>
          <hr width="70%" color="#3795b3" />
          <table class="catagories">
            <tr>
              <td>
                <img src="./Asset/handshake-outline.svg" alt="" />
              </td>
              <td>Hirer:</td>
              </tr>
              <tr>
                <td>
                  <img src="./Asset/handshake-outline.svg" alt="" />
                </td>
                <td>Salary:</td>
              </tr>
              <tr>
                <td>
                  <img src="./Asset/handshake-outline.svg" alt="" />
                </td>
                <td>Experience:</td>
              </tr>
              <tr>
                <td>
                  <img src="./Asset/handshake-outline.svg" alt="" />
                </td>
                <td>Deadline:</td>
              </tr>
              <tr>
                <td>
                  <img src="./Asset/handshake-outline.svg" alt="" />
                </td>
                <td>Catagory:</td>
              </tr>
              </table>
              <div class="description">
                <img src="./Asset/category.png" alt="" width="12px" />
                <span class="des">Description</span>
              </div>
              </div>
              </div>
              </section>
    </div>
    </div>
    </div>
    </section>

  </body>
</html> 