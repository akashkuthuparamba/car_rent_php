<form action="/verification" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $id ?>">

    <select class="form-select" aria-label="Default select example" name="verification">


        <option name="verification" value="Unverified">Unverified</option>

        <option name="verification" value="Verified">Verified</option>


    </select>

    <button type="submit"
        class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>


</form>