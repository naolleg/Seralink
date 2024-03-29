<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Baskerville:wght@400;700&display=swap');
    *{
      font-family: "inter";
      margin:0px;
      padding:0px;
      box-sizing: border-box;
    }
    :root{
      --color:#3795b3;
    }
   
   .posts-container{
    position: absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-46%);
    width:55%;
   }
   .posts-container .box-container .box{
    border:3px solid var(--color);
    display: grid;
    grid-template-columns: repeat(2,1fr);
    width:100%;
    height:100%;
    margin-top:30px;
    border-radius: 8px;
   }
   .posts-container .box-container .box .content .title{
    padding:10px 20px;
    border-bottom: 3px solid var(--color);
   }
   .posts-container .box-container .box .content .sub-content .sub-section{
    padding:8px;
    display: flex;
    gap:4px;
   }
   .posts-container .box-container .box .content .descrption{
    text-align: center;
    padding:5px 10px;
    border-top: 1px solid var(--color);
   }
   .posts-container .box-container .box .content,
   .posts-container .box-container .box .controle{
    border: 3px solid var(--color);
   }
   .posts-container .box-container .box .controle{
    display: grid;
    grid-template-rows: repeat(2,1fr);
    text-align: center;
    height:100%;
    align-items: center;
   }
   .posts-container .box-container .box .controle .see-app{
    border-bottom: 3px solid var(--color);
    padding-bottom: 20px;
   }
   .posts-container .box-container .box .controle .delete a{
    color:red;
   }

   @media(max-width:855px){
    .posts-container .box-container .box{
      /* display: grid; */
      grid-template-columns: repeat(1,1fr);
    /* text-align: center;
    height:100%;
    align-items: center; */
   }
   }
  </style>
</head>
<body>
  <div class="posts-container">
    <div class="post-title">
      <h1>Posts</h1>
    </div>
    <div class="box-container">
      <div class="box">
      <div class="content">
        <div class="title">
          <h2>Civil Engineer</h2>
        </div>
        <div class="sub-content">
  
          <div class="sub-section">
            
            <iconify-icon icon="fa6-solid:handshake"></iconify-icon>
            
            <p>hirer:</p>
          </div>
          <div class="sub-section">
            
            <iconify-icon icon="fluent-emoji-flat:money-bag"></iconify-icon>
           
            <p>salary:</p>
          </div>
          <div class="sub-section">
            
            <iconify-icon icon="clarity:clock-line"></iconify-icon>
            <p>experience:</p>
          </div>
          <div class="sub-section">
            <iconify-icon icon="simple-line-icons:calender"></iconify-icon>
            <p>deadline day:</p>
          </div>
          <div class="sub-section">
            <iconify-icon icon="bx:category"></iconify-icon>
            <p>category:</p>
          </div>
        </div>
  
        <div class="descrption">
          <a href="">
            <iconify-icon icon="gg:details-more"></iconify-icon>
          </a>
          <span>descrption</span>
        </div>
      </div>
      <div class="controle">
        <div class="see-app">
          <a href="#">See Applicants</a>
        </div>
        <div class="delete">
          <a href="#">Delete post</a>
        </div>
      </div>
    