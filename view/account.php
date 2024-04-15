<div class="container">
    <div class="row">
        <div class="col">
            <h2>Hello <?= $_SESSION["firstname"] ?> <?= $_SESSION["lastname"] ?></h2>
        </div>
        <a href="list" onclick="return false;">List</a>
        <a href="receipts" onclick="return false;">Receipts</a>
        <a href="login">Disconnect</a>
    </div>
</div>