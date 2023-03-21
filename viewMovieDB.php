<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data JSON</title>
    <style>
        .card{
            width: 300px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $sumber = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=d03fffad88fa9f01fdf0717c3c6d67fe');
            $konten = utf8_encode($sumber);
            $data = json_decode($konten, true);
            // var_dump($data);
            $no = 1;
            foreach ($data['results'] as $key => $value) {
            ?>
                <div class="col-4">
                    <div class="card m-2 h-auto d-inline-block" style="">
                        <img class="image" src="<?php echo "https://image.tmdb.org/t/p/w185_and_h278_bestv2" . $value['poster_path'] ?>" class="card-img-top" alt="..." width="300" height="350">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['original_title'] ?></h5>
                            <h6 class="card-title"><?php echo $value['release_date'] ?></h6>
                            <p class="card-text"><?php echo $value['overview'] ?></p>
                            <!-- <a href="<?php echo $value['url'] ?>" class="btn btn-primary">View Article</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>


</body>

</html>

</table>