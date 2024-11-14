<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            background-color: grey; /* Light grey background for the page */
            font-family: Arial, sans-serif; /* Change font style */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
        }
        table {
            background-color: White; /* White background for the table */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            padding: 20px; /* Padding inside the table */
        }
        caption {
            margin-bottom: 20px; /* Space below the caption */
        }
        label {
            font-weight: bold; /* Bold labels */
        }
        input[type="number"],
        input[type="text"] {
            width: 100%; /* Full width inputs */
            padding: 10px; /* Padding inside inputs */
            margin: 5px 0; /* Space above and below inputs */
            border: 1px solid #ccc; /* Border around inputs */
            border-radius: 5px; /* Rounded corners for inputs */
        }
        button {
            padding: 10px 15px; /* Padding inside buttons */
            margin: 5px; /* Space around buttons */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners for buttons */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }
        button:hover {
            background-color: #007BFF; /* Change button color on hover */
            color: white; /* Change text color on hover */
        }
        button[type="button"] {
            background-color: #dc3545; /* Red background for clear button */
            color: white; /* White text for clear button */
        }
        button[type="submit"] {
            background-color: #28a745; /* Green background for operation buttons */
            color: white; /* White text for operation buttons */
        }
    </style>
</head>
<body>
<?php
    //jika + maka
    if (isset($_GET['tambah'])) {
        $hasil= $_GET['angka1'] + $_GET['angka2'];
    }
    //jika - maka
    elseif (isset($_GET['kurang'])) {
        $hasil= $_GET['angka1'] - $_GET['angka2'];
    } elseif (isset($_GET['kali'])) {
        $hasil= $_GET['angka1'] * $_GET['angka2'];
    } elseif (isset($_GET['bagi'])) {
        $hasil= $_GET['angka1'] / $_GET['angka2'];
    }
?>
    <form method="GET" action="index.php">
        <table>
            <caption><h4>KALKULATOR</h4></caption>
            <tr>
                <td><label>Angka1:</label></td>
                <td><input type="number" name="angka1" value="<?=$_GET['angka1'];?>"></td>
            </tr>
            <tr>
                <td><label>Angka2:</label></td>
                <td><input type="number" name="angka2" value="<?=$_GET['angka2'];?>"></td>
            </tr>
            <tr>
                <td><label>Hasil:</label></td>
                <td><input type="text" name="hasil" value="<?=$hasil?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="tambah" <?php echo isset($_GET['tambah']) ? 'style="background-color:red;"':''; ?>>+</button>
                    <button type="submit" name="kurang" <?php echo isset($_GET['kurang']) ? 'style="background-color:red;"':''; ?>>-</button>
                    <button type="submit" name="kali" <?php echo isset($_GET['kali']) ? 'style="background-color:red;"':''; ?>>*</button>
                    <button type="submit" name="bagi" <?php echo isset($_GET['bagi']) ? 'style="background-color:red;"':''; ?>>/</button>
                    <a href="index.php"><button type="button">Clear</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
