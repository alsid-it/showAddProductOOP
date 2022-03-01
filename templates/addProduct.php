<p class='h1m'><?php echo $title; ?></p>
<form action="http://scandiwebtestwork2/" id='product_form' method="post">
<div class="rightButtons">
    <input type="submit" value="Save" class="up">
    <a href="http://scandiwebtestwork2/" class="btn">Cancel</a>
</div>
<div class="hrLine2">
    <hr class="hrLine" style="border: 2px solid;">
</div>
    <label>SKU </label>
    <input type="text" id='sku' name="sku" placeholder="Write sku">
    <br><br>
    <label>Name </label>
    <input type="text" id='name' name="name" placeholder="Write name">
    <br><br>
    <label>Price ($) </label>
    <input type="text" id='price' name="price" placeholder="Write price ($)">
    <br><br>
    <label>Type Switcher </label> 
        <select name='list' id='productType' class="required">
        <option value="" hidden >Type Switcher</option>
        <option value="dvd">DVD-dics</option>
        <option value="book">Book</option>
        <option value="furniture">Furniture</option>
    </select>

    <div id ="dvd" style="display: none" class="data">
        <br>
        <label>Size (MB) </label>
        <input type="text" id='size' name="size" placeholder="Write size">
        <p id="dvd">Please, provide disc space in MB</p>
    </div>

    <div id ="furniture" style="display: none" class="data">
        <br>
        <label>Height (CM) </label>
        <input type="text" id='height' name="height" placeholder="Write height">
        <br><br>
        <label>Width (CM) </label>
        <input type="text" id='width' name="width" placeholder="Write width">
        <br><br>
        <label>Length (CM) </label>
        <input type="text" id='length' name="length" placeholder="Write length">
        <p>Please, provide furniture height, width, length in CM</p>
    </div>
    
    <div id ="book" style="display: none" class="data">
        <br>
        <label>Weight (KG) </label>
        <input type="text" id='weight' name="weight" placeholder="Write size">
        <p>Please, provide book weight in KG</p>
    </div>

    </form>
