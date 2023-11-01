
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style_homepage.css">
    <title></title>

</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.jpeg">
        </div>
        </div>
        <div class="midden">
            <ol>Klant</ol>
            <ol>Collectie</ol>
        </div>    
    </div>    
        <div id="contents">
            <table cellspacing="0" cellpadding="0" id="table_one">
                <tr class="donker">
                    <td> Billing country</td>
                    <td> order count</td>
                    <td> amount</td>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td> <?php echo $row['Billing_Country']; ?> </td>
                    <td> <?php echo $row['Order_Count']; ?> </td>
                    <td> <?php echo $row['Amount']; ?> </td>
                    </tr>
                <?php
                }
                ?>

                </tr>

            </table>

            <?php

            include 'conn.php';
            $query = "SELECT * FROM payment ";

            $result = mysqli_query($con, $query);

            ?>
            <table cellspacing="0" cellpadding="0" id="table_two">
                <tr class="donker">
                    <td> Billing country</td>
                    <td> order count</td>
                    <td> amount</td>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td> <?php echo $row['Payment_Method']; ?> </td>
                    <td> <?php echo $row['Order_Count']; ?> </td>
                    <td> <?php echo $row['Amount']; ?> </td>
                    </tr>
                <?php
                }
                ?>

                </tr>
                
            </table>
            <?php

            include 'conn.php';
            $query = "SELECT * FROM exportcat ";

            $result = mysqli_query($con, $query);

            ?>
            <table cellspacing="0" cellpadding="0" id="table_three">
                <tr class="donker">
                    <td> article</td>
                    <td> hoeveelhied</td>
                    <td> totale prijs</td>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td> <?php echo $row['Category_Name']; ?> </td>
                    <td> <?php echo $row['Quantity']; ?> </td>
                    <td> <?php echo $row['Amount']; ?> </td>
                    </tr>
                <?php
                }
                ?>

                </tr>

            </table>

        </div>

</body>
<link rel = "stylesheet" href="style.css">
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
            foreach ($top as $row) {
               {
                echo "<tr><td>".$row['Billing_Country']."</td><td>".$row['Order_Count']."</td><td>".$row['Amount']."</td></tr>";

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
            foreach ($top as $row) {
               {
                echo "<tr><td>".$row['Payment_Method']."</td><td>".$row['Order_Count']."</td><td>".$row['Amount']."</td></tr>";

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
            foreach ($top as $row) {
               {
                echo "<tr><td>".$row['Category_Name']."</td><td>".$row['Quantity']."</td><td>".$row['Amount']."</td></tr>";

              }
            }
          ?>
        </table>
