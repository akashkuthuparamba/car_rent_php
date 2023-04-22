<!DOCTYPE html>
<html>

<head>
    <title>Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }

        body {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0oGOhkTqAPJGUvFzb1RavF_YhF3efhriywA&usqp=CAU");
            background-size: cover;
        }

        h4,
        h2 {
            text-transform: uppercase;
            font-weight: 400;
        }

        h2 {
            margin: 0 0 0 8px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: center;
            height: 100%;
            padding: 2px;
            background: rgba(0, 0, 0, 0.5);
        }

        .left-part,
        form {
            padding: 40px;
        }

        .left-part {
            text-align: center;
        }

        .fa-graduation-cap {
            font-size: 72px;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
        }

        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        input,
        select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

        input::placeholder {
            color: #eee;
        }

        option:focus {
            border: none;
        }

        option {
            background: black;
            border: none;
        }

        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }

        .checkbox a {
            color: #26a9e0;
        }

        .checkbox a:hover {
            color: #85d6de;
        }

        .btn-item,
        button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #26a9e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }

        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }

        button {
            width: 100%;
        }

        button:hover,
        .btn-item:hover {
            background: #85d6de;
        }

        @media (min-width: 568px) {

            html,
            body {
                height: 100%;
            }

            .list-group {
                display: flex;
                flex-direction: column;
                justify-content: top;
                align-items: center;
                height: 100%;
                padding: 25px;
                background: rgba(0, 0, 0, 0.5);
            }

        }
    </style>
</head>

<body>
    <div class="main-block">
        <div class="left-part">
            <h3><b>" Don't Dream It , Drive It! "</b> </h3>
            <p>" Make Your Traveling Easier This Lockdown With Us Rent A Car Today "</p>


        </div>

        <?= '<img src="data:image/jpeg;base64,' . base64_encode($car['Image']) . '" width="500" height="500"/>' ?>

        <p class="mt-3" style="padding:20">


            <tbody>
                <tr>
                    <h4>Car makes :
                        <?= ($car["Car_makes"]) ?>
                    </h4>
                    <h4>Model :
                        <?= ($car["model"]) ?>
                    </h4>
                    <h4>Plate number :
                        <?= ($car["Plate_number"]) ?>
                    </h4>
                    <h4>Year :
                        <?= ($car["Year"]) ?>
                    </h4>

                    <h4>Color :
                        <?= ($car["Color"]) ?>
                    </h4>
                    <h4> Rent cost :
                        <?= ($car["Rentel_cost"]) ?>
                    </h4>
                    <h5>About car : <p style="font-size:10px">
                            <?= ($car["About_car"]) ?>
                        </p>
                    </h5>

                </tr>

                <a href="/car/user_details?id=<?= $car['id'] ?>" class="text-black-400 hover:underline"
                    style="font-size:30px">Book car</a>
        </p>

    </div>
    </form>
    </div>
</body>

</html>