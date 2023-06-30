<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <title>menu</title>

</head>

<body>
    <form action = "/menu_insert" method = "post">
        @csrf <!-- {{ csrf_field() }} -->
        <h3 class="text-center mb-4 text-black">Add your new MenuS</Menu></h3>


        <div class="form-group">
            <label class="mb-1 text-black" for="Name"><strong>Name</strong></label>
            <div><input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Menu Name" required></div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black" for="Description"><strong>Description</strong></label>
            <div><input type="text" class="form-control" id="Description" name="Description" placeholder="Enter Description" required></div>
        </div>

        <div class="form-group">
            <label class="mb-1 text-black" for="Image1"><strong>Image</strong></label>
            <div><input type="file" class="form-control" id="Image1" name="Image1" placeholder="Enter Meal Image" required></div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black" for="Image2"><strong>Image</strong></label>
            <div><input type="file" class="form-control" id="Image2" name="Image2" placeholder="Enter Meal Image" ></div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black" for="Image3"><strong>Image</strong></label>
            <div><input type="file" class="form-control" id="Image3" name="Image3" placeholder="Enter Meal Image" ></div>
        </div>
        <div class="form-group">
            <label class="mb-1 text-black" for="Category"><strong>Category</strong></label>
            <div><select name="Category" id="Category">
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
              </select>
              <br><br>
            </div>
        </div>

        <div class="form-group text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block" id="dz-signup-submit" href="#sign-up">Register</button>
        </div>
    </form>


    <a href="/view_menu">Click Here to view menus.</a>
</body>
</html>




