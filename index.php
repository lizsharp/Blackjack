<?PHP


$suits = ['diamonds', 'hearts', 'clubs', 'spades'];
$faceValues = ['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];
$pointValues = [11, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10];

$deck = [];

foreach ($suits as $suit) {
    foreach ($faceValues as $faceValue) {
        $card = ['suit' => $suit, 'faceValue' => $faceValue, 'pointsValue' => $pointValues[array_search($faceValue, $faceValues)]];
        shuffle($deck);
        array_push($deck, $card);
    }

}

// created function to select two different cards for each player
function selectCard (&$selection) : array {
    $hand = [];
    $hand[] = array_pop ($selection);
    $hand[] = array_pop ($selection);
    return $hand;
}

$playerOneHand = selectCard($deck);
$playerTwoHand = selectCard($deck);

var_dump ($playerOneHand);

echo '<br>';
echo '<br>';

var_dump ($playerTwoHand);

echo '<br>';
echo '<br>';

// created a function to calculate the points for each player and to announce the results
function calculateHand ($playerOneHand, $playerTwoHand) {
    $p1total = $playerOneHand [0] ['pointsValue'] + $playerOneHand [1] ['pointsValue'];
    $p2total = $playerTwoHand [0] ['pointsValue'] + $playerTwoHand [1] ['pointsValue'];
    if ($p1total > $p2total) {
        echo 'Player 1 wins!'; echo '<br>';
    }elseif ($p2total > $p1total){
        echo 'Player 2 wins!'; echo '<br>';
    }else {
        echo 'It\'s a draw!'; echo '<br>';
    }
}

calculateHand ($playerOneHand, $playerTwoHand);

//create function to display the suit and face value of the dealt cards

function displayCards ($playerOneHand, $playerTwoHand) {
    $p1Card1 = $playerOneHand[0]['faceValue'] . ' of ' . $playerOneHand[0]['suit'];
    $p1Card2 = $playerOneHand[1]['faceValue']  . ' of ' . $playerOneHand[1]['suit'];

    echo 'Player 1 card 1: ' . $p1Card1 . 'Player 1 card 2: '. $p1Card2;
    echo '<br>';

    $p2Card1 = $playerTwoHand[0]['faceValue'] . ' of ' . $playerTwoHand[0]['suit'];
    $p2Card2 = $playerTwoHand[1]['faceValue']  . ' of ' . $playerTwoHand[1]['suit'];

    echo 'Player 2 card 1: ' . $p2Card1 . ' Player 2 card 2: '. $p2Card2;
}

displayCards ($playerOneHand, $playerTwoHand);


//function calculatePoints (&$calculate) : int {
//    $score = [];
//    $score[] =
//}





//var_dump($deck);

//$deck = ['suits' => 'hearts']
//
//function randomCard () {
//    $suits = ['diamonds', 'hearts', 'clubs', 'spades'];
//    shuffle ($suits);
//    return ($suits);
//}
//echo randomCard ();

