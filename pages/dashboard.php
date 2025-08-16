<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home" />
</head>
<body>
    <?php
        require_once __DIR__ . '/../includes/nav.php';
    ?> 

<div class="content_wrapper">
    <div class="balance_wrapper">
        <div class="balance_container">
            <h2>Balance</h2>
            <h1>₱ 15,000.00<?php ?></h1>
        </div>
        <div class="balance_stats">
            <div class="container">
                <img src="../images/arrow up.png" alt="">
                <h1>Income ₱ 500.00</h1>
            </div>
        </div>
    </div>

    <div class="transaction_box">
        <h1>Recent Transactions</h1>
       <div class="table_scroll">
         <table class="content_table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwaganasddddddddddddasdasd</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
                <tr>
                    <td data-label="Date">10/2/25</td>
                    <td data-label="Description">bayad sa paluwagan</td>
                    <td data-label="Amount">250.00</td>
                    <td data-label="Status">completed</td>
                </tr>
            </tbody>
        </table>
       </div>
    </div>


    <div class="loan_container">
        <div class="current_loan">
            <h2>Current Loan</h2>
            <h1>Progress</h1>
            <div class="progress-container">
                <div class="progress-bar" style="width: 5%;"></div>
            </div>
            <h3>Loan Amount</h3>
            <h3>Monthly Payment</h3>
            <h3>Next Payment</h3>
        </div>
        <div class="loan_summary">
            <h2>Loan Summary</h2>
            <h3>Interest Rate</h3>
            <h3>Remaining Balance</h3>
            <h3>Payment History</h3>
        </div>
    </div>
</div>
    
       
   <script src="../script/transition.js"></script>
</body>
</html>

