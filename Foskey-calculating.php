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
    <link rel="stylesheet" href="Foskey-calculating.css">
    <title>Scores and Arrays</title>
</head>
<body>
    <!-- image file required -->
    <img src="Foskey-calculating.jpeg" alt="whats your score logo">
    <h1>Arrays with functions</h1>

<?php
    //  some error reporting to find ALL MY DANG BUGS !!!!
    error_reporting(E_ALL); ini_set('display_errors','1');
    // starting with an empty array
    $scores = [];
    // gotta include out functions file
    include("Foskey-inc-calc-functions.php");
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
    // //  call the highestInArray function and store results in a new variable
    $highest = highestInArray($scores);
    // // //  call the lowestInArray function and store results in a new variable
    $lowest = lowestInArray($scores);
    // // //  call the numPassingArray function and store results in a new variable
    $numberPassing = numPassingArray($scores);
    // // // create a variable equal to the array length 
    $totalNumber = sizeof($scores);
    
    //  // Open or create output.txt file 
    $myfile = fopen("output.txt", "w") or die("Unable to open file");
    //  write the required info to the text file called output.txt
    fwrite($myfile, "$scoresFile:$average:$highest:$lowest:$numberPassing:$totalNumber");
    //  close the file after we are done
    fclose($myfile);
    //  Print to the screen the required information
     print "<p>Summary for $scoresFile</p>";
     print "<p>Average Score: $average</p>";
     print "<p>Highest Score: $highest</p>";
     print "<p>Lowest Score: $lowest</p>";
     print "<p>Passing Score: $numberPassing</p>";
     print "<p>Total number of Scores: $totalNumber</p>";
  

?>

   <!--  Here we have a link back to the main page -->
    <p><a href="Foskey-calculating.html">Return to input</a></p>
</body>
</html>