<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/schedule.css"/>
    <title>Schedule Your Meet</title>
</head>
<body>






<div class="Container1">

<h1>Add Inventory to Lab</h1>

<form action="" method="post" id="">

    <label for="serial-no">Serial No:</label>
    <input type="text" id="serial-no" name="serial_no" required>
    <label for="purchase-date">Purchase Date:</label>
    <input type="date" id="purchase-date" name="purchase_date" required>
    <br><br>
    <label for="Inventory-Description">Inventory Description:</label>
    <input type="Text" id="Inventory-Description" name="Inventory_Description" required>
    <label for="labrotary">Laboratory:</label>
    <select id="labrotary" name="labrotary" required>
        <option value="">Select a Laboratory</option>
        <option value="MB-407-A">MB-407-A</option>
        <option value="MB-407-B">MB-407-B</option>
        <option value="MB-408-A">MB-408-A</option>
        <option value="MB-408-B">MB-408-B</option>
        <option value="MB-409">MB-409</option>
        <option value="MB-413">MB-413</option>
        <option value="MB-414">MB-414</option>
        <option value="Blockchain-lab">Blockchain-lab</option>

    </select>
    <label for="Purchase-Price">Purchase Price:</label>
    <input type="number" id="Purchase-Price" name="Purchase_Price" required>
    <label for="dsr-number">DSR Number:</label>
    <input type="text" id="dsr-number" name="dsr_number" required>
    
    <input type="text" name="image_url" id="imageUrlInput" placeholder="Enter image URL">
    <div id="qrCode"></div>
    
    <input type="submit" id='submit'  name='additem' value="Add Item">
    <!-- <button name='additem' value="Generate QR Code" onclick="generateQRCode()"> -->
    <button type="button" id="imageUrlInput"  onclick="generateQRCode()" style="margin:10px;">Generate QR Code</button>
    <!-- <input type="submit" name='additem' value="Add Inventory"> -->
    <!-- <button name='additem' value="Generate QR Code" onclick="generateQRCode()"> -->
    

</form>


</div>

    
<script>
</script>
</body>
</html>