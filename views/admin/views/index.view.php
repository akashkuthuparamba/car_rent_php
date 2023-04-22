<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


</head>
<body>
    
</body>
</html>




  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    
    <p class="text-black-400 hover:underline"><a href="/customers">Customers</a></p>

    <h1>Cars</h1>
            <table class="table table-bordered table-dark">
            <thead>
           
                <tr>
                <th scope="col">Sl.no</th>
                <th scope="col">Car _type</th>

                <th scope="col">Car makes</th>

                <th scope="col">Model</th>
                <th scope="col">Plate number</th>
                <th scope="col">Year</th>
                <th scope="col">Color</th>
                <th scope="col">Rentel cost</th>
                <th scope="col">About car</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>




                </tr>
               
            </thead>
            <tbody>
            <?php foreach($cars as $car):?>
                
               
                <tr>
                <?php $sl_no+=1 ?>
                <td><?=$sl_no?></td>
                <td><?=($car_type[$car['Car_type_id']-1]['Car_type'])?></td>

                <td><?=($car["Car_makes"])?></td>
                <td><?=($car["model"])?></td>
                <td><?=($car["Plate_number"])?></td>
                <td><?=($car["Year"])?></td>

                <td><?=($car["Color"])?></td>
                <td><?=($car["Rentel_cost"])?></td>
                <td><?=($car["About_car"])?></td>
                <td><?='<img src="data:image/jpeg;base64,'.base64_encode($car['Image']).'" width="100" height="100"/>'?></td>



                
                <td><a href="/car/edit?id=<?= $car['id'] ?>">Click here</a></td>

                <td >
                    <form class="mt-6" method="POST" action="/cars">
                        <input type="hidden" name="_method" value="DELETE" >
                        <input type="hidden" name="id" value="<?= $car['id'] ?>">
                        <button class="text-sm text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                


                </tr>

                <?php endforeach ?>   
            </tbody>
            </table>
        <p class="mt-3">
            <a href="/cars/create" class="text-black-400 hover:underline">Add Car</a>
        </p>

        <div class="ml-5">
            <form action="/logout" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button class="text-sm text-red-500">Log Out</button>
            </form>
         </div>
    </div>
  </main>



