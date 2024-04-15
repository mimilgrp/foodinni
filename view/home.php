<div class="container">
    <div class="row">
        <div class="col">
            <h2>Welcome to your new favorite&nbsp;store !</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php $itemsdiscounts = getAllItemsDiscounts() ?> 
            <h3>Discounts</h3>
            <div class="car">
                <?php foreach ($itemsdiscounts as $itemdiscount): ?>
                <a href="item?ean13=<?= $itemdiscount->ean13 ?>" onclick="return false;">
                    <div class="car-item">
                        <img src="<?= $itemdiscount->image ?>">
                        <p class="name"><?= $itemdiscount->name ?></p>
                        <?php $oldprice = $itemdiscount->price - ($itemdiscount->price * $itemdiscount->discount) ?>
                        <p class="price"><?= sprintf("%.2f", $oldprice) ?>€</p>
                        <p class="old-price"><?= sprintf("%.2f", $itemdiscount->price) ?>€</p>
                        <p class="discount">-<?= $itemdiscount->discount * 100 ?>%</p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col d-none d-lg-block">
            <div class="adv">
                <a href="items?brand=pirkka" onclick="return false;">
                    <img src="img/ad-large.png">
                </a>
                <p>Advertising</p>
            </div>
        </div>
        <div class="col d-block d-lg-none">
            <div class="adv">
                <a href="items?brand=pirkka" onclick="return false;">
                    <img src="img/ad-small.png">
                </a>
                <p>Advertising</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php $categories = getAllCategories() ?> 
            <h3>Categories</h3>
            <div class="car">
                <?php foreach ($categories as $category): ?>
                <a href="items?category=<?= $category->name ?>" onclick="return false;">
                    <div class="car-item">
                        <img src="<?= $category->image ?>">
                        <p class="name"><?= $category->name ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2>Use a Customer Account</h2>
        </div>
        <div class="col-lg-4">
            <div class="tile">
                <div class="tile-item">
                    <h4>Create a Customer Account on this website</h4>
                    <p>Select the Account icon at the top right to register on our platform and access customer benefits</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="tile">
                <div class="tile-item">
                    <h4>Add your items to your new shopping list</h4>
                    <p>Select the items of your choice on our site then add them to your personal shopping list by clicking on the List icon</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="tile">
                <div class="tile-item">
                    <h4>Find your items in one click for your next shopping</h4>
                    <p>Click the List icon again the next time you visit a Foodinni store, don't forget any items again</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php $brands = getAllBrands() ?> 
            <h3>Brands</h3>
            <div class="car">
                <?php foreach ($brands as $brand): ?>
                <a href="items?brand=<?= $brand->name ?>" onclick="return false;">
                    <div class="car-item">
                        <img src="<?= $brand->image ?>">
                        <p class="name"><?= $brand->name ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Do you like Foodinni ?</h2>
            <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button"
                data-slug="mimil_grp" data-color="#FFDD00" data-emoji=""  data-font="Cookie" data-text="Buy me a coffee"
                data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff"></script>
        </div>
    </div>
</div>