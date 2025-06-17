@include('componenti.header')
    @include('componenti.menu_head')

    <div class="container">
      <h1>La lista dei miei libri!</h1>  



      <div class="container my-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
<?php

        use App\Models\Book;

        /*
            L'istruzione che segue, nel php tradizionale equivale a:
            - apri una connessione con il database
            - esegui una query select * from books
            - risultato in una lista ciclabile
            - chiudi la connessione con il db
        */
        $mieiLibri = Book::all();

        foreach($mieiLibri as $libro){
            //echo "<h3>" . $libro->title . " (".$libro->year.")</h3>";
            //echo "<h4>" . $libro->author . "</h4>";
            //echo "<p>" . $libro->content . "</p>";
?>

            <div class="card" style="width: 18rem;
            ">
            <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $libro->title; ?></h5>
                <p class="card-text"><?php echo $libro->content; ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>

<?php
        }


?>
    </div>
  </div>
    </div>
    
@include('componenti.footer')