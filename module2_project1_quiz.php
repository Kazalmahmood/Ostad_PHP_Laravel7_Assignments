<?php

//** Module 2 PHP Assignment **//
//* Terminal-Based Quiz Application *//

//** Quiz Questions and Answers **//
$questions = [
      ['question' => 'What is 2 + 2?', 'answer' => '4'],
      ['question' => 'what is the capital of France?', 'answer' => 'Paris'],
      ['question' => 'Who wrote "Hamlet"?', 'answer' => 'Shakespeare'],
];


//** Display Quiz and Collect User Answers **//
$user_answers = [];
echo "\n ** Welcome to the Quiz Application! **\n\n";
foreach ($questions as $index => $question) {
    echo "Question " . $index + 1 . ": " . $question['question'] . "\n";
    $user_answers[$index] = trim(readline("Your Answer: "));
    echo "\n";
}


//** Function to Evaluate Quiz **//
function evaluateQuiz(array $questions, array $user_answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($user_answers[$index] === $question['answer']) {
            $score++;
        }
    }
    return $score;
}


//** Calculate Score and Provide Feedback **//
$score = evaluateQuiz($questions, $user_answers);
echo "Quiz completed!\n";
echo "--------------\n";
echo "Your score is: $score out of " . count($questions) . "\n";

if ($score === 3) {
    echo "Excellent! You got all questions correct.\n";
} elseif ($score > 1) {
    echo "Great job! You did well.\n";
} else {
    echo "Keep practicing! You can do better.\n";
}
