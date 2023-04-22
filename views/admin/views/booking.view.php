<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

</body>

</html>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <table class="table table-bordered table-dark">
        <thead>

            <tr>
                <th scope="col">Customer name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact number</th>
                <th scope="col">Booking start date</th>
                <th scope="col">Booking end date</th>
                <th scope="col">Total cost</th>
                <th scope="col">Status</th>
                <th scope="col">Verify</th>

            </tr>

        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td>
                        <?= ($customer["Customer_name"]) ?>
                    </td>
                    <td>
                        <?= ($customer["Email"]) ?>
                    </td>
                    <td>
                        <?= ($customer["Contact_number"]) ?>
                    </td>
                    <td>
                        <?= ($customer["Booking_start_date"]) ?>
                    </td>
                    <td>
                        <?= ($customer["Booking_end_date"]) ?>
                    </td>

                    <td>
                        <?= ($customer["tottal_cost"]) ?>
                    </td>
                    <td>
                        <?= ($customer["status"]) ?>
                    </td>

                    <td><a href="/verification?id=<?= ($customer["id"]) ?>">verify</a></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <p class="mt-3">
        <a href="/cars" class="text-black-400 hover:underline">Back to home</a>
    </p>


</div>
</main>