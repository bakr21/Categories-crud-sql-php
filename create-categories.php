<?php require_once "./inc/header.php"; ?>
<?php require_once "./inc/nav-bar.php"; ?>
<?php require_once "./helper/dbfunction.php"; 
$categories = getAllCategories();
?>


<div class="container-md">
    <div class="title-page mt-3 text-center">
        <h3>Create Categories</h3>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h5>Add New Category</h5>
            <?php if (isset($_SESSION['success'])) : ?>

            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            <?php
            unset($_SESSION['success']);
        endif;
        ?>
            <form action="controllers/category/createcategorycontrollers.php" method="post" enctype="multipart/form-data" >
                <label for="inputPassword5" class="form-label">Name Category</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Name Category"  required>
                <div id="passwordHelpBlock" class="form-text">
                Please make sure that the category exists before adding a new category.
                </div>
                <div class="mb-3">
                <label class="form-label">Select Category Type</label>
                        <select class="form-select" name="type" aria-label="Default select example" required>
                            <option value="Main Category">Main Category</option>
                            <option value="Sub Category">Sub Category</option>
                        </select>

                    </div>
                <div class="col-6 d-grid gap-2 mx-auto mt-3">
            <button type="submit" class="btn btn-primary">Add Category</button>
        </div>
            </form>
        </div>
        <div class="col-md-8">
        <h5>Categories</h5>
        <?php if (isset($_SESSION['del'])) : ?>

        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['del'] ?>
        </div>

        <?php
        unset($_SESSION['del']);
        endif;
        ?>
        <div class="table-responsive">
        <table class="table table-striped mt-3 table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Type</th>
                <th scope="col">Related Products</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php foreach ($categories as $category) : ?>
                <th scope="row"><?= $category['id'] ?></th>
                <td><?= $category['name'] ?></td>
                <td><?= $category['type'] ?></td>
                <td > <a href="edit.php?id=" class="btn btn-warning btn-sm ">View Prodects</a></td>
                <td> 
 
                <form class="d-inline" action="controllers/category/updatacategorycontrollers.php" method="post">
                            <input type="hidden" name="id" value="<?= $category['id'] ?>">

                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </form>
                        <form class="d-inline" action="controllers/category/deletecategorycontrollers.php" method="post">
                            <input type="hidden" name="id" value="<?= $category['id'] ?>">

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        </div>
    </div> <!-- row -->

</div> <!-- container -->

<?php require_once "./inc/footer.php"; ?>
