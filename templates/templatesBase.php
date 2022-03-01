<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="view/main.css">
    </head>
    <body>
        
        <?php 
            echo $mainContent;
        ?>

        <div class="hrLine2">
        <hr class="hrLine" style="border: 2px solid;">
        </div>
        <p class='cnt'>Scandiweb Test assignment</p>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
        <script src="../js/formJS.js"></script>
    </body>
</html>
