<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full ">

  <div class="min-h-full">
    <main>
      <div class="mx-auto bg-gray max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
          <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="mt-5 md:col-span-2 md:mt-0">
              <form method="POST" enctype="multipart/form-data">


                <div class="shadow sm:overflow-hidden sm:rounded-md">

                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


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


                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Car makes</label>
                      <div class="mt-2">
                        <input type="text" name="car_makes" placeholder="Car makes">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['car_makes'] ?>
                      </p>
                    <?php endif ?>
                  </div>


                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">model</label>
                      <div class="mt-2">
                        <input type="text" name="model" placeholder="model">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['model'] ?>
                      </p>
                    <?php endif ?>

                  </div>

                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">plate number</label>
                      <div class="mt-2">
                        <input type="text" name="plate_number" placeholder="plate number">
                      </div>
                    </div>

                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['plate_number'] ?>
                      </p>
                    <?php endif ?>

                  </div>


                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">year</label>
                      <div class="mt-2">
                        <input type="text" name="Year" placeholder="year">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['Year'] ?>
                      </p>
                    <?php endif ?>

                  </div>



                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">color</label>
                      <div class="mt-2">
                        <input type="text" name="Color" placeholder="color">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['Color'] ?>
                      </p>
                    <?php endif ?>

                  </div>



                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Rentel cost</label>
                      <div class="mt-2">
                        <input type="number" name="Rentel_cost" placeholder="Rentel cost">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['Rentel_cost'] ?>
                      </p>
                    <?php endif ?>

                  </div>



                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900">About car</label>
                      <div class="mt-2">
                        <input type="text" name="About_car" placeholder="About car">
                      </div>

                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['About_car'] ?>
                      </p>
                    <?php endif ?>

                  </div>




                  <div class="space-y-6 bg-gray px-4 py-5 sm:p-6">


                    <div>
                      <label for="body" class="block text-sm font-medium leading-6 text-gray-900"
                        name="Image">image</label>
                      <div class="mt-2">
                        <input type="file" name="Image">
                      </div>
                    </div>
                    <?php if ($errors): ?>
                      <p class="text-red-500">
                        <?= $errors['Image'] ?>
                      </p>
                    <?php endif ?>


                  </div>

                  <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end">
                    <a href="/cars"
                      class="inline-flex justify-center rounded-md bg-gray-500 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                      Cancel
                    </a>

                    <button type="submit"
                      class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                  </div>


                </div>
              </form>

            </div>
          </div>
        </div>



        <!-- form end -->
      </div>
    </main>
</body>

</html>