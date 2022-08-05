<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">hello-world </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello world</h1>"; ?>
                <hr>
                <?php
                print('<p class="text-start lh-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo consequuntur accusamus labore. Temporibus, tempore. Aliquam magnam expedita, harum, asperiores a quis voluptatibus cum facilis voluptas iure exercitationem facere temporibus.
                Aut qui necessitatibus, aspernatur cumque incidunt quaerat esse voluptatum. Blanditiis amet tenetur nobis illo assumenda, animi, ea perferendis quo alias harum minima fugiat maxime quibusdam officiis. Consectetur maiores nemo hic!
                A nulla repellendus ex, neque odit reprehenderit numquam ratione harum, atque quo impedit fugit non placeat omnis iure quia. Voluptatibus voluptate fugiat dolores est inventore voluptates, esse ducimus assumenda dolorem?
                Corrupti ipsum dicta quam rem ab amet asperiores, aperiam similique, ut, id molestiae laboriosam distinctio quisquam veniam repellendus sunt numquam quo dignissimos. Quaerat quisquam ipsam officia adipisci voluptatum distinctio vel.
                Totam laudantium saepe, provident est amet rerum nemo eum, praesentium ullam unde eligendi autem fugiat expedita alias asperiores magnam tenetur sunt. Fugiat consectetur quasi quo beatae nemo, maiores repudiandae? A?
                Ipsa odit ipsum sequi similique animi obcaecati doloremque. Hic modi quo, distinctio esse maxime nostrum quis dolores iure expedita, unde velit consequuntur quod accusantium temporibus molestiae possimus, officiis sunt. Exercitationem.
                Itaque ipsam odit aliquid quaerat odio possimus totam minima accusantium blanditiis aliquam nisi libero velit architecto quasi eveniet, est labore repellendus culpa debitis tempore qui tenetur asperiores eius dolorem! Alias.
                Perferendis animi ipsam aut deleniti, sequi error voluptatum fuga asperiores iure reprehenderit totam molestias quisquam laboriosam provident labore blanditiis fugiat pariatur ullam earum odio minima dicta! Omnis qui rem quasi.
                Suscipit tempora omnis impedit odio, culpa saepe placeat eum, blanditiis quaerat a laboriosam. Nobis fuga architecto perspiciatis porro totam odit tenetur accusamus maxime ab, obcaecati doloremque earum fugiat deleniti delectus!
                Cum quas autem, nam maiores perspiciatis repellat! Atque tempore consequuntur, eos numquam praesentium qui necessitatibus dicta? Fugit labore hic error a natus repellat asperiores ipsa veniam, sed perspiciatis quae quasi!
                
               </p>')
               ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>