<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreign exchange futures </title>
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php include 'header.php' ?>

    <div class="homebanner blogSec">
        <div class="container">

            <div class="onlineTop">
                <h1>Foreign exchange futures </h1>
            </div>

            <div class="boxSec nohover">
            
            <p>The aim of this article is to consider both foreign exchange futures and options using real market data. The basics, which have been well examined in the recent past, will be quickly revisited. The article will then consider areas which, in reality, are of significant importance but which, to date, have not been examined to any great extent.</p>
            <h3>Foreign exchange futures – the basics</h3>
            <h4>Scenario</h4>
            <p>Imagine it is 10 July. A UK company has a US$6.65m invoice to pay on 26 August. They are concerned that exchange rate fluctuations could increase the £ cost and, hence, seek to effectively fix the £ cost using exchange traded futures. The current spot rate is $1.71110/£1.</p>
            <p>Research shows that £/$ futures, where the contract size is denominated in £, are available on the CME Europe exchange at the following prices:</p>
            <p>September expiry – 1.71035<br>
            December expiry – 1.70865</p>
            <p>The contract size is £100,000 and the futures are quoted in US$ per £1.</p>
            <p><strong>Note:<br>
            </strong>CME Europe is a London based derivatives exchange. It is a wholly owned subsidiary of CME Group, which is one of the world’s leading and most diverse derivatives marketplace, handling (on average) three billion contracts worth about $1 quadrillion annually!</p>
            <h4>Setting up the hedge</h4>
            <ol>
            <li><strong>Date? – September:<br>
            </strong>The first futures to mature after the expected payment date (transaction date) are chosen. As the expected transaction date is 26 August, the September futures which mature at the end of September will be chosen.</li>
            <li><strong>Buy/Sell? – Sell:<br>
            </strong>As the contract size is denominated in £ and the UK company will be selling £ to buy $ they should sell the futures.</li>
            <li><strong>How many contracts? – 39<br>
            </strong>As the amount to be hedged is in $ it needs to be converted into £ as the contact size is denominated in £. This conversion will be done using the chosen futures price. Hence, the number of contracts required is: ($6.65m ÷ 1.71035)/£100,000 ≈ 39.</li>
            </ol>
            <h4>Summary</h4>
            <p>The company will sell 39 September futures at $1.71035/£1.</p>
            <p><strong>Outcome on 26 August:<br>
            </strong>On 26 August the following was true:<br>
            Spot rate –&nbsp;$1.65770/£1<br>
            September futures price –&nbsp;$1.65750/£1</p>
            <p><strong>Actual cost:<br>
            </strong>$6.65m/1.65770 = £4,011,582</p>
            <p><strong>Gain/loss on futures:<br>
            </strong>As the exchange rate has moved adversely for the UK company a gain should be expected on the futures hedge.</p>

        
    </div>

        </div>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>