<form method="post">        
    <p class='h1m'><?php echo $title; ?></p>
    <div class="rightButtons">
        <a href="http://scandiwebtestwork2/add-product" class="btn">ADD</a>
        <input type="submit" id="delete-product-btn" value="MASS DELETE" class="up">
    </div>
    <div class="hrLine2">
        <hr class="hrLine" style="border: 2px solid;">
    </div>
    <!-- product space -->   
    <div class="products">
        <?php foreach ($products as $product): ?>
        <div class="product-wrapper">
            <input type="checkbox" name="sku[]" value='<?php echo $product['sku'];?>'>
            <br>
            <p><?php echo $product['sku'];?></p>
            <p><?php echo $product['name'];?></p>
            <p><?php echo number_format($product['price'], 2);?> USD</p>
            <?php if(isset($product['size'])){ ?>
                <p>Size: <?php echo $product['size'];?> MB</p>
            <?php } ?>
            <?php if(isset($product['weight'])){ ?>
                <p>Weight: <?php echo $product['weight'];?> KG</p>
            <?php } 
            if (isset($product['length'], $product['width'], $product['height'])){ ?>
                <p>
                    Dimension: <?php echo $product['height']; ?>x<?php echo $product['width']; ?>x<?php echo $product['length']; ?> CM
                    <?php } ?>
                </p>
            <!-- </div> -->
        </div>
        <?php endforeach;?>
    </div>
</form>