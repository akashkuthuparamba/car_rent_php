<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>


</head>

<body class="h-full">

  <div class="min-h-full">


    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
          <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="mt-5 md:col-span-2 md:mt-0">
              <form method="POST" action="/cars" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $car['id'] ?>">

                <div class="shadow sm:overflow-hidden sm:rounded-md">

                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Car type</label>
                      <div class="mt-2">
                        <select class="form-select" aria-label="Default select example" name="Car_type_id">

                          <?php foreach ($car_types as $car_type): ?>

                            <option name="Car_type_id" value="<?= $car_type['id'] ?>"><?= $car_type['Car_type'] ?></option>


                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>

                  </div>


                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Car makes</label>
                      <div class="mt-2">
                        <input type="text" name="Car_makes" value="<?= $car['Car_makes'] ?>">
                      </div>
                    </div>

                  </div>


                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">model</label>
                      <div class="mt-2">
                        <input type="text" name="model" value="<?= $car['model'] ?>">
                      </div>
                    </div>

                  </div>

                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">plate number</label>
                      <div class="mt-2">
                        <input type="text" name="Plate_number" value="<?= $car['Plate_number'] ?>">
                      </div>
                    </div>

                  </div>


                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">year</label>
                      <div class="mt-2">
                        <input type="number" name="Year" value="<?= $car['Year'] ?>">
                      </div>
                    </div>

                  </div>



                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">color</label>
                      <div class="mt-2">
                        <input type="text" name="Color" value="<?= $car['Color'] ?>">
                      </div>
                    </div>

                  </div>



                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Rentel cost</label>
                      <div class="mt-2">
                        <input type="number" name="Rentel_cost" value="<?= $car['Rentel_cost'] ?>">
                      </div>
                    </div>

                  </div>



                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">About car</label>
                      <div class="mt-2">
                        <input type="text" name="About_car" value="<?= $car['About_car'] ?>">
                      </div>

                    </div>

                  </div>




                  <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">image</label>
                      <div class="mt-2">
                        <input type="file" name="Image">
                      </div>
                    </div>

                  </div>

                  <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end">
                    <a href="/cars"
                      class="inline-flex justify-center rounded-md bg-gray-500 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                      Cancel
                    </a>

                    <button type="submit"
                      class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
                  </div>


                </div>
              </form>

              <td><button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Delete
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">

                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="p-3 mb-2 bg-secondary text-white">
                        <p>Are you sure</p>
                      </div>
                      <div class="modal-footer">

                        <button type="submit" data-bs-dismiss="modal">cancel</button>
                        <form class="mt-6" method="POST" action="/cars">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="id" value="<?= $car['id'] ?>">
                          <button class="text-sm text-red-500">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>

            </div>
          </div>
        </div>



        <!-- form end -->
      </div>
    </main>

  </div>

</body>

</html>