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

      /* .main-block {
flex-direction: row;
height: calc(100% - 50px);
} */
      /* .left-part, form {
flex: 1;
height: auto;
}  */
    }
  </style>
</head>

<body>
  <div class="main-block">
    <div class="left-part">
      <h3><b>" Don't Dream It , Drive It! "</b> </h3>
      <p>" Make Your Traveling Easier This Lockdown With Us Rent A Car Today "</p>


    </div>
    <form method="POST" action="/booking">
      <input type="hidden" name="id" value="<?= $car['id'] ?>">
      <input type="hidden" name="remember" value="true">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Booking</h2>
      </div>
      <div class="info">

        <label for="name" class="sr-only">Enter your name</label>
        <input id="name" name="name" type="text"
          class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
          placeholder="Enter your name">
        <?php if ($errors): ?>
          <p class="text-red-500" style="color:red">
            <?= $errors['name'] ?>
          </p>
        <?php endif ?>


        <label for="email" class="sr-only">Email address</label>
        <input id="email" name="email" type="email" autocomplete="email"
          class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-black focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-gray"
          placeholder="Email address">

        <?php if ($errors): ?>
          <p class="text-red-500" style="color:red">
            <?= $errors['email'] ?>
          </p>
        <?php endif ?>

        <label for="number" class="sr-only">phone number</label>
        <input id="number" name="number" type="number"
          class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
          placeholder="contact number">

        <?php if ($errors): ?>
          <p class="text-red-500" style="color:red">
            <?= $errors['number'] ?>
          </p>
        <?php endif ?>

        <span name="total_price">total price:
          <?= $total_price ?>
        </span>
        <input type="hidden" name="total_price" value="<?= $total_price ?>">

      </div>

      <button type="submit"
        class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

        Book your vehicle
      </button>
    </form>

  </div>
</body>

</html>