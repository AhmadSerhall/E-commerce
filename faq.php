<!DOCTYPE html>
<html>
<head>
    <title>FAQs - Clothing Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        h3 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Frequently Asked Questions</h1>

        <?php
            // Define the FAQs as an associative array
            $faqs = array(
                "Q1" => "How long does shipping take?",
                "A1" => "Shipping typically takes 3-5 business days within the country.",
                "Q2" => "What payment methods do you accept?",
                "A2" => "We accept major credit cards such as Visa, Mastercard, and American Express, as well as PayPal.",
                "Q3" => "Do you offer international shipping?",
                "A3" => "Yes, we offer international shipping to select countries. Please check our shipping policy for more details.",
                "Q4" => "Can I return or exchange an item?",
                "A4" => "Yes, we have a hassle-free return and exchange policy. Please refer to our returns page for more information.",
                "Q5" => "How can I track my order?",
                "A5" => "Once your order is shipped, you will receive a tracking number via email. You can use this number to track your order on our website.",
                // Add more FAQs and answers as needed
            );

            // Loop through the FAQs and display them on the page
            foreach ($faqs as $key => $value) {
                if (strpos($key, 'Q') === 0) {
                    // Display the question
                    echo "<h3>$value</h3>";
                } elseif (strpos($key, 'A') === 0) {
                    // Display the answer
                    echo "<p>$value</p>";
                }
            }
        ?>

    </div>
</body>
</html>
