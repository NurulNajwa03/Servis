<?php 
//sambungan ke pangkalan data
include "config.php";
//sambung fail header
include "header.php";
//mulakan sesi login untuk kekalkan login
?>

  <html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
      <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet"/>
      <link rel="stylesheet" href="style.css">
      <title>Servis laptop</title>
    </head>
    <body>
        <table style="width: 900px;margin-left:15px;margin-top: 20px;">  
            <tr style="border:2px solid #112D4E; height:300px; ">
                <td ><img src="New folder/images.jpg" alt="" style="width: 300px; height:250px;  margin-left: 10px;border-radius:5px;"></td>
                <td style="padding-left: 15px; text-align: justify; padding-right: 10px;">
                Service options: In-store shopping · Kerbside pickup · Delivery <br>
                Address: 58, Jalan Bunga Pekan 2, Taman Seri, 42700 Banting, Selangor<br>
                Areas served: 42700 and nearby areas<br>
                Phone: 012-650 4254
                <br><br>
                
                <a href="https://www.google.com/maps?ll=3.001901,101.627821&z=11&t=m&hl=en&gl=MY&mapclient=embed&q=Puchong+Selangor"><svg class="location" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>a</svg></a>
                
                <svg class="like" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF" viewBox="0 0 16 16" onclick="myFunction()" >
                    <script>
                      function myFunction() {
                      alert("have been add to likes");
                      }
                    </script>
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>

                <svg class="right" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg> 

                <svg class="delete" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16" type="button">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>

                <a href="feedback.php"><svg class="feedback" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>

               <div class="collapse" id="collapseExample" > 
                ASUS is passionate about technology and driven by innovation. We dream, we dare and we strive to create an effortless and joyful digital life for everyone. We're always in search of incredible ideas and experiences, and we aspire to deliver the incredible in everything we do.
                </div >
              </td> 
            </tr>
        </table><br><br>

        <table style="width: 900px; margin-left:15px; " >  
            <tr style="border:2px solid #112D4E; height:300px; ">
                <td ><img src="New folder/download.jpg" alt="" style="width: 300px; height:250px;  margin-left: 10px;border-radius:5px;"></td>
                <td style="padding-left: 15px; text-align: justify; padding-right: 10px;">
                Service options: In-store shopping · Kerbside pickup · Delivery <br>
                Address: 204, Jalan Sultan Abdul Samad, Banting, 42700 Banting, Selangor<br>
                Areas served: 42700 and nearby areas<br>
                Phone: 012-320 4254
                <br><br>
                
                <a href="https://www.google.com/maps?ll=3.001901,101.627821&z=11&t=m&hl=en&gl=MY&mapclient=embed&q=Puchong+Selangor"><svg class="location" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>a</svg></a>
                
                <svg class="like" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF" viewBox="0 0 16 16" onclick="myFunction()" >
                    <script>
                      function myFunction() {
                      alert("have been add to likes");
                      }
                    </script>
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>

                <svg class="right" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg> 

                <svg class="delete" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16" type="button">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>

                <a href="feedback.php"><svg class="feedback" xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#3F72AF"  viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>

                <div class="collapse" id="collapseExample" > 
                ASUS is passionate about technology and driven by innovation. We dream, we dare and we strive to create an effortless and joyful digital life for everyone. We're always in search of incredible ideas and experiences, and we aspire to deliver the incredible in everything we do.
                </div >
                </td> 
            </tr>
        </table><br><br>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127498.971696528!2d101.55778015631604!3d3.00207024530478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb4858700458b%3A0x450f0f6588f66ff!2sPuchong%2C%20Selangor!5e0!3m2!1sen!2smy!4v1655821055252!5m2!1sen!2smy" width="300" height="450" style="border:10px;  position: relative; left: 490px; bottom:700px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </body>
  </html>