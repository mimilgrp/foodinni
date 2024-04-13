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
                <a href="item?brand=pirkka" onclick="return false;">
                    <img src="https://images.ctfassets.net/kt8yvydomzor/Gw9ksuMEQQh8vxmO9jXoR/2a6993954c84ce524722f39ac23f244f/Pirkkahintaan_2024_etusivun_paraati_2300x576.jpg">
                </a>
                <p>Advertising</p>
            </div>
        </div>
        <div class="col d-block d-lg-none">
            <div class="adv">
                <a href="item?brand=pirkka" onclick="return false;">
                    <img src="https://images.ctfassets.net/kt8yvydomzor/40LnWOkIF1j1jKzTGoLMfe/5444224619c1e4222655486e262921db/Pirkka_brandilahto_omat_digimediat_2024_verkkosivukuva_1440x550.jpg?w=1440&h=550&fit=fill&f=top&q=90&fm=avif">
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
                <a href="category?name=<?= $category->name ?>" onclick="return false;">
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
        <div class="col">
            <?php $brands = getAllBrands() ?> 
            <h3>Brands</h3>
            <div class="car">
                <?php foreach ($brands as $brand): ?>
                <a href="brand?name=<?= $brand->name ?>" onclick="return false;">
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
            <h2>Do you like Foodinni ?</h2>
        </div>
    </div>
</div>