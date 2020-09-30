<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

</html>
<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="title">Judul Artikel</label>
        <input type="input" class="form-control" id="title" placeholder="Ketik nama judul artikel kamu" name="title" /><br />
    </div>
    <h2>Isi Artikel</h2>
    <div class="form-group">
        <label for="body"> Teks </label>
        <textarea name="body" class="form-control" rows="5" id="comment"></textarea><br />
    </div>
    <button type="submit" input type="submit" name="submit" class="btn btn-default">Submit</button>

</form>