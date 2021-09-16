<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imie"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="submit" value="zatwierdz"><br>

      <?php
        if (isset($_GET["name"]) && isset($_GET["surname"])){
          echo <<< L
          Imię: {$_GET['name']}<br>
          Nazwisko: $_GET[surname]<br>
          L;}
        else {
          echo "Wypełnij wszystkie dane ;)"; // wykorzystać funkcje empty
        }
       ?>
    </form>
  </body>
</html>
