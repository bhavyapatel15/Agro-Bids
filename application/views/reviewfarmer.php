<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
     <style>

.container {
    width: 100%;
    height: 100%;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.description {
    text-align: center;
    width: 43%;
}

.clientImage {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.clientImage span {
    margin-left: 10px;
}

.clientImage img {
    width: 40px;
}



.reviewItem {
    width: 300px;
    padding: 10px;
    margin: 1rem;
    cursor: pointer;
    border-radius: 10px;
    background-color: #10102a;
    border: 1px solid #10102a;
    transition: all .2s linear;
}

.reviewItem:hover {
    border-color: aqua;
    transform: scale(1.01);
    background-color: #090921;
    box-shadow: 0 0px 5px 0px #cbc0c0;
}

.top {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.top ul {
    display: flex;
    list-style: none;
}

.top ul li {
    padding-left: 4px;
}

article p {
    font-size: 15px;
    font-weight: 100;
    margin-bottom: 1rem;
    font-family: system-ui;
}

@media screen and (max-width:375px) {
    .reviewSection {
        padding: 0;
    }

    .reviewItem {
        width: 100%;
    }

    .clientImage {
        margin-bottom: 0.6rem;
    }

    .top {
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }
}
     </style>
   </head>

   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
      
      <section class="py-4 osahan-main-body">
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                  <div class="container">
                       <h2> Our Happy Clients </h2>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, atque? Repudiandae
                        possimus asperiores hic nemo id a molestiae minus impedit!</p>
              
                      <div class="reviewSection">        
                         <div class="reviewItem">
                            <div class="top">
                                <div class="clientImage">
                                    <img src="./client.png" alt="">
                                    <span>Raju Sheoran</span>
                                </div>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                            </div>
                            <article>
                                <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                                    voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                                    facere exercitationem!</p>
                                <p>Jan 01, 2023</p>
                            </article>
                         </div>
                      </div>
                  </div>
            </div>      
         </div>
      </section>
      
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>