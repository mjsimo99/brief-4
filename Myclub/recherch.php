<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
    <style>
        nav.navbar.navbar-expand-lg.bg-dark.bg-gradient {
        position: relative!important;
        --bs-bg-opacity: 100%!important;
       
        } 
     

    </style>


</head>
<body>
<!-- navbar -->
<?php include 'pages/navbar.php'; ?>
<!-- parent div -->
<div class="father">
<!-- clubs -->
<div>
<div class="title1">
  <h3 id="title1">CLUBS</h3>
</div>
<div class="all_cards">
  <!--div father cars -->
<div class="card" style="width: 18rem;">
  <img src="images/clubs/sport.png" width="100%" height="180" alt="sport" style="border:1px solid rgb(0,0,0,0.13);">    
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <hr>
      <div class="member"><p id="member">Member : 0</p></div>
    </div>    

</div><!-- club end -->
</div><!-- end div mini father -->

<!-- member -->
<div class="table">
<div class="title2">
<caption>Members</caption>
</div>

<table class="table">
<thead>
    <tr>
    <th scope="col">id</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Class</th>
    <th scope="col">Age</th>
    <th scope="col">Role</th>

    </tr>
</thead>
<tbody>
    <tr>
    <th scope="row">1</th>
    <td>Mohamed-Amine</td>
    <td>Majidi</td>
    <td>Ada lovelace</td>
    <td>21</td>
    <td>President</td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>Amina</td>
    <td>Elhakik</td>
    <td>Ada lovelace</td>
    <td>10</td>
    <td>Member</td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td>Marouan</td>
    <td>AitElhaj</td>
    <td>Ada lovelace</td>
    <td>18</td>
    <td>Member</td>
    </tr>
    <tr>
    <th scope="row">4</th>
    <td>Esedik</td>
    <td>Rammach</td>
    <td>Margaret Hamilton</td>
    <td>22</td>
    <td>President</td>
    </tr>
    
    
    
    
</tbody>
</table>
</div>
<!-- member end -->
</div><!-- parent div end -->
<!-- footer -->
<footer>
    
<div class="footer_text"><p><span class="yc-title-1">You</span><span class="yc-title-2">Code</span> © 2020</p></div>
<div class="footer_icone">
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3V3h-3a5 5 0 0 0-5 5v2H7Z"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 4H8a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4Z"></path>
            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
            <path d="M16.5 7.5v.001"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 4H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"></path>
            <path d="M8 11v5"></path>
            <path d="M8 8v.01"></path>
            <path d="M12 16v-5"></path>
            <path d="M16 16v-3a2 2 0 0 0-4 0"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m8 20 4-9"></path>
            <path
                d="M10.7 13.998c.437 1.263 1.43 2 2.55 2 2.071 0 3.75-1.554 3.75-4a4.999 4.999 0 0 0-7.864-4.104A5 5 0 0 0 7.3 13.698">
            </path>
            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
        </svg>
        </div>
    </footer>
    <!-- footer end -->

</body>
</html>