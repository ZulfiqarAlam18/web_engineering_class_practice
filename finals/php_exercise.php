<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Account</title>
</head>
<body>

    <h2>Bank Account</h2>

    <form method="post">
        <label>Total Balance:</label>
        <p>
            <?php
                session_start();

                // If object not yet created in session
                if (!isset($_SESSION['account'])) {
                    $_SESSION['account'] = serialize(new BankAccount());
                }

                // Get the object from session
                $account = unserialize($_SESSION['account']);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['deposit'])) {
                        $account->deposit($_POST['deposit']);
                    } elseif (isset($_POST['withdraw'])) {
                        $account->withdraw($_POST['withdraw']);
                    }

                    // Save object back to session
                    $_SESSION['account'] = serialize($account);
                }

                echo $account->balance;
            ?>
        </p>

        <label>Deposit Amount:</label>
        <input type="number" name="deposit">
        <br><br>
        <label>Withdraw Amount:</label>
        <input type="number" name="withdraw">
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
        // BankAccount class
        class BankAccount {
            public $balance = 0;

            public function deposit($amount) {
                $this->balance += $amount;
            }

            public function withdraw($amount) {
                $this->balance -= $amount;
            }
        }
    ?>

</body>
</html>
