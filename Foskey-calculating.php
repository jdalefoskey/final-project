<!DOCTYPE html>
<html lang="en">
<head>
<!-- Algorithm for Foskey-calculating.php
            Include Foskey-inc-calc-functions.php
            Receive $scoresFile from Foskey-calculating.html
            While !feof $scoresFile
            Read $scoresFile
            Create $scores from $scoresFile
            Call avgArray($scores)
            Calculate $average
            Return $average
            Call highestInArray($scores)
            Calculate $highestNumber
            return $highestNumber,
            Call lowestInArray($scores)
            Calculate $lowestNumber 
            Return $lowestNumber 
            Call numPassingArray($scores)
            Calcualte $greaterEqual60
            Return $greaterEqual60
            Calcualate $totalNumberScores
            Return $totalNumberScores
            Open output.txt
            Write $average,$highestNumber,$lowestNumber,$greaterEqual60,$totalNumberScores
            Close output
			Display $image 
			Display $average
            Display $highestNumber
            Display $lowestNumber
            Display $greaterEqual60
		END  -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Scores and Arrays</title>
</head>
<body>
    <h1>Arrays with functions</h1>

<?php
    $scores = [];
    include("Foskey-inc-calc-function.php");
    // get the input from the html file
    $fileName = $_POST['fileName'];
    // Create a variable for the name of the file read
    $scoresFile = $fileName;
    // open the file for reading
    $scoresData = fopen("$fileName", 'r');
    //  while statement to say while its not the end of file we want to ...
    while (!feof($scoresData)) {
    $score = fgets($scoresData);
    array_push($scores, $score);
   
   }
    // after we are done we close the file
    fclose($scoresData);
    

    //  call the avgArray function and store results in a new variable
    $average = avgArray($scores);
    //  call the highestInArray function and store results in a new variable
    $highest = highestInArray($scores);
    //  call the lowestInArray function and store results in a new variable
    $lowest = lowestInArray($scores);
    //  call the numPassingArray function and store results in a new variable
    $numberPassing = numPassingArray($scores);
    // create a variable equal to the array length 
    $totalNumber = sizeof($scores);
    
    //  // Open or write  output.txt file to write the results
    //  $outputFile = fopen("output.txt", "w");
    // //  // // write the data to the file
    //  fputs($outputFile, "$scoresFile:$scores");
    // //  // // after we are done we close the file
    //  fclose($outputFile); 
    
     print "<p>Summary for $scoresFile</p>";
     print "<p>Average Score: $average</p>";
     print "<p>Highest Score: $highest</p>";
     print "<p>Lowest Score: $lowest</p>";
     print "<p>Passing Score: $numberPassing</p>";
     print "<p>Total number of Scores: $totalNumber</p>";
  

?>


    <p><a href="Foskey-calculating.html">Return to beginning</a></p>
</body>
</html>