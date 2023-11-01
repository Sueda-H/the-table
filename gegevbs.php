<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="tabel.css">
  <title></title>

  <table cellspacing="0" cellpadding="0" id="table_one">
    <tr>
      <th>billing country</th>
      <th> order count</th>
      <th>amount</th>
    </tr>
    <?php
    try {
      $pdo = new PDO("mysql:host=localhost;dbname=thetable", 'bit_academy', 'bit_academy');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    $top = $pdo->query("SELECT  Billing_Country, Amount, Order_Count  FROM landen
              ORDER BY  Order_Count DESC");
    foreach ($top as $row) { {
        echo "<tr><td>" . $row['Billing_Country'] . "</td><td>" . $row['Order_Count'] . "</td><td>" . $row['Amount'] . "</td></tr>";
      }
    }
    ?>
  </table>


  <table cellspacing="0" cellpadding="0" id="table_two">
    <tr>
      <th>billing country</th>
      <th> order count</th>
      <th>amount</th>
    </tr>
    <?php
    try {
      $pdo = new PDO("mysql:host=localhost;dbname=thetable", 'bit_academy', 'bit_academy');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    $top = $pdo->query("SELECT  Payment_Method, Amount, Order_Count  FROM payment
              ORDER BY  Order_Count DESC LIMIT 6");
    foreach ($top as $row) { {
        echo "<tr><td>" . $row['Payment_Method'] . "</td><td>" . $row['Order_Count'] . "</td><td>" . $row['Amount'] . "</td></tr>";
      }
    }
    ?>
  </table>

  <table cellspacing="0" cellpadding="0" id="table_three">
    <tr>
      <th>category</th>
      <th> aantal</th>
      <th>totaal</th>
    </tr>
    <?php
    try {
      $pdo = new PDO("mysql:host=localhost;dbname=thetable", 'bit_academy', 'bit_academy');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    $top = $pdo->query("SELECT  Category_Name, Amount, Quantity  FROM exportcat
              WHERE Quantity > 2000 LIMIT 10");
    foreach ($top as $row) { {
        echo "<tr><td>" . $row['Category_Name'] . "</td><td>" . $row['Quantity'] . "</td><td>" . $row['Amount'] . "</td></tr>";
      }
    }
    ?>
  </table>